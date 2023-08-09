<?php
$cne = $_POST['cne'];
$password = $_POST['password'];
$resource = $_POST['resource'];

// Replace 'YOUR_ACTUAL_CNE' and 'YOUR_ACTUAL_PASSWORD' with the actual CNE and password.
if ($cne === 'CNE' && $password === 'LetThereBeLight') {
    switch ($resource) {
        case 'physical_optics':
            header('Location: physical_optics.html');
            exit();
            break;
        case 'electronics':
            header('Location: electronics.html');
            exit();
            break;
        case 'electrodynamics':
            header('Location: electrodynamics.html');
            exit();
            break;
        case 'dielectric_properties':
            header('Location: dielectric_properties.html');
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

