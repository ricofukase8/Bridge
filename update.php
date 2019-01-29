<?php
session_start();

if (false) {
	header("Location:edit.php");
	exit();
}

require('dbconnect.php');
require("function.php");

// var_dump($_FILES);die();
//画像があった場合
$signin_user = getSigninUser($dbh,$_SESSION['bridge']['id']); //関数の呼び出し
<<<<<<< Updated upstream
=======
var_dump($signin_user['img_name']);die();
>>>>>>> Stashed changes

if (isset($_POST["input_img_name_new"])) {
	date_default_timezone_set("Asia/Manila");
	$date_str=date("YmdHis");
	$file_name=$date_str . $_FILES["input_img_name"]["name"];
	move_uploaded_file($_FILES["input_img_name"]["tmp_name"] , "assets/img/user_profile_img/" . $file_name);
} else { //signin_user変数を取ってくる
//画像がなければ　$_FILEのsizeが0の場合
	//元々DBにある画像
	$file_name=$signin_user["img_name"];
}

// $signin_user["img_name"]の呼び出し
// 画像を変更した場合→update
// 画像を変更しなかった場合($_FILEのsizeが0の場合)→元々DBにある画像を再update
// step1:画像を変更した場合→変更した画像を反映


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

$advices="";
if (isset($_POST["advice"])) {
	$advices=$_POST["advice"];
}


$company_name=$_POST["input_company_name"];
$position=$_POST["input_position"];
$term_company_year=$_POST["input_career_year"];
$term_company_month = $_POST["input_career_month"];
$term_company_year_end = $_POST["input_career_year_end"];
$term_company_month_end = $_POST["input_career_month_end"];
$job_contents=$_POST["input_job_content"];
$offer_contents=$_POST["input_job_offer_contents"];

$company_name_2=$_POST["input_company_name_2"];
$position_2=$_POST["input_position_2"];
$term_company_year_2=$_POST["input_career_year_2"];
$term_company_month_2 = $_POST["input_career_month_2"];
$term_company_year_end_2 = $_POST["input_career_year_end_2"];
$term_company_month_end_2 = $_POST["input_career_month_end_2"];

$job_offer="";
if (isset($_POST["input_job_offer"])) {
	$job_offer=$_POST["input_job_offer"];
}

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

$signup_user_id="107";

upDateUser($dbh,$signup_user_id,$name,$email,$password,$file_name,$status,$batchnumber,$period,$course,$profile,$fb,$career, $job_status);

upDateCompany($dbh, $signup_user_id, $company_name, $position, $term_company_year, $term_company_month,
 $term_company_year_end, $term_company_month_end, $job_contents,$job_offer,$offer_contents);

createCompanies2($dbh, $signup_user_id, $company_name_2, $position_2, $term_company_year_2, $term_company_month_2,
 $term_company_year_end_2, $term_company_month_end_2, $job_contents_2);

upDatePortfolio($dbh, $signup_user_id, $portfolio, $portfolio_name, $portfolio_status, $portfolio_contents);

$dbh=null;

header("Location:home.php");
exit();