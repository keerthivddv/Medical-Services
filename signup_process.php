<?php
session_start();

// Define an array to store user accounts
$users = [];

function create_user($username, $password)
{
    global $users;

    // Check if the username already exists
    foreach ($users as $user) {
        if ($user['username'] === $username) {
            return false;
        }
    }

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Add the new user to the array
    $users[] = [
        'username' => $username,
        'password' => $hashed_password,
    ];

    return true;
}

function validate_credentials($username, $password)
{
    global $users;

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        foreach ($users as $user) {
            if ($user['username'] === $username && password_verify($password, $user['password'])) {
                $_SESSION['username'] = $user['username'];
                header('Location: index2.php');
                exit;
            }
        }

        $_SESSION['error'] = 'Invalid username or password';
        header('Location: login.php');
        exit;
    }
}

// Check if the sign-up form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['signup'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $password = $_POST['password'];

    // Create the new user
    $success = create_user($username, $password);

    if ($success) {
        $_SESSION['success'] = 'User account created successfully.';
        header('Location: index2.php');
        exit;
    } else {
        $_SESSION['error'] = 'Username already exists.';
        header('Location: login.php');
        exit;
    }
}

// Redirect to the login page if the user is already logged in
if (isset($_SESSION['username'])) {
    header('Location: index2.php');
    exit;
}


// Display any error or success messages
if (isset($_SESSION['error'])) {
    echo '<p style="color: red;">' . htmlspecialchars($_SESSION['error']) . '</p>';
    unset($_SESSION['error']);
}

if (isset($_SESSION['success'])) {
    echo '<p style="color: green;">' . htmlspecialchars($_SESSION['success']) . '</p>';
    unset($_SESSION['success']);
}