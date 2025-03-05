<?php
include '../../components/navbar.php';

// Initialize the calendar data and helper functions
session_start();
date_default_timezone_set('UTC');

// File to store calendar events
$eventsFile = 'events.json';

// Create the file if it doesn't exist
if (!file_exists($eventsFile)) {
    file_put_contents($eventsFile, json_encode(['events' => []]));
}

// Load events from JSON file
function loadEvents() {
    global $eventsFile;
    $contents = file_get_contents($eventsFile);
    return json_decode($contents, true);
}

// Save events to JSON file
function saveEvents($events) {
    global $eventsFile;
    file_put_contents($eventsFile, json_encode($events, JSON_PRETTY_PRINT));
}

// Handle form submissions
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = loadEvents();
    
    // Add or edit an event
    if (isset($_POST['action']) && $_POST['action'] === 'save_event') {
        $event = [
            'id' => isset($_POST['id']) ? $_POST['id'] : uniqid(),
            'title' => $_POST['title'],
            'description' => $_POST['description'],
            'start_time' => $_POST['start_date'] . ' ' . $_POST['start_time'],
            'end_time' => $_POST['end_date'] . ' ' . $_POST['end_time'],
            'type' => $_POST['type'],
            'color' => $_POST['color'],
            'recurring' => [
                'type' => $_POST['recurring_type'],
                'interval' => (int)$_POST['recurring_interval'],
                'end_date' => $_POST['recurring_end_date']
            ]
        ];
        
        // Update or add event
        $eventIndex = -1;
        foreach ($data['events'] as $index => $existingEvent) {
            if ($existingEvent['id'] === $event['id']) {
                $eventIndex = $index;
                break;
            }
        }
        
        if ($eventIndex >= 0) {
            $data['events'][$eventIndex] = $event;
        } else {
            $data['events'][] = $event;
        }
        
        saveEvents($data);
        header('Location: index.php');
        exit;
    }
    
    // Delete an event
    if (isset($_POST['action']) && $_POST['action'] === 'delete_event') {
        $id = $_POST['id'];
        foreach ($data['events'] as $index => $event) {
            if ($event['id'] === $id) {
                array_splice($data['events'], $index, 1);
                break;
            }
        }
        
        saveEvents($data);
        header('Location: index.php');
        exit;
    }
    
    // Import calendar
    if (isset($_POST['action']) && $_POST['action'] === 'import') {
        if ($_FILES['import_file']['error'] == UPLOAD_ERR_OK) {
            $content = file_get_contents($_FILES['import_file']['tmp_name']);
            $importData = json_decode($content, true);
            
            if (json_last_error() === JSON_ERROR_NONE && isset($importData['events'])) {
                saveEvents($importData);
                header('Location: index.php?msg=imported');
                exit;
            }
        }
        header('Location: index.php?error=import');
        exit;
    }
    
    // Export calendar
    if (isset($_POST['action']) && $_POST['action'] === 'export') {
        $data = loadEvents();
        header('Content-Type: application/json');
        header('Content-Disposition: attachment; filename="calendar_export.json"');
        echo json_encode($data, JSON_PRETTY_PRINT);
        exit;
    }
}

// Get the current week's start and end dates
$currentWeek = isset($_GET['week']) ? $_GET['week'] : date('Y-m-d');
$weekStart = date('Y-m-d', strtotime('monday this week', strtotime($currentWeek)));
$weekEnd = date('Y-m-d', strtotime('sunday this week', strtotime($currentWeek)));

// Get events for the current week
function getWeekEvents($start, $end) {
    $allEvents = loadEvents();
    $weekEvents = [];
    
    foreach ($allEvents['events'] as $event) {
        $eventStart = strtotime($event['start_time']);
        $eventDate = date('Y-m-d', $eventStart);
        
        // Handle non-recurring events
        if ($eventDate >= $start && $eventDate <= $end) {
            $weekEvents[] = $event;
            continue;
        }
        
        // Handle recurring events
        if ($event['recurring']['type'] !== 'none') {
            $recurrenceEnd = !empty($event['recurring']['end_date']) ? 
                strtotime($event['recurring']['end_date']) : strtotime('+1 year');
            
            $interval = $event['recurring']['interval'];
            $type = $event['recurring']['type'];
            
            // Calculate the first occurrence that could appear in this week
            $firstEventDate = strtotime($event['start_time']);
            $weekStartDate = strtotime($start);
            $recurStart = $firstEventDate;
            
            // If the original event is before the week start, find the first occurrence that might be in this week
            if ($firstEventDate < $weekStartDate) {
                // Calculate how many intervals we need to move forward
                $diff = 0;
                switch ($type) {
                    case 'daily':
                        $diff = floor(($weekStartDate - $firstEventDate) / (86400 * $interval));
                        break;
                    case 'weekly':
                        $diff = floor(($weekStartDate - $firstEventDate) / (604800 * $interval));
                        break;
                    case 'monthly':
                        // Calculate months difference
                        $firstMonth = date('Y', $firstEventDate) * 12 + date('m', $firstEventDate) - 1;
                        $weekStartMonth = date('Y', $weekStartDate) * 12 + date('m', $weekStartDate) - 1;
                        $diff = floor(($weekStartMonth - $firstMonth) / $interval);
                        break;
                    case 'yearly':
                        $diff = floor((date('Y', $weekStartDate) - date('Y', $firstEventDate)) / $interval);
                        break;
                }
                
                // Move forward by calculated intervals
                if ($diff > 0) {
                    switch ($type) {
                        case 'daily':
                            $recurStart = strtotime("+".($diff * $interval)." days", $firstEventDate);
                            break;
                        case 'weekly':
                            $recurStart = strtotime("+".($diff * $interval)." weeks", $firstEventDate);
                            break;
                        case 'monthly':
                            $recurStart = strtotime("+".($diff * $interval)." months", $firstEventDate);
                            break;
                        case 'yearly':
                            $recurStart = strtotime("+".($diff * $interval)." years", $firstEventDate);
                            break;
                    }
                }
            }
            
            // Generate all occurrences that fall within the week
            while ($recurStart <= strtotime($end)) {
                $recurDate = date('Y-m-d', $recurStart);
                if ($recurDate >= $start && $recurDate <= $end && $recurStart <= $recurrenceEnd) {
                    // Create a copy of the event with the recurring date
                    $recurEvent = $event;
                    $recurEvent['start_time'] = date('Y-m-d H:i:s', $recurStart);
                    
                    // Calculate end time based on original duration
                    $origDuration = strtotime($event['end_time']) - strtotime($event['start_time']);
                    $recurEvent['end_time'] = date('Y-m-d H:i:s', $recurStart + $origDuration);
                    
                    $weekEvents[] = $recurEvent;
                }
                
                // Move to next occurrence based on recurrence type and interval
                switch ($type) {
                    case 'daily':
                        $recurStart = strtotime("+{$interval} days", $recurStart);
                        break;
                    case 'weekly':
                        $recurStart = strtotime("+{$interval} weeks", $recurStart);
                        break;
                    case 'monthly':
                        $recurStart = strtotime("+{$interval} months", $recurStart);
                        break;
                    case 'yearly':
                        $recurStart = strtotime("+{$interval} years", $recurStart);
                        break;
                }
            }
        }
    }
    
    return $weekEvents;
}

$weekEvents = getWeekEvents($weekStart, $weekEnd);

// Navigation for previous and next week
$prevWeek = date('Y-m-d', strtotime('-1 week', strtotime($weekStart)));
$nextWeek = date('Y-m-d', strtotime('+1 week', strtotime($weekStart)));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schedule Manager</title>
    <link rel="stylesheet" href="/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="/glow-effect.js"></script>
</head>
<body>
    <?php create_navbar(1, 'Your Schedule'); ?>

    <!-- Hero Section -->
    <section class="container mb-8">
      <div class="card p-8 cursor-glow-alt glow-primary">
        <div class="text-center mb-6">
          <h2 class="text-3xl mb-4">Weekly Schedule Planner</h2>
          <p class="text-muted">Manage your calendar, organize events, and plan your week efficiently</p>
        </div>
      </div>
    </section>

    <!-- Main Content -->
    <section class="container mb-8">
        <div class="card p-6 mb-8 no-hover-transform">
            <!-- Calendar Header -->
            <div class="card-header">
                <h3><i class="fas fa-calendar-alt text-primary"></i>&nbsp;&nbsp;Weekly Calendar</h3>
            </div>
            
            <!-- Calendar Navigation -->
            <div class="flex justify-between items-center mb-4">
                <a href="?week=<?php echo $prevWeek; ?>" class="btn btn-outline">
                    <i class="fas fa-chevron-left"></i>&nbsp;&nbsp;Previous Week
                </a>
                <h3 class="text-center"><?php echo date('M j', strtotime($weekStart)) . ' - ' . date('M j, Y', strtotime($weekEnd)); ?></h3>
                <a href="?week=<?php echo $nextWeek; ?>" class="btn btn-outline">
                    Next Week&nbsp;&nbsp;<i class="fas fa-chevron-right"></i>
                </a>
            </div>
            
            <!-- Calendar Weekly View -->
            <div class="week-view mb-6">
                <div class="calendar">
                    <!-- Empty corner -->
                    <div></div>
                    
                    <!-- Day headers -->
                    <?php for($i = 0; $i < 7; $i++): ?>
                        <?php 
                        $day = date('Y-m-d', strtotime("+{$i} days", strtotime($weekStart)));
                        $isToday = $day == date('Y-m-d');
                        $headerClass = $isToday ? 'day-header current-day' : 'day-header';
                        ?>
                        <div class="<?php echo $headerClass; ?>">
                            <?php echo date('D, M j', strtotime($day)); ?>
                            <?php if($isToday): ?>
                                <span class="badge badge-primary">Today</span>
                            <?php endif; ?>
                        </div>
                    <?php endfor; ?>
                    
                    <!-- Time slots -->
                    <?php for($hour = 0; $hour < 24; $hour++): ?>
                        <!-- Time label -->
                        <div class="time-label">
                            <?php echo sprintf('%02d:00', $hour); ?>
                        </div>
                        
                        <!-- Day columns -->
                        <?php for($i = 0; $i < 7; $i++): ?>
                            <?php 
                            $day = date('Y-m-d', strtotime("+{$i} days", strtotime($weekStart)));
                            $isToday = $day == date('Y-m-d');
                            $timeSlotClass = $isToday ? 'time-slot today-slot' : 'time-slot';
                            $timeSlotStart = $day . ' ' . sprintf('%02d:00:00', $hour);
                            $timeSlotEnd = $day . ' ' . sprintf('%02d:59:59', $hour);
                            ?>
                            <div class="<?php echo $timeSlotClass; ?>" data-date="<?php echo $day; ?>" data-hour="<?php echo $hour; ?>">
                                <?php foreach($weekEvents as $event): ?>
                                    <?php 
                                    $eventStart = strtotime($event['start_time']);
                                    $eventEnd = strtotime($event['end_time']);
                                    $slotStart = strtotime($timeSlotStart);
                                    $slotEnd = strtotime($timeSlotEnd);
                                    
                                    if ($eventStart <= $slotEnd && $eventEnd >= $slotStart) {
                                        // Calculate position and height
                                        $top = 0;
                                        if ($eventStart > $slotStart) {
                                            $minutesFromHourStart = date('i', $eventStart);
                                            $top = ($minutesFromHourStart / 60) * 100;
                                        }
                                        
                                        $height = 100;
                                        if ($eventStart > $slotStart) {
                                            $minutesAvailable = 60 - date('i', $eventStart);
                                            $height = ($minutesAvailable / 60) * 100;
                                        }
                                        if ($eventEnd < $slotEnd) {
                                            $height = (date('i', $eventEnd) / 60) * 100;
                                        }
                                        
                                        // Limit height to the current cell
                                        $height = min($height, 100);
                                    ?>
                                        <div class="event" 
                                            style="top: <?php echo $top; ?>%; height: <?php echo $height; ?>%; background-color: <?php echo $event['color']; ?>;"
                                            data-event-id="<?php echo $event['id']; ?>"
                                            onclick="editEvent('<?php echo $event['id']; ?>')">
                                            <?php echo htmlspecialchars($event['title']); ?>
                                        </div>
                                    <?php } ?>
                                <?php endforeach; ?>
                            </div>
                        <?php endfor; ?>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
        
        <!-- Actions Card -->
        <div class="card p-6 mb-8 no-hover-transform">
            <div class="card-header">
                <h3><i class="fas fa-cog text-primary"></i>&nbsp;&nbsp;Calendar Actions</h3>
            </div>
            
            <!-- Calendar Actions -->
            <div class="flex flex-wrap gap-4 mb-6">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#eventModal">
                    <i class="fas fa-plus"></i>&nbsp;&nbsp;Add New Event
                </button>
                
                <button type="button" class="btn btn-secondary" onclick="toggleTimeFormat()">
                    <i class="fas fa-clock"></i>&nbsp;&nbsp;Toggle 12/24 Hour
                </button>
                
                <button type="button" class="btn btn-secondary" onclick="toggleWeekends()">
                    <i class="fas fa-calendar-day"></i>&nbsp;&nbsp;Toggle Weekends
                </button>
                
                <a href="?week=<?php echo date('Y-m-d'); ?>" class="btn btn-outline">
                    <i class="fas fa-calendar-check"></i>&nbsp;&nbsp;Go to Today
                </a>
            </div>
            
            <!-- Import/Export Section -->
            <div class="card-header">
                <h3><i class="fas fa-exchange-alt text-primary"></i>&nbsp;&nbsp;Import & Export</h3>
            </div>
            <div class="import-export">
                <div class="col-md-6 mb-4">
                    <form method="post" enctype="multipart/form-data">
                        <div class="input-group">
                            <input type="file" name="import_file" class="form-control" required>

                            <button type="submit" class="btn btn-primary">
                              <i class="fas fa-upload"></i>&nbsp;&nbsp;Import
                            </button>
                            <input type="hidden" name="action" value="import">
                        </div>
                        <p class="form-help-text mt-2">Import calendar from a JSON file</p>
                    </form>
                </div>
                <div class="col-md-6">
                    <form method="post">
                        <input type="hidden" name="action" value="export">
                        <button type="submit" class="btn btn-secondary w-100">
                            <i class="fas fa-download"></i>&nbsp;&nbsp;Export Calendar
                        </button>
                        <p class="form-help-text mt-2">Save your calendar as a JSON file for backup or sharing</p>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Tips & Insights -->
    <section class="container mb-8">
        <div class="card-header">
            <h3><i class="fas fa-lightbulb text-primary"></i>&nbsp;&nbsp;Schedule Tips</h3>
        </div>
        <div class="grid grid-cols-3">
            <div class="card">
                <h4><i class="fas fa-mouse-pointer text-primary"></i>&nbsp;&nbsp;Quick Actions</h4>
                <ul style="list-style-type: disc; margin-left: 20px;">
                    <li>Double-click any time slot to add a new event</li>
                    <li>Click on an existing event to edit</li>
                    <li>Recurring events are automatically added</li>
                </ul>
            </div>
            <div class="card">
                <h4><i class="fas fa-sync text-primary"></i>&nbsp;&nbsp;Recurring Events</h4>
                <ul style="list-style-type: disc; margin-left: 20px;">
                    <li>Set daily, weekly, monthly or yearly patterns</li>
                    <li>Customize the recurrence interval</li>
                    <li>Set an optional end date for recurring events</li>
                </ul>
            </div>
            <div class="card">
                <h4><i class="fas fa-palette text-primary"></i>&nbsp;&nbsp;Color Coding</h4>
                <ul style="list-style-type: disc; margin-left: 20px;">
                    <li>Use different colors for different event types</li>
                    <li>Create a consistent color system</li>
                    <li>Visually distinguish between work and personal events</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Event Modal -->
    <div class="modal fade" id="eventModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="eventModalTitle">Add New Event</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">&times;</button>
                </div>
                <div class="modal-body">
                    <form id="eventForm" method="post">
                        <input type="hidden" name="action" value="save_event">
                        <input type="hidden" name="id" id="event_id">
                        
                        <div class="form-group">
                            <label for="title" class="form-label">Event Title</label>
                            <input type="text" class="form-control" id="title" name="title" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label">Date & Time</label>
                            <div class="row">
                                <div class="col-md-6 mb-2">
                                    <label for="start_date" class="form-label text-sm">Start Date</label>
                                    <input type="date" class="form-control" id="start_date" name="start_date" required>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="start_time" class="form-label text-sm">Start Time</label>
                                    <input type="time" class="form-control" id="start_time" name="start_time" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-2">
                                    <label for="end_date" class="form-label text-sm">End Date</label>
                                    <input type="date" class="form-control" id="end_date" name="end_date" required>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="end_time" class="form-label text-sm">End Time</label>
                                    <input type="time" class="form-control" id="end_time" name="end_time" required>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="type" class="form-label">Event Type</label>
                            <select class="form-select" id="type" name="type">
                                <option value="work">Work</option>
                                <option value="personal">Personal</option>
                                <option value="meeting">Meeting</option>
                                <option value="appointment">Appointment</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="color" class="form-label">Color</label>
                            <div class="flex items-center gap-2">
                                <input type="color" class="form-control form-control-color" id="color" name="color" value="#3b82f6">
                                <div>
                                    <button type="button" class="btn btn-sm" style="background-color:#3b82f6" onclick="setColor('#3b82f6')"></button>
                                    <button type="button" class="btn btn-sm" style="background-color:#ef4444" onclick="setColor('#ef4444')"></button>
                                    <button type="button" class="btn btn-sm" style="background-color:#10b981" onclick="setColor('#10b981')"></button>
                                    <button type="button" class="btn btn-sm" style="background-color:#f59e0b" onclick="setColor('#f59e0b')"></button>
                                    <button type="button" class="btn btn-sm" style="background-color:#8b5cf6" onclick="setColor('#8b5cf6')"></button>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="recurring_type" class="form-label">Recurring</label>
                            <select class="form-select" id="recurring_type" name="recurring_type">
                                <option value="none">None</option>
                                <option value="daily">Daily</option>
                                <option value="weekly">Weekly</option>
                                <option value="monthly">Monthly</option>
                                <option value="yearly">Yearly</option>
                            </select>
                        </div>
                        
                        <div class="recurring-options" style="display: none;">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="recurring_interval" class="form-label">Repeat every</label>
                                    <div class="input-group">
                                        <input type="number" class="form-control" id="recurring_interval" name="recurring_interval" value="1" min="1">
                                        <span class="input-group-text" id="interval-suffix">day(s)</span>
                                    </div>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="recurring_end_date" class="form-label">Until (Optional)</label>
                                    <input type="date" class="form-control" id="recurring_end_date" name="recurring_end_date">
                                </div>
                            </div>
                            <div class="recurring-summary" id="recurring-summary"></div>
                            <p class="form-help-text">
                                Examples: "Every 2 weeks", "Every 3 months", etc.
                            </p>
                        </div>
                        
                        <div class="mt-4 text-end">
                            <button type="button" class="btn btn-danger me-2" id="deleteEventBtn" style="display: none;">
                                <i class="fas fa-trash"></i>&nbsp;&nbsp;Delete
                            </button>
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save"></i>&nbsp;&nbsp;Save Event
                            </button>
                        </div>
                    </form>
                    
                    <form id="deleteForm" method="post" style="display: none;">
                        <input type="hidden" name="action" value="delete_event">
                        <input type="hidden" name="id" id="delete_event_id">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Initialize event data
        const events = <?php echo json_encode($weekEvents); ?>;
        const eventModal = new bootstrap.Modal(document.getElementById('eventModal'));
        
        // Handle clicking on time slots to add new events
        document.querySelectorAll('.time-slot').forEach(slot => {
            slot.addEventListener('dblclick', function() {
                const date = this.dataset.date;
                const hour = this.dataset.hour;
                
                document.getElementById('event_id').value = '';
                document.getElementById('title').value = '';
                document.getElementById('description').value = '';
                document.getElementById('start_date').value = date;
                document.getElementById('start_time').value = `${hour}:00`;
                document.getElementById('end_date').value = date;
                document.getElementById('end_time').value = `${(parseInt(hour) + 1) % 24}:00`;
                document.getElementById('type').value = 'work';
                document.getElementById('color').value = '#3b82f6';
                document.getElementById('recurring_type').value = 'none';
                document.getElementById('recurring_interval').value = '1';
                document.getElementById('recurring_end_date').value = '';
                
                document.getElementById('deleteEventBtn').style.display = 'none';
                document.getElementById('eventModalTitle').textContent = 'Add New Event';
                
                // Reset recurring options
                document.querySelector('.recurring-options').style.display = 'none';
                document.getElementById('recurring-summary').textContent = '';
                document.getElementById('interval-suffix').textContent = 'day(s)';
                
                eventModal.show();
            });
        });
        
        // Function to edit an existing event
        function editEvent(eventId) {
            const event = events.find(e => e.id === eventId);
            if (!event) return;
            
            const startDateTime = new Date(event.start_time);
            const endDateTime = new Date(event.end_time);
            
            document.getElementById('event_id').value = event.id;
            document.getElementById('title').value = event.title;
            document.getElementById('description').value = event.description;
            document.getElementById('start_date').value = startDateTime.toISOString().split('T')[0];
            document.getElementById('start_time').value = startDateTime.toTimeString().substr(0, 5);
            document.getElementById('end_date').value = endDateTime.toISOString().split('T')[0];
            document.getElementById('end_time').value = endDateTime.toTimeString().substr(0, 5);
            document.getElementById('type').value = event.type;
            document.getElementById('color').value = event.color;
            document.getElementById('recurring_type').value = event.recurring.type;
            document.getElementById('recurring_interval').value = event.recurring.interval;
            document.getElementById('recurring_end_date').value = event.recurring.end_date || '';
            
            // Show/hide recurring options
            if (event.recurring.type !== 'none') {
                document.querySelector('.recurring-options').style.display = 'block';
                updateRecurringSummary();
            } else {
                document.querySelector('.recurring-options').style.display = 'none';
            }
            
            document.getElementById('deleteEventBtn').style.display = 'inline-block';
            document.getElementById('delete_event_id').value = event.id;
            document.getElementById('eventModalTitle').textContent = 'Edit Event';
            
            eventModal.show();
        }
        
        // Set color from the quick palette
        function setColor(color) {
            document.getElementById('color').value = color;
        }
        
        // Show/hide recurring options and update the summary
        document.getElementById('recurring_type').addEventListener('change', updateRecurringSummary);
        document.getElementById('recurring_interval').addEventListener('input', updateRecurringSummary);
        document.getElementById('recurring_end_date').addEventListener('change', updateRecurringSummary);
        
        function updateRecurringSummary() {
            const recurringType = document.getElementById('recurring_type').value;
            const intervalEl = document.getElementById('recurring_interval');
            const interval = parseInt(intervalEl.value) || 1;
            const endDate = document.getElementById('recurring_end_date').value;
            const summaryEl = document.getElementById('recurring-summary');
            const suffixEl = document.getElementById('interval-suffix');
            
            // Hide/show recurring options
            if (recurringType !== 'none') {
                document.querySelector('.recurring-options').style.display = 'block';
                
                // Update suffix based on type
                switch (recurringType) {
                    case 'daily':
                        suffixEl.textContent = interval === 1 ? 'day' : 'days';
                        break;
                    case 'weekly':
                        suffixEl.textContent = interval === 1 ? 'week' : 'weeks';
                        break;
                    case 'monthly':
                        suffixEl.textContent = interval === 1 ? 'month' : 'months';
                        break;
                    case 'yearly':
                        suffixEl.textContent = interval === 1 ? 'year' : 'years';
                        break;
                }
                
                // Create human-readable summary
                let summary = `This event will repeat every ${interval} ${suffixEl.textContent}`;
                if (endDate) {
                    const formattedEndDate = new Date(endDate).toLocaleDateString();
                    summary += ` until ${formattedEndDate}`;
                } else {
                    summary += ' with no end date';
                }
                summaryEl.textContent = summary;
            } else {
                document.querySelector('.recurring-options').style.display = 'none';
                summaryEl.textContent = '';
            }
        }
        
        // Delete event handling
        document.getElementById('deleteEventBtn').addEventListener('click', function() {
            if (confirm('Are you sure you want to delete this event?')) {
                document.getElementById('deleteForm').submit();
            }
        });
        
        // Toggle time format (placeholder function)
        function toggleTimeFormat() {
            alert('Time format toggle functionality will be implemented soon.');
        }
        
        // Toggle weekends display (placeholder function)
        function toggleWeekends() {
            alert('Weekend toggle functionality will be implemented soon.');
        }
    </script>
</body>
</html>
