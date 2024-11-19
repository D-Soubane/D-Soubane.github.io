<?php
$file = 'visitors.txt';

// Initialize the file with 0 if it doesn't exist
if (!file_exists($file)) {
    file_put_contents($file, 0);
}

// Read the current count
$count = (int) file_get_contents($file);

// Increment the count
$count++;

// Save the new count
file_put_contents($file, $count);

// Display the count
echo $count;
?>
