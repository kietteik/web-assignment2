<?php
session_start();

// $name = '';

$db = mysqli_connect('localhost', 'root', '', 'user_control');
// or die("Could not select examples");
$error = array();

if (isset($_POST['regis-button'])) {
    $username = '';
    $email = '';
    $password = '';

    $name = mysqli_real_escape_string($db, $_POST['regis-name']);
    $username = mysqli_real_escape_string($db, $_POST['regis-username']);
    $email = mysqli_real_escape_string($db, $_POST['regis-email']);
    $password = mysqli_real_escape_string($db, $_POST['regis-password']);

    if (empty($username)) {
        array_push($error, "Username is required");
    }
    if (empty($email)) {
        array_push($error, "Email is required");
    }
    if (empty($password)) {
        array_push($error, "Password is required");
    }

    $user_check_query = "SELECT * FROM user WHERE username='$username' OR email='$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);
    if ($user) { // if user exists
        if ($user['username'] === $username) {
            array_push($error, "Username already exists");
        }

        if ($user['email'] === $email) {
            array_push($error, "Email already exists");
        }
    }
    if (count($error) == 0) {
        $password = md5($password); //encrypt the password before saving in the database

        $query = "INSERT INTO user (name,username, email, password) 
                  VALUES('$name','$username', '$email', '$password')";
        if (mysqli_query($db, $query)) {
            $_SESSION['username'] = $username;
            $_SESSION['name'] = $user['name'];
            $_SESSION['success'] = "Successul";
            // header('location: index.php');
        } else {
            die("insertfail");
        }
    }
}

if (isset($_POST['login-button'])) {
    $username = '';
    $email = '';
    $password = '';
    $error = array();

    $username = mysqli_real_escape_string($db, $_POST['login-username']);
    $password = mysqli_real_escape_string($db, $_POST['login-password']);

    if (empty($username)) {
        array_push($error, "Username is required");
    }
    if (empty($password)) {
        array_push($error, "Password is required");
    }
    if (count($error) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM user WHERE username='$username' AND password='$password' LIMIT 1";
        $result = mysqli_query($db, $query);
        $user = mysqli_fetch_assoc($result);
        if ($user) {
            $_SESSION['username'] = $username;
            $_SESSION['name'] = $user['name'];
            $_SESSION['success'] = "You are now logged in";
            header('location: index.php');
        } else {
            array_push($error, "Invalid username or password");
        }
    }
}

if (isset($_GET['logout-button'])) {
    unset($_SESSION['name']);
    session_destroy();
}
