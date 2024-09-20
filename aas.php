<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fake.css">
    <title>YouTube ADS</title>
</head>
<body>

    <h1>Youtube ADS</h1> 

    <!-- Visitor Counter -->
    <div class="visitor-counter">
        <?php
        // File that stores the visitor count
        $counter_file = 'counter.txt';

        // Check if the file exists
        if (!file_exists($counter_file)) {
            // If not, create the file and initialize the count to 0
            file_put_contents($counter_file, '0');
        }

        // Read the current visitor count from the file
        $current_count = file_get_contents($counter_file);

        // Increment the count by 1
        $current_count++;

        // Write the updated count back to the file
        file_put_contents($counter_file, $current_count);

        // Display the visitor count
        echo "Total Visitors: " . $current_count;
        ?>
    </div>

    <!-- Video Section -->
    <div class="video-card">
        <img src="revimg1.jpg" alt="Video Thumbnail 1">
        <h4>Prvana Video 1</h4> 
        <button class="watch-button" onclick="window.location.href='rev1.mp4'">Watch</button>
    </div>

</body>
</html>
