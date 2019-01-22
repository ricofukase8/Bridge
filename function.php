
<?php
function createUser($dbh,$name,$email,$password,$file_name,$status,$batchnumber,$period,$course,$profile,$fb, $career, $job_status)
{
	$sql = "INSERT INTO `users` SET `name` = ?, `email` = ?, `password` = ?, `img_name` = ?, `status_id` = ?, `batch_number` = ?, `term_nexseed_id` = ?, `course_id` = ?, `profile` = ?, `fb_account` = ?, `career` = ?, `job_status` = ?, `created` = NOW()";
		$data = array($name , $email , $password , $file_name , $status , $batchnumber , $period , $course , $profile , $fb, $career, $job_status);
		$stmt = $dbh->prepare($sql);
		$stmt->execute($data);

}

function createCompanies($dbh, $signup_user_id, $company_name, $position, $term_company_year, $term_company_month,
 $term_company_year_end, $term_company_month_end, $job_contents, $job_offer, $offer_contents)
{
	$sql = "INSERT INTO `companies` SET `user_id`=?, `company_name` = ?, `position` = ?, `term_company_year` = ?, `term_company_month`= ?, `term_company_year_end` = ?, `term_company_month_end` = ?, `job_contents` = ?, `job_offer` = ?,`offer_contents` =?";
	$data = array($signup_user_id, $company_name, $position, $term_company_year, $term_company_month, 
		$term_company_year_end, $term_company_month_end, $job_contents, $job_offer, $offer_contents);
	$stmt = $dbh->prepare($sql);
	$stmt->execute($data);
}

function createAdvicesUsers($dbh, $signup_user_id, $advices)
{
	$sql = "INSERT INTO `advices_users` SET  `user_id`=?, `advices_id` =?";
	$data = array($signup_user_id, $advices);
	$stmt = $dbh->prepare($sql);
	$stmt->execute($data);
}

function createPortfolios($dbh, $signup_user_id, $portfolio, $portfolio_name, $portfolio_status, $portfolio_contents)
{
	$sql = "INSERT INTO `portfolios` SET `user_id`=?, `portfolio_url`=?, `portfolio_name`=?, `portfolio_status`=?, `portfolio_comments`=?";
	$data = array($signup_user_id, $portfolio, $portfolio_name, $portfolio_status, $portfolio_contents);
	$stmt = $dbh->prepare($sql);
	$stmt->execute($data);
}


function upDate($dbh,$name,$email,$password,$file_name,$status,$batchnumber,$period,$course,$profile,$fb,$career, $job_status)
{
	$sql = "UPDATE `users` SET `name` = ?, `email` = ?, `password` = ?, `img_name` = ?, `status_id` = ?, `batch_number` = ?, `term_nexseed_id` = ?, `course_id` = ?, `profile` = ?, `fb_account` = ?, `career` = ?, `job_status` = ?, `updated` = NOW() WHERE`id`=?";
		$data = array($name , $email , $password , $file_name , $status , $batchnumber , $period , $course , $profile , $fb, $career, $job_status, "93");
		$stmt = $dbh->prepare($sql);
		$stmt->execute($data);
}


















