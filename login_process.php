<?php
session_start();

function validate_credentials($username, $password) {
    // Hard-coded list of users
    $users = [
        ['username' => '1', 'password' => '1'],
        ['username' => 'user2', 'password' => 'password2'],
        // Add more users here
    ];

    // Check if the submitted username and password are set
    if (isset($_POST['uname']) && isset($_POST['upassword'])) {
        // Get the submitted username and password
        $username = $_POST['uname'];
        $password = $_POST['upassword'];
    }

    // Initialize a flag to check if a match was found
    $match_found = false;

    // Check if the submitted username and password match any user in the list
    foreach ($users as $user) {
        if ($user['username'] === $username && $user['password'] === $password) {
            // If there's a match, set the flag to true and break the loop
            $match_found = true;
            break;
        }
    }

    // If a match was found, start a session and redirect to the home page
    if ($match_found) {
        $_SESSION['username'] = $username;
        header('Location: index2.php');
        exit;
    }

    // If no match was found, show an error message
    if (!$match_found) {
        $_SESSION['error'] = 'Invalid username or password.';
        header('Location: login.php');
}
}
// Call the validate_credentials() function
validate_credentials($_POST['uname'], $_POST['upassword']);
?>