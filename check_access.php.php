<?php
$cne = $_POST['cne'];
$password = $_POST['password'];
$resource = $_POST['resource'];

// Replace 'YOUR_ACTUAL_CNE' and 'YOUR_ACTUAL_PASSWORD' with the actual CNE and password.
if ($cne === 'YOUR_ACTUAL_CNE' && $password === 'YOUR_ACTUAL_PASSWORD') {
    switch ($resource) {
        case 'physical_optics':
            header('Location: physical_optics.html');
            exit();
            break;
        // Add cases for other resources here
        default:
            echo 'Access granted but no resource specified.';
    }
} else {
    echo 'Access denied.';
}
?>

