<?php
session_start();

$_SESSION['id_users'] = '';
$_SESSION['email'] = '';
$_SESSION['name'] = '';
$_SESSION['address'] = '';
$_SESSION['photo'] = '';

unset($_SESSION['id_users']);
unset($_SESSION['email']);
unset($_SESSION['name']);
unset($_SESSION['address']);
unset($_SESSION['photo']);

session_unset();
session_destroy();
header('Location:login.php');
