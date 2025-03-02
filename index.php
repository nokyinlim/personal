<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Personal Dashboard</title>
  <link rel="stylesheet" href="style.css">
  <!-- Add a modern icon library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <!-- Navigation -->
    <header class="container">
        <nav class="nav">
            <div class="flex justify-between items-center">
                <ul class="nav-list">
                    <h1 class="text-xl font-bold nav-item">Personal Dashboard</h1>
                    <li class="nav-item"><a href="#" class="active">Home</a></li>
                    <li class="nav-item"><a href="#productivity">Productivity</a></li>
                    <li class="nav-item"><a href="/academic">Academic</a></li>
                    <li class="nav-item"><a href="#utilities">Utilities</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="container mb-8">
        <div class="card p-8 mb-8">
            <div class="text-center mb-6">
                <h2 class="text-3xl mb-4">Welcome Back</h2>
                <p class="text-muted">Your personal workspace for productivity, learning, and organization</p>
            </div>
            
            <div class="flex justify-between items-center">
                <div>
                    <p class="mb-2"><span class="badge badge-primary">Today</span> <?php echo date('l, F j, Y'); ?></p>
                    <p class="text-lg"><?php echo "Good " . (date('H') < 12 ? "morning" : (date('H') < 18 ? "afternoon" : "evening")); ?>!</p>
                </div>
                <a href="#quick-access" class="btn btn-primary">Quick Links <i class="fas fa-arrow-right ml-2"></i></a>
            </div>
        </div>
    </section>

    <!-- Quick Access Section -->
    <section id="quick-access" class="container mb-8">
        <div class="card-header">
            <h3>Quick Access</h3>
        </div>
        <div class="grid grid-cols-4">
            <a href="#" class="card text-center">
                <i class="fas fa-tasks text-primary text-2xl mb-2"></i>
                <h4>Tasks</h4>
            </a>
            <a href="#" class="card text-center">
                <i class="fas fa-calendar-alt text-primary text-2xl mb-2"></i>
                <h4>Schedule</h4>
            </a>
            <a href="#" class="card text-center">
                <i class="fas fa-book text-primary text-2xl mb-2"></i>
                <h4>Notes</h4>
            </a>
            <a href="#" class="card text-center">
                <i class="fas fa-bookmark text-primary text-2xl mb-2"></i>
                <h4>Bookmarks</h4>
            </a>
        </div>
    </section>

    <!-- Main Sections -->
    <section id="productivity" class="container mb-8">
        <div class="card-header">
            <h3>Productivity Tools</h3>
        </div>
        <div class="grid grid-cols-3 mb-4">
            <div class="card">
                <h4><i class="fas fa-list-check text-primary mr-2"></i> Task Management</h4>
                <p class="text-muted mb-4">Organize and track your daily tasks and projects</p>
                <a href="#" class="btn btn-outline btn-sm">Open</a>
            </div>
            <div class="card">
                <h4><i class="fas fa-chart-line text-primary mr-2"></i> Progress Tracking</h4>
                <p class="text-muted mb-4">Monitor progress on your personal goals</p>
                <a href="#" class="btn btn-outline btn-sm">Open</a>
            </div>
            <div class="card">
                <h4><i class="fas fa-calendar-week text-primary mr-2"></i> Schedule</h4>
                <p class="text-muted mb-4">View and manage your weekly timetable</p>
                <a href="#" class="btn btn-outline btn-sm">Open</a>
            </div>
        </div>
    </section>

    <section id="academic" class="container mb-8">
        <div class="card-header">
            <h3>Academic Resources</h3>
        </div>
        <div class="grid grid-cols-3 mb-4">
            <div class="card">
                <h4><i class="fas fa-graduation-cap text-primary mr-2"></i> Knowledge Organizers</h4>
                <p class="text-muted mb-4">Quick subject revision materials and notes</p>
                <a href="/academic/knowledge/" class="btn btn-outline btn-sm">Open</a>
            </div>
            <div class="card">
                <h4><i class="fas fa-clock text-primary mr-2"></i> Study Planner</h4>
                <p class="text-muted mb-4">Plan and organize your study sessions</p>
                <a href="#" class="btn btn-outline btn-sm">Open</a>
            </div>
            <div class="card">
                <h4><i class="fas fa-pen-to-square text-primary mr-2"></i> Note Templates</h4>
                <p class="text-muted mb-4">Templates for effective note-taking</p>
                <a href="#" class="btn btn-outline btn-sm">Open</a>
            </div>
        </div>
    </section>

    <section id="utilities" class="container mb-8">
        <div class="card-header">
            <h3>Utilities</h3>
        </div>
        <div class="grid grid-cols-3 mb-4">
            <div class="card">
                <h4><i class="fas fa-code text-primary mr-2"></i> Helper Scripts</h4>
                <p class="text-muted mb-4">Scripts for automating common tasks</p>
                <a href="#" class="btn btn-outline btn-sm">Open</a>
            </div>
            <div class="card">
                <h4><i class="fas fa-book-open text-primary mr-2"></i> References</h4>
                <p class="text-muted mb-4">Important reference materials and guides</p>
                <a href="#" class="btn btn-outline btn-sm">Open</a>
            </div>
            <div class="card">
                <h4><i class="fas fa-link text-primary mr-2"></i> External Resources</h4>
                <p class="text-muted mb-4">Links to useful external tools and websites</p>
                <a href="#" class="btn btn-outline btn-sm">Open</a>
            </div>
        </div>
    </section>

    <!-- Recent Activity -->
    <section class="container mb-8">
        <div class="card">
            <div class="card-header">
                <h3>Recent Activity</h3>
            </div>
            <div class="mb-4">
                <div class="flex justify-between items-center p-3 border rounded mb-2">
                    <div>
                        <p class="font-semibold">Task Updated: Weekly Plan</p>
                        <p class="text-sm text-muted">Modified 2 hours ago</p>
                    </div>
                    <span class="badge badge-primary">Task</span>
                </div>
                <div class="flex justify-between items-center p-3 border rounded mb-2">
                    <div>
                        <p class="font-semibold">Note Created: Project Ideas</p>
                        <p class="text-sm text-muted">Created yesterday</p>
                    </div>
                    <span class="badge badge-success">Note</span>
                </div>
                <div class="flex justify-between items-center p-3 border rounded">
                    <div>
                        <p class="font-semibold">Schedule Updated: Study Sessions</p>
                        <p class="text-sm text-muted">Modified 3 days ago</p>
                    </div>
                    <span class="badge badge-warning">Schedule</span>
                </div>
            </div>
            <a href="#" class="btn btn-secondary">View All Activity</a>
        </div>
    </section>

    <!-- Status Summary -->
    <section class="container mb-8">
        <div class="grid grid-cols-3">
            <div class="card">
                <h4 class="mb-2">Task Progress</h4>
                <div class="progress mb-2">
                    <div class="progress-bar" style="width: 65%;"></div>
                </div>
                <p class="text-sm text-muted">65% of weekly tasks completed</p>
            </div>
            <div class="card">
                <h4 class="mb-2">Study Goals</h4>
                <div class="progress mb-2">
                    <div class="progress-bar" style="width: 40%; background-color: var(--color-warning);"></div>
                </div>
                <p class="text-sm text-muted">40% of study goals achieved</p>
            </div>
            <div class="card">
                <h4 class="mb-2">Project Status</h4>
                <div class="progress mb-2">
                    <div class="progress-bar" style="width: 80%; background-color: var(--color-success);"></div>
                </div>
                <p class="text-sm text-muted">80% of current project completed</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="container mt-8 mb-4">
        <div class="text-center text-sm text-muted">
            <p>&copy; <?php echo date('Y'); ?> Personal Dashboard</p>
            <p class="mt-1">A private workspace for productivity and organization</p>
        </div>
    </footer>

    <script>
        function toggleDarkMode() {
            document.body.classList.toggle('dark-mode');
        }
    </script>
</body>
</html>