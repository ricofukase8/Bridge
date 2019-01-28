
<?php
function createUser($dbh,$name,$email,$password,$file_name,$status,$batchnumber,$period,$course,$profile,$fb, $career, $job_status)
{
	$sql = "INSERT INTO `users` SET `name` = ?, `email` = ?, `password` = ?, `img_name` = ?, `status_id` = ?, `batch_number` = ?, `term_nexseed_id` = ?, `course_id` = ?, `profile` = ?, `fb_account` = ?, `career` = ?, `job_status` = ?, `created` = NOW()";
		$data = array($name , $email , password_hash($password, PASSWORD_DEFAULT) , $file_name , $status , $batchnumber , $period , $course , $profile , $fb, $career, $job_status);
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
	foreach ($advices as $advice) {
		$sql = "INSERT INTO `advices_users` SET  `user_id`=?, `advices_id` =?";
		$data = array($signup_user_id, $advice);
		$stmt = $dbh->prepare($sql);
		$stmt->execute($data);
	}
}

function createPortfolios($dbh, $signup_user_id, $portfolio, $portfolio_name, $portfolio_status, $portfolio_contents)
{
	$sql = "INSERT INTO `portfolios` SET `user_id`=?, `portfolio_url`=?, `portfolio_name`=?, `portfolio_status`=?, `portfolio_comments`=?";
	$data = array($signup_user_id, $portfolio, $portfolio_name, $portfolio_status, $portfolio_contents);
	$stmt = $dbh->prepare($sql);
	$stmt->execute($data);
}


function upDateUser($dbh,$signup_user_id,$name,$email,$password,$file_name,$status,$batchnumber,$period,$course,$profile,$fb,$career, $job_status)
{
	$sql = "UPDATE `users` SET `name` = ?, `email` = ?, `password` = ?, `img_name` = ?, `status_id` = ?, `batch_number` = ?, `term_nexseed_id` = ?, `course_id` = ?, `profile` = ?, `fb_account` = ?, `career` = ?, `job_status` = ?, `updated` = NOW() WHERE`id`=?";
		$data = array($name , $email , $password , $file_name , $status , $batchnumber , $period , $course , $profile , $fb, $career, $job_status, $signup_user_id);
		$stmt = $dbh->prepare($sql);
		$stmt->execute($data);
}

function upDateCompany($dbh, $signup_user_id, $company_name, $position, $term_company_year, $term_company_month,
 $term_company_year_end, $term_company_month_end, $job_contents, $job_offer, $offer_contents)

{
	$sql = "UPDATE `companies` SET `user_id`=?, `company_name` = ?, `position` = ?, `term_company_year` = ?, `term_company_month`= ?, `term_company_year_end` = ?, `term_company_month_end` = ?, `job_contents` = ?, `job_offer` = ?,`offer_contents` =?
	     WHERE `user_id` = ?";
	$data = array($signup_user_id, $company_name, $position, $term_company_year, $term_company_month, 
		$term_company_year_end, $term_company_month_end, $job_contents, $job_offer, $offer_contents, $signup_user_id);
	$stmt = $dbh->prepare($sql);
	$stmt->execute($data);
}

function upDatePortfolio($dbh, $signup_user_id, $portfolio, $portfolio_name, $portfolio_status, $portfolio_contents)
{
	$sql = "UPDATE `portfolios` SET `user_id`=?, `portfolio_url`=?, `portfolio_name`=?, `portfolio_status`=?, `portfolio_comments`=? WHERE `user_id` = ?";
	$data = array($signup_user_id, $portfolio, $portfolio_name, $portfolio_status, $portfolio_contents, $signup_user_id);
	$stmt = $dbh->prepare($sql);
	$stmt->execute($data);
}

function getAllUsers($dbh)
{
	$sql = 'SELECT * FROM `users` AS `u` ';
	$sql .= 'JOIN `companies` AS `c` ON `u`.`id` = `c`.`user_id` ';
	$sql .= 'JOIN `advices_users` AS `a` ON `u`.`id` = `a`.`user_id` ';
	// $sql .= 'SELECT user_id, id, (SELECT a.advice_id FROM advices_users AS a WHERE a.user_id = advices_users.user_id AND a.id= advices_users.id FOR XML PATH('')) AS  advice_id_concat FROM advices_users GROUP BY user_id, id';
	$sql .= 'LEFT JOIN advices ad ON a.advices_id = ad.id ';
	$sql .= 'LEFT JOIN `portfolios` AS `p` ON `u`.`id` = `p`.`user_id` ';
	$sql .= 'LEFT JOIN status s ON u.status_id = s.id ';
	$sql .= 'LEFT JOIN term_nexseed t ON u.term_nexseed_id = t.id ';
	$sql .= 'LEFT JOIN courses co ON u.course_id = co.id ';

    $stmt = $dbh->prepare($sql);
    $stmt->execute();

    return $stmt->fetchAll();
}

function getUser($dbh,$email)
{
	$sql = 'SELECT * FROM `users` AS `u` ';
	$sql .= 'LEFT JOIN `companies` AS `c` ON `u`.`id` = `c`.`user_id` ';
	$sql .= 'LEFT JOIN `advices_users` AS `a` ON `u`.`id` = `a`.`user_id` ';
	$sql .= 'LEFT JOIN advices ad ON a.advices_id = ad.id ';
	$sql .= 'LEFT JOIN `portfolios` AS `p` ON `u`.`id` = `p`.`user_id` ';
	$sql .= 'LEFT JOIN status s ON u.status_id = s.id ';
	$sql .= 'LEFT JOIN term_nexseed t ON u.term_nexseed_id = t.id ';
	$sql .= 'LEFT JOIN courses co ON u.course_id = co.id ';
	$sql .= 'WHERE `u`.`id` = ?';
    $data = [108];
    $stmt = $dbh->prepare($sql);
    $stmt->execute($data);

    $signin_user = $stmt->fetch(PDO::FETCH_ASSOC);
    // var_dump($signin_user["user_id"]);die();

    return $signin_user;