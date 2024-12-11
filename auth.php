<?php
// Check if the user is already authenticated
if (!isset($_SERVER['PHP_AUTH_USER'])) {
    // If not authenticated, send a 401 Unauthorized header
    header('WWW-Authenticate: Basic realm="My Realm"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'You must enter a valid login name and password to access this resource.';
    exit;
} else {
    // If authenticated, retrieve the username and password
    $username = $_SERVER['PHP_AUTH_USER'];
    $password = $_SERVER['PHP_AUTH_PW'];

    // Display the entered username and password
    echo "Username: " . htmlspecialchars($username) . "<br>";
    echo "Password: " . htmlspecialchars($password) . "<br>";
}
?>