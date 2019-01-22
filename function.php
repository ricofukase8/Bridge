
<?php
function createUser($dbh,$name,$email,$password,$file_name,$status,$batchnumber,$period,$course,$profile,$fb, $career, $job_status)
{
	$sql = "INSERT INTO `users` SET `name` = ?, `email` = ?, `password` = ?, `img_name` = ?, `status_id` = ?, `batch_number` = ?, `term_nexseed_id` = ?, `course_id` = ?, `profile` = ?, `fb_account` = ?, `career` = ?, `job_status` = ?, `created` = NOW()";
		$data = array($name , $email , $password , $file_name , $status , $batchnumber , $period , $course , $profile , $fb, $career, $job_status);
		$stmt = $dbh->prepare($sql);
		$stmt->execute($data);

}

function createCompanies($dbh, $signup_user_id, $company_name, $position, $term_company, $job_contents, $job_offer, $offer_contents)
{
	$sql = "INSERT INTO `companies` SET `user_id`=?, `company_name` = ?, `position` = ?, `term_company` = ?, `job_contents` = ?, `job_offer` = ?,`offer_contents` =?";
	$data = array($signup_user_id, $company_name, $position, $term_company, $job_contents, $job_offer, $offer_contents);
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

function getAllUsers($dbh,$user_id)
{
	$sql = 'SELECT `u`.*, `c`.*, `a`.*, `p`.* FROM `users` AS `u` JOIN `companies` AS `c` ON `u`.`id` = `c`.`user_id` JOIN `advices_users` AS `a` ON `u`.`id` = `a`.`user_id` JOIN `portfolios` AS `p` ON `u`.`id` = `p`.`user_id`';
    $data = [23];
    $stmt = $dbh->prepare($sql);
    $stmt->execute($data);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    return $user;
}

function getUser($dbh,$user_id)
{
	$sql = 'SELECT * FROM `users` WHERE `id` = ?';
    $data = [23];
    $stmt = $dbh->prepare($sql);
    $stmt->execute($data);

    $signin_user = $stmt->fetch(PDO::FETCH_ASSOC);

    return $signin_user;
}

// function getUserCompanies($dbh,$user_id)
// {
// 	$sql = 'SELECT `c`.`company_name`,`position`,`term_company`,`job_contents`,`job_offer`,`offer_contents` FROM `companies` AS `c` WHERE `user_id` = ?';
//     $data = [16];
//     $stmt = $dbh->prepare($sql);
//     $stmt->execute($data);

//     $user_companies = $stmt->fetch(PDO::FETCH_ASSOC);

//     return $user_companies;
// }

// function getUserAdvices($dbh,$user_id)
// {
// 	$sql = 'SELECT `a`.`advices_id` FROM `advices_users` AS `a` WHERE `user_id` = ?';
//     $data = [16];
//     $stmt = $dbh->prepare($sql);
//     $stmt->execute($data);

//     $user_advices = $stmt->fetch(PDO::FETCH_ASSOC);

//     return $user_advices;
// }

// function getUserPortfolios($dbh,$user_id)
// {
// 	$sql = 'SELECT `p`.`portfolio_url`, `portfolio_name`, `portfolio_status`, `portfolio_comments` FROM `portfolios` AS `p` WHERE `user_id` = ?';
//     $data = [16];
//     $stmt = $dbh->prepare($sql);
//     $stmt->execute($data);

//     $user_portfolios = $stmt->fetch(PDO::FETCH_ASSOC);

//     return $user_portfolios;
// }
