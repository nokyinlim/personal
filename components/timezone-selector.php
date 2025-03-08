
<?php

function generate_timezone_selector() {

    echo <<<ENDTIMEZONESELECT
<div class="card mb-4 p-4 border border-gray-300">
    <script>
document.addEventListener('DOMContentLoaded', function() {
    const timezoneDropdown = document.getElementById('timezone');

    // Populate the timezone dropdown
    const timezones = [
        "Pacific/Midway", "Pacific/Samoa", "Pacific/Honolulu", "America/Anchorage", 
        "America/Los_Angeles", "America/Denver", "America/Chicago", "America/New_York", 
        "America/Caracas", "America/Sao_Paulo", "Atlantic/South_Georgia", "Atlantic/Azores", 
        "Europe/London", "Europe/Berlin", "Europe/Paris", "Europe/Moscow", 
        "Asia/Dubai", "Asia/Karachi", "Asia/Kolkata", "Asia/Dhaka", 
        "Asia/Bangkok", "Asia/Singapore", "Asia/Hong_Kong", "Australia/Sydney", 
        "Pacific/Auckland"
    ];

    timezones.forEach(tz => {
        const option = document.createElement('option');
        option.value = tz;
        option.textContent = tz.replace(/_/g, ' ');
        timezoneDropdown.appendChild(option);
    });

    // Save the selected timezone in a cookie
    document.getElementById('save-timezone').addEventListener('click', function() {
        const selectedTimezone = timezoneDropdown.value;
        if (selectedTimezone) {
            // Set cookie for 1 year
            const expirationDate = new Date();
            expirationDate.setFullYear(expirationDate.getFullYear() + 1);
            document.cookie = `userTimezone=\${selectedTimezone}; expires=\${expirationDate.toUTCString()}; path=/`;
            alert(`Timezone saved: \${selectedTimezone}`);
        } else {
            alert('Please select a timezone.');
        }
    });
});
    </script>
    <style>
.timezone-selector {
    background-color: #f9f9f9;
    border: 1px solid #ddd;
    border-radius: 5px;
    padding: 20px;
    margin: 20px 0;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.timezone-dropdown {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
}
    </style>
    <h4 class="mb-2"><i class="fas fa-globe text-primary mr-2"></i>&nbsp;&nbsp;Select Your Timezone</h4>
    <p class="text-muted text-sm">Select your timezone from the list below.</p>
    <select id="timezone" class="timezone-dropdown">
        <option value="">-- Select Time Zone --</option>
        <!-- Timezone options will be populated by JavaScript -->
    </select>
    <button id="save-timezone" class="btn btn-outline btn-sm">Save Time Zone</button>
</div>

<script src="js/timezone-selector.js"></script>
ENDTIMEZONESELECT;
}