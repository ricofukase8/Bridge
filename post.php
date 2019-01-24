<?php
session_start();

if (false) {
	header("Location:signup.php");
	exit();
}

require('dbconnect.php');

require("function.php");

// $name=$_SESSION["48_LearnSNS"]["name"];

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

$career="";
if (isset($_POST["input_career"])) {
	$career=$_POST["input_career"];
}

$job_status="";
if (isset($_POST["input_job_status"])) {
	$job_status=$_POST["input_job_status"];
}


$company_name=$_POST["input_company_name"];
$position=$_POST["input_position"];
$term_company_year=$_POST["input_career_year"];
$term_company_month = $_POST["input_career_month"];
$term_company_year_end = $_POST["input_career_year_end"];
$term_company_month_end = $_POST["input_career_month_end"];
$job_contents=$_POST["input_job_content"];
$offer_contents=$_POST["input_job_offer_contents"];

$job_offer="";
if (isset($_POST["input_job_offer"])) {
	$job_offer=$_POST["input_job_offer"];
}

// echo '<pre>';
// var_dump($_POST['advice']);die();
$advices="";
if (isset($_POST["advice"])) {
	$advices = $_POST['advice'];
}



$portfolio=$_POST["input_portfolio"];
$portfolio_name=$_POST["input_portfolio_name"];

$portfolio_status="";
if (isset($_POST["input_portfolio_status"])) {
	$portfolio_status=$_POST["input_portfolio_status"];
}

$portfolio_contents=$_POST["input_portfolio_contents"];

createUser($dbh,$name,$email,$password,$file_name,$status,$batchnumber,$period,$course,$profile,$fb,$career, $job_status);

$signup_user_id = intval($dbh->query("SELECT max(id) FROM users")->fetchColumn());

createCompanies($dbh, $signup_user_id, $company_name, $position, $term_company_year, $term_company_month,
 $term_company_year_end, $term_company_month_end, $job_contents,$job_offer,$offer_contents);

createAdvicesUsers($dbh, $signup_user_id, $advices);

createPortfolios($dbh, $signup_user_id, $portfolio, $portfolio_name, $portfolio_status, $portfolio_contents);

// var_dump($_POST); die();

$dbh=null;
header("Location:thanks.php");
exit();

