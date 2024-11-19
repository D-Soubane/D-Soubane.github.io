<?php
$file = 'visitors.txt';

// Initialize counter if the file does not exist
if (!file_exists($file)) {
    file_put_contents($file, 0);
}

// Increment the counter
$count = (int) file_get_contents($file);
$count++;
file_put_contents($file, $count);

// Return the count
echo $count;
?>
