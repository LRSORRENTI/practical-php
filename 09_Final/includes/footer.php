<div id="footer" class="flex justify-center">
    <div class="column three text-lg">
        <strong>Phone</strong>
        888.555.1234
    </div>
    <div class="column three text-lg">
        <strong>Location</strong>
        123 Main St <br>
        Louisville, KY
    </div>
    <div class="column three last text-lg">
        <strong>Hours</strong>
        <em>Tuesday - Thursday</em> <br>
        1:00PM - 9:00PM<br>
        <em>Friday - Saturday</em> <br>
        4:00PM - 11:00PM<br>
        <em>Sunday - Monday</em> <br>
        Closed<br><br>
    </div>
</div>

<!-- Open/Closed Banner -->
<?php
function isOpen()
{
    // Define opening hours
    $schedule = [
        'Tuesday' => ['13:00', '21:00'], // 1:00 PM - 9:00 PM
        'Wednesday' => ['13:00', '21:00'],
        'Thursday' => ['13:00', '21:00'],
        'Friday' => ['16:00', '23:00'], // 4:00 PM - 11:00 PM
        'Saturday' => ['16:00', '23:00']
    ];

    // Get the current day and time
    $currentDay = date('l'); // Full day name (e.g., "Tuesday")
    $currentTime = date('H:i'); // Current time in 24-hour format (e.g., "14:30")

    // Check if today is in the schedule and within opening hours
    if (isset($schedule[$currentDay])) {
        [$openTime, $closeTime] = $schedule[$currentDay];
        return $currentTime >= $openTime && $currentTime <= $closeTime;
    }

    // If not in the schedule, it's closed
    return false;
}

// Display the banner
if (isOpen()) {
    echo '<div class="banner open text-sm lg:text-2xl max-w-fit mx-auto" style="color: rgb(250, 249, 233); border-radius: 4px; background-color: rgb(110 231 183); text-align: center; padding: 10px; letter-spacing: 2px;">Open</div>';
} else {
    echo '<div class="banner closed" style="background-color: lightred; color: white; text-align: center; padding: 10px;">Closed</div>';
}
?>

<!-- Footer Section -->
<?php $companyName = "Pizzeria"; ?>
<small>&copy <?php echo date("Y") ?>&nbsp<?php echo $companyName ?></small>
</div>
</div>
<div class="copyright-info">
    <?php include('./copyright.php'); ?>
</div>
</body>

</html>