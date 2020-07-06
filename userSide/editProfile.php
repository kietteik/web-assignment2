<?php include '../classes/user.php';
session_start();
$user = new user();
$user->editProfile();
