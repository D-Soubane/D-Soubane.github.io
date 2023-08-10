<?php
$cne = $_POST['cne'];
$password = $_POST['password'];
$resource = $_POST['resource'];

// Replace 'YOUR_ACTUAL_CNE' and 'YOUR_ACTUAL_PASSWORD' with the actual CNE and password.
if ($cne === 'YourCNE' && $password === 'YourPassword') {
    switch ($resource) {
        case 'physical_optics':
            $file = 'physical_optics.pdf'; // Replace with the actual file name
            break;
        case 'electronics':
            $file = 'electronics.pdf'; // Replace with the actual file name
            break;
        case 'electrodynamics':
            $file = 'electrodynamics.pdf'; // Replace with the actual file name
            break;
        case 'dielectric_properties':
            $file = 'dielectric_properties.pdf'; // Replace with the actual file name
            break;
        // Add cases for other resources here
        default:
            echo 'Access granted but no resource specified.';
            exit();
    }

    // Set headers for file download
    header('Content-Type: application/pdf'); // Set appropriate content type
    header('Content-Disposition: attachment; filename="' . $file . '"');
    readfile($file); // Serve the file for download
} else {
    echo 'Access denied.';
}
?>
