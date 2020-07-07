<?php
session_start();
include '../classes/user.php';
$user = new user();
$user->editProfile();
echo $user->changePassword();
echo $user->uploadAvatar();
