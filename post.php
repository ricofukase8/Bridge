<?php
session_start();
require('dbconnect.php');

// $name=$_SESSION["48_LearnSNS"]["name"];

date_default_timezone_set("Asia/Manila");
$date_str=date("YmdHis");
$file_name=$date_str . $_FILES["input_img_name"]["name"];
// move_uploaded_file($_FILES["input_img_name"]["tmp_name"] , "assets/img/user_profile_img" . $file_name);

$name=$_POST["input_name"];
$email=$_POST["input_email"];
$password=$_POST["input_password"];
// $img_name=$file_name;
$status=$_POST["input_status"];
$batchnumber=$_POST["input_batchnumber"];
$period=$_POST["input_period"];
$course=$_POST["input_course"];
$profile=$_POST["input_profile"];
$fb=$_POST["input_fb"];

if (!empty($_POST)) {
	$sql = "INSERT INTO `users` SET `name`=?,`email`=?,`password`=?,`img_name`=?,`status_id`=?,`batch_number`=?,`term_nexseed_id`=?,`course_id`=?,
	`profile`=?,`fb_account`=?,`created`=NOW()";
	$data = array($name , $email , $password , $file_name , $status , $batchnumber , $period , $course , $profile , $fb);
	$stmt = $dbh->prepare($sql);
	$stmt->execute($data);
  	$dbh=null;

  	header("Location:thanks.php");
	exit();
}else{
	header("Location:signup.php");
}

// if (!empty($_SESSION) {
// 	$sql="INSERT INTO `users` SET `name`=?";
// 	$data=[$name];
// 	$stmt=$dbh->prepare($sql);
// 	header("Location:thanks.php");
// }else{
// 	header("Location:signup.php");
// 	exit();
// }




// step1
// $name = $_SESSION['bridge']['name'];
// $email = $_SESSION['bridge']['email'];
// $password = $_SESSION['bridge']['password'];
// $img_name = $_SESSION['bridge']['img_name'];
// $status = $_SESSION['bridge']['status'];
// $batchnumber = $_SESSION['bridge']['batchnumber'];
// $period = $_SESSION['bridge']['batchnumber'];
// $course = $_SESSION['bridge']['course'];
// $profile = $_SESSION['bridge']['profile'];
// $fb = $_SESSION['bridge']['fb'];








//  session_start();
// require('dbconnect.php');

// if (!isset($_SESSION['bridge'])) {
//   header('Location: signup.php');
//   exit();
// }

// // step1
// $name = $_SESSION['bridge']['name'];
// $email = $_SESSION['bridge']['email'];
// $password = $_SESSION['bridge']['password'];
// $img_name = $_SESSION['bridge']['img_name'];
// $status = $_SESSION['bridge']['status'];
// $batchnumber = $_SESSION['bridge']['batchnumber'];
// $period = $_SESSION['bridge']['period'];
// $course = $_SESSION['bridge']['course'];
// $profile = $_SESSION['bridge']['profile'];
// $fb = $_SESSION['bridge']['fb'];

// if (!empty($_POST)) {
//   $sql = 'INSERT INTO `users` SET `name`, `email`, `password`, `img_name`, `status`, `batchnumber`, `period` `course`, `profile`, `fb`, `created` VALUES  (?,?,?,?,?,?,?,?,?,?,NOW())';
//   $data = array($name, $email, password_hash($password,PASSWORD_DEFAULT), $img_name, $status, $batchnumber, $period, $course, $profile, $fb);
//   $stmt = $dbh->prepare($sql);
//   $stmt->execute($data);
//   $dbh = null;

//   unset($_SESSION['bridge']);
//   header('Location: thanks.php');
//   exit();
// }