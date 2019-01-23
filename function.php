
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

function getAllUsers($dbh)
{
	$sql = 'SELECT * FROM `users` AS `u` ';
	$sql .= 'JOIN `companies` AS `c` ON `u`.`id` = `c`.`user_id` ';
	$sql .= 'JOIN `advices_users` AS `a` ON `u`.`id` = `a`.`user_id` ';
	$sql .= 'LEFT JOIN advices ad ON a.advices_id = ad.id ';
	$sql .= 'JOIN `portfolios` AS `p` ON `u`.`id` = `p`.`user_id` ';
	$sql .= 'LEFT JOIN status s ON u.status_id = s.id ';
	$sql .= 'LEFT JOIN term_nexseed t ON u.term_nexseed_id = t.id ';
	$sql .= 'LEFT JOIN courses co ON u.course_id = co.id ';
    $stmt = $dbh->prepare($sql);
    $stmt->execute();

    return $stmt->fetchAll();
}

function getUser($dbh)
{
	$sql = 'SELECT * FROM `users` AS `u` ';
	$sql .= 'JOIN `companies` AS `c` ON `u`.`id` = `c`.`user_id` ';
	$sql .= 'JOIN `advices_users` AS `a` ON `u`.`id` = `a`.`user_id` ';
	$sql .= 'LEFT JOIN advices ad ON a.advices_id = ad.id ';
	$sql .= 'JOIN `portfolios` AS `p` ON `u`.`id` = `p`.`user_id` ';
	$sql .= 'LEFT JOIN status s ON u.status_id = s.id ';
	$sql .= 'LEFT JOIN term_nexseed t ON u.term_nexseed_id = t.id ';
	$sql .= 'LEFT JOIN courses co ON u.course_id = co.id ';
	$sql .= 'WHERE `u`.`id` = ?';
    $data = [26];
    $stmt = $dbh->prepare($sql);
    $stmt->execute($data);

    $signin_user = $stmt->fetch(PDO::FETCH_ASSOC);

    return $signin_user;
}
