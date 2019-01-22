<?php
session_start();

if (false) {
	header("Location:edit.php");
	exit();
}

require('dbconnect.php');

require("function.php");


date_default_timezone_set("Asia/Manila");
$date_str=date("YmdHis");
$file_name=$date_str . $_FILES["input_img_name"]["name"];
move_uploaded_file($_FILES["input_img_name"]["tmp_name"] , "assets/img/user_profile_img/" . $file_name);

$name = $_POST["input_name"];
$email=$_POST["input_email"];
$password=$_POST["input_password"];
// $img_name=$file_name;
$status=$_POST["input_status"];
$batchnumber=$_POST["input_batchnumber"];
$period=$_POST["input_period"];
$course=$_POST["input_course"];
$profile=$_POST["input_profile"];
$fb=$_POST["input_fb"];


upDate($dbh,$name,$email,$password,$file_name,$status,$batchnumber,$period,$course,$profile,$fb,$career, $job_status);



$dbh=null;

header("Location:home.php");
exit();