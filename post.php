<?php
session_start();

if (!isset($_SESSION['bridge'])) {
	header('Location: signup.php');
	exit();
}


// step1
$name = $_SESSION['bridge']['name'];
$email = $_SESSION['bridge']['email'];
$password = $_SESSION['bridge']['password'];
$img_name = $_SESSION['bridge']['img_name'];
$status = $_SESSION['bridge']['status'];
$batchnumber = $_SESSION['bridge']['batchnumber'];
$period = $_SESSION['bridge']['batchnumber'];
$course = $_SESSION['bridge']['course'];
$profile = $_SESSION['bridge']['profile'];
$fb = $_SESSION['bridge']['fb'];
 ?>