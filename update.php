<?php
session_start();

if (false) {
	header("Location:edit.php");
	exit();
}

require('dbconnect.php');
require("function.php");

$signup_user_id = $_SESSION["bridge"]["id"];

$signin_user = getSigninUser($dbh,$_SESSION['bridge']['id']); 
if ($_FILES["input_img_name"]["name"] !== "") {
	date_default_timezone_set("Asia/Manila");
	$date_str=date("YmdHis");
	$file_name=$date_str . $_FILES["input_img_name"]["name"];
	move_uploaded_file($_FILES["input_img_name"]["tmp_name"] , "assets/img/user_profile_img/" . $file_name);
} else { 
	date_default_timezone_set("Asia/Manila");
	$date_str=date("YmdHis");
	$file_name=$signin_user["img_name"];
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
// }
// var_dump($advices);die();




$portfolio=$_POST["input_portfolio"];
// var_dump($portfolio);die();
$portfolio_name=$_POST["input_portfolio_name"];

$portfolio_status="";
if (isset($_POST["input_portfolio_status"])) {
	$portfolio_status=$_POST["input_portfolio_status"];
}

$portfolio_contents=$_POST["input_portfolio_contents"];

// $signup_user_id=$signin_user["user_id"];

upDateUser($dbh,$signup_user_id,$name,$email,$password,$file_name,$status,$batchnumber,$period,$course,$profile,$fb,$career, $job_status);

if($career == 1 && isset($signin_user["company_name"])) {
	upDateCompany($dbh, $signup_user_id, $company_name, $position, $term_company_year, $term_company_month,
	 $term_company_year_end, $term_company_month_end, $job_contents,$job_offer,$offer_contents);
}elseif ($career == 1 && !isset($signin_user["company_name"])){
	createCompanies($dbh, $signup_user_id, $company_name, $position, $term_company_year, $term_company_month,
	 $term_company_year_end, $term_company_month_end, $job_contents,$job_offer,$offer_contents);
}elseif($career == 2 && isset($signin_user["company_name"])){
	deleteCompany($dbh, $signup_user_id);
}

if(!empty($advices) && isset($signin_user["advices_id"])) {
	upDateAdvicesUsers($dbh, $signup_user_id, $advices);
}elseif (!empty($advices) && !isset($signin_user["advices_id"])){
	createAdvicesUsers($dbh, $signup_user_id, $advices);
}elseif($career == 2 && isset($signin_user["advices_id"])){
	deleteAdvices($dbh, $signup_user_id);
}

if (!empty($portfolio) && isset($signin_user["portfolio_url"])) {
	upDatePortfolio($dbh, $signup_user_id, $portfolio, $portfolio_name, $portfolio_status, $portfolio_contents);
}elseif(!empty($portfolio) && !isset($signin_user["portfolio_url"])){
	createPortfolios($dbh, $signup_user_id, $portfolio, $portfolio_name, $portfolio_status, $portfolio_contents);
}elseif(empty($portfolio) && isset($signin_user["portfolio_url"])){
	deletePortfolios($dbh, $signup_user_id);
}

$dbh=null;

header("Location:home.php");
exit();
















