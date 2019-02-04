<?php
session_start();

if (false) {
	header("Location:signup.php");
	exit();
}

require('dbconnect.php');
require("function.php");

if ($_FILES["input_img_name"]["name"] !== "") {
date_default_timezone_set("Asia/Manila");
$date_str=date("YmdHis");
$file_name=$date_str . $_FILES["input_img_name"]["name"];
move_uploaded_file($_FILES["input_img_name"]["tmp_name"] , "assets/img/user_profile_img/" . $file_name);
}else{
	$file_name = "defalut.jpg";
}

$name = $_POST["input_name"];
$email=$_POST["input_email"];
$password=$_POST["input_password"];
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

// if ($career == 2) {
// 	$job_status="";
// 	$company_name="";
// 	$position="";
// 	$term_company_year="";
// 	$term_company_month="";
// 	$term_company_year_end="";
// 	$term_company_month_end="";
// 	$job_contents="";
// 	$offer_contents="";
// 	$job_offer="";
// 	$advices="";
// }else{
	
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

// $company_name_2=$_POST["input_company_name_2"];
// $position_2=$_POST["input_position_2"];
// $term_company_year_2=$_POST["input_career_year_2"];
// $term_company_month_2 = $_POST["input_career_month_2"];
// $term_company_year_end_2 = $_POST["input_career_year_end_2"];
// $term_company_month_end_2 = $_POST["input_career_month_end_2"];
// $job_contents_2=$_POST["input_job_content_2"];
// $offer_contents_2=$_POST["input_job_offer_contents_2"];

	$job_offer="";
	if (isset($_POST["input_job_offer"])) {
		$job_offer=$_POST["input_job_offer"];
	}

	$advices="";
	if (isset($_POST["advice"])) {
		$advices = $_POST['advice'];
	}





$portfolio=$_POST["input_portfolio"];
// var_dump($portfolio);die();
$portfolio_name=$_POST["input_portfolio_name"];

$portfolio_status="";
if (isset($_POST["input_portfolio_status"])) {
	$portfolio_status=$_POST["input_portfolio_status"];
}

$portfolio_contents=$_POST["input_portfolio_contents"];

createUser($dbh,$name,$email,$password,$file_name,$status,$batchnumber,$period,$course,$profile,$fb,$career, $job_status);

$signup_user_id = intval($dbh->query("SELECT max(id) FROM users")->fetchColumn());

if ($career == 1) {
	createCompanies($dbh, $signup_user_id, $company_name, $position, $term_company_year, $term_company_month,
	 $term_company_year_end, $term_company_month_end, $job_contents,$job_offer,$offer_contents);

	createAdvicesUsers($dbh, $signup_user_id, $advices);
}

if($portfolio = "" || $portfolio_name = ""){
	createPortfolios($dbh, $signup_user_id, $portfolio, $portfolio_name, $portfolio_status, $portfolio_contents);
}

$dbh=null;
header("Location:thanks.php");
exit();



