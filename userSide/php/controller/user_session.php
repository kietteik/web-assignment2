<?php
session_start();


$now = new DateTime('now', new DateTimezone('Asia/Bangkok'));
$mins = $now->getOffset() / 60;
$sgn = ($mins < 0 ? -1 : 1);
$mins = abs($mins);
$hrs = floor($mins / 60);
$mins -= $hrs * 60;
$offset = sprintf('%+d:%02d', $hrs * $sgn, $mins);

//Your DB Connection - sample
$dbo = new PDO('mysql:host=localhost;dbname=btl', 'root', '');
$dbo->exec("SET time_zone='$offset';");

$db = mysqli_connect('localhost', 'root', '', 'btl');
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

    $user_check_query = "SELECT * FROM tbl_user WHERE userUser='$username' OR userEmail='$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);
    if ($user) { // if user exists
        if ($user['userUser'] === $username) {
            array_push($error, "Username already exists");
        }

        if ($user['userEmail'] === $email) {
            array_push($error, "Email already exists");
        }
    }
    if (count($error) == 0) {
        $password = md5($password); //encrypt the password before saving in the database
        $createOn = new DateTime('now', new DateTimezone('Asia/Bangkok'));
        $createOn = $createOn->format("Y-m-d H:i:s");
        $query = "INSERT INTO tbl_user (userName, userUser, userEmail, userPass, userCreateOn) 
                  VALUES('$name','$username', '$email', '$password', '$createOn')";
        if (mysqli_query($db, $query)) {
            // $_SESSION['userUser'] = $username;
            // $_SESSION['userName'] = $name;
            $_SESSION['signup-success'] = "Sign Up Successul";
            // header('location: index.php');
        } else {
            die($db->error . __LINE__);
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
        $query = "SELECT * FROM tbl_user WHERE userUser='$username' AND userPass='$password' LIMIT 1";
        $result = mysqli_query($db, $query);
        $user = mysqli_fetch_assoc($result);
        if ($user) {
            $_SESSION['userUser'] = $username;
            $_SESSION['userName'] = $user['userName'];
            $_SESSION['userId'] = $user['userId'];
            $_SESSION['success'] = "You are now logged in";
            header('location: index.php');
        } else {
            array_push($error, "Invalid username or password");
        }
    }
}

if (isset($_GET['logout-button'])) {
    unset($_SESSION['userName']);
    session_destroy();
}
