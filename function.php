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
// var_dump($signup_user_id);die();
	$sql = "INSERT INTO `companies` SET `user_id`=?, `company_name` = ?, `position` = ?, `term_company_year` = ?, `term_company_month`= ?, `term_company_year_end` = ?, `term_company_month_end` = ?, `job_contents` = ?, `job_offer` = ?,`offer_contents` =?";
	$data = array($signup_user_id, $company_name, $position, $term_company_year, $term_company_month,
		$term_company_year_end, $term_company_month_end, $job_contents, $job_offer, $offer_contents);
	$stmt = $dbh->prepare($sql);
	$stmt->execute($data);
}

// function createCompanies2($dbh, $signup_user_id, $company_name_2, $position_2, $term_company_year_2, $term_company_month_2,
//  $term_company_year_end_2, $term_company_month_end_2, $job_contents_2)
// {
// 	$sql = "INSERT INTO `companies` SET `user_id`=?, `company_name` = ?, `position` = ?, `term_company_year` = ?, `term_company_month`= ?, `term_company_year_end` = ?, `term_company_month_end` = ?, `job_contents` = ?";
// 	$data = array($signup_user_id, $company_name_2, $position_2, $term_company_year_2, $term_company_month_2,
// 		$term_company_year_end_2, $term_company_month_end_2, $job_contents_2);
// 	$stmt = $dbh->prepare($sql);
// 	$stmt->execute($data);
// }

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

		$data = array($name , $email , password_hash($password, PASSWORD_DEFAULT) , $file_name , $status , $batchnumber , $period , $course , $profile , $fb, $career, $job_status, $signup_user_id);
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

function deleteCompany($dbh, $signup_user_id)
{
	$sql = "DELETE FROM `companies` WHERE `user_id` = ?";
	$data = [$signup_user_id];
	$stmt = $dbh->prepare($sql);
	$stmt->execute($data);
}

function deleteAdvices($dbh, $signup_user_id)
{
	$sql = "DELETE FROM `advices_users` WHERE `user_id` = ?";
	$data = [$signup_user_id];
	$stmt = $dbh->prepare($sql);
	$stmt->execute($data);
}


function deletePortfolios($dbh, $signup_user_id)
{
	$sql = "DELETE FROM `portfolios` WHERE `user_id` = ?";
	$data = [$signup_user_id];
	$stmt = $dbh->prepare($sql);
	$stmt->execute($data);
}


function upDateAdvicesUsers($dbh, $signup_user_id, $advices)
{
	$sql = "DELETE FROM `advices_users` WHERE `user_id` = ?";
	$data = [$signup_user_id];
	$stmt = $dbh->prepare($sql);
	$stmt->execute($data);
	foreach ($advices as $advice) {
		$sql = "INSERT INTO `advices_users` SET  `user_id`=?, `advices_id` =?";
		$data = array($signup_user_id, $advice);
		$stmt = $dbh->prepare($sql);
		$stmt->execute($data);
	}
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
	$sql .= 'LEFT JOIN `portfolios` AS `p` ON `u`.`id` = `p`.`user_id` ';
	$sql .= 'LEFT JOIN status s ON u.status_id = s.id ';
	$sql .= 'LEFT JOIN term_nexseed t ON u.term_nexseed_id = t.id ';
	$sql .= 'LEFT JOIN courses co ON u.course_id = co.id ';
	$sql .= 'LEFT JOIN companies c ON u.id = c.user_id ';
	$sql .= 'GROUP BY u.id';

	$stmt = $dbh->prepare($sql);
	$stmt->execute();

	$users = $stmt->fetchAll();

    $advices = getAdvices($dbh);

    return mergeUserAndAdvice($users, $advices);
}

function getAdvices($dbh)
{
    $sql = 'SELECT au.advices_id, a.advice_id, au.user_id FROM advices a ';
	$sql .= 'LEFT JOIN advices_users au ON a.id = au.`advices_id` ';
	$stmt = $dbh->prepare($sql);
	$stmt->execute();

    return $stmt->fetchAll();
}

function mergeUserAndAdvice($users, $advices)
{
    $res = [];
    foreach ($users as $user) {
        foreach ($advices as $advice) {
            if ($user['user_id'] === $advice['user_id']) {
                $user['advices'][] = $advice;
            }
        }

        $res[] = $user;
    }

    return $res;
}

function mergeSigninUserAndAdvice($signin_user, $advices)
{
    foreach ($advices as $advice) {
        if ($signin_user['user_id'] === $advice['user_id']) {
            $signin_user['advices'][] = $advice;
        }
    }

    return $signin_user;
}

function getUser($dbh,$email)
{
	$sql = 'SELECT *, u.id as user_id FROM `users` AS `u` ';
	$sql .= 'LEFT JOIN `companies` AS `c` ON `u`.`id` = `c`.`user_id` ';
	$sql .= 'LEFT JOIN `advices_users` AS `a` ON `u`.`id` = `a`.`user_id` ';
	$sql .= 'LEFT JOIN advices ad ON a.advices_id = ad.id ';
	$sql .= 'LEFT JOIN `portfolios` AS `p` ON `u`.`id` = `p`.`user_id` ';
	$sql .= 'LEFT JOIN status s ON u.status_id = s.id ';
	$sql .= 'LEFT JOIN term_nexseed t ON u.term_nexseed_id = t.id ';
	$sql .= 'LEFT JOIN courses co ON u.course_id = co.id ';
	$sql .= 'WHERE `u`.`email` = ?';
    $data = [$email];
    $stmt = $dbh->prepare($sql);
    $stmt->execute($data);

    $signin_user = $stmt->fetch(PDO::FETCH_ASSOC);

    return $signin_user;
}

function getSigninUser($dbh,$signin_user_id)
{
	$sql = 'SELECT *, u.id as user_id FROM `users` AS `u` ';
	$sql .= 'LEFT JOIN `companies` AS `c` ON `u`.`id` = `c`.`user_id` ';
	$sql .= 'LEFT JOIN `advices_users` AS `a` ON `u`.`id` = `a`.`user_id` ';
	$sql .= 'LEFT JOIN advices ad ON a.advices_id = ad.id ';
	$sql .= 'LEFT JOIN `portfolios` AS `p` ON `u`.`id` = `p`.`user_id` ';
	$sql .= 'LEFT JOIN status s ON u.status_id = s.id ';
	$sql .= 'LEFT JOIN term_nexseed t ON u.term_nexseed_id = t.id ';
	$sql .= 'LEFT JOIN courses co ON u.course_id = co.id ';
	$sql .= 'WHERE `u`.`id` = ?';
    $data = [$signin_user_id];
    $stmt = $dbh->prepare($sql);
    $stmt->execute($data);

    $signin_user = $stmt->fetch(PDO::FETCH_ASSOC);
    $advices = getAdvices($dbh);

    return mergeSigninUserAndAdvice($signin_user, $advices);

}


function getLikedUsers($dbh,$signin_user_id)
{
	$sql = 'SELECT * FROM `users` AS `u` ';
	$sql .= 'LEFT JOIN `portfolios` AS `p` ON `u`.`id` = `p`.`user_id` ';
	$sql .= 'LEFT JOIN status s ON u.status_id = s.id ';
	$sql .= 'LEFT JOIN term_nexseed t ON u.term_nexseed_id = t.id ';
	$sql .= 'LEFT JOIN courses co ON u.course_id = co.id ';
	$sql .= 'LEFT JOIN companies c ON u.id = c.user_id ';
	$sql .= 'LEFT JOIN likes l ON u.id = l.liked_id ';
	$sql .= 'WHERE l.user_id = ' . $signin_user_id;
	$sql .= ' GROUP BY u.id';

	$stmt = $dbh->prepare($sql);
	$stmt->execute();

	$users = $stmt->fetchAll();

    $advices = getAdvices($dbh);

    return mergeUserAndAdvice($users, $advices);
}

function getSearchUsers($dbh)
{
	$sql = 'SELECT * FROM `users` AS `u` ';
	$sql .= 'LEFT JOIN `portfolios` AS `p` ON `u`.`id` = `p`.`user_id` ';
	$sql .= 'LEFT JOIN status s ON u.status_id = s.id ';
	$sql .= 'LEFT JOIN term_nexseed t ON u.term_nexseed_id = t.id ';
	$sql .= 'LEFT JOIN courses co ON u.course_id = co.id ';
	$sql .= 'LEFT JOIN companies c ON u.id = c.user_id ';
	$sql .= 'WHERE `u` . `name`';
	$sql .= 'LIKE "%"?"%"';
	$sql .= ' OR  `c` . `company_name`';
	$sql .= 'LIKE "%"?"%"';
	$sql .= 'GROUP BY u.id';

	$data=[$_GET["search"],$_GET["search"]];
	$stmt = $dbh->prepare($sql);
	$stmt->execute($data);

	$users = $stmt->fetchAll();

    $advices = getAdvices($dbh);

    return mergeUserAndAdvice($users, $advices);
}

function getAllUsersNews($dbh)
{
	$sql = 'SELECT * FROM `users` AS `u` ';
	$sql .= 'LEFT JOIN `portfolios` AS `p` ON `u`.`id` = `p`.`user_id` ';
	$sql .= 'LEFT JOIN status s ON u.status_id = s.id ';
	$sql .= 'LEFT JOIN term_nexseed t ON u.term_nexseed_id = t.id ';
	$sql .= 'LEFT JOIN courses co ON u.course_id = co.id ';
	$sql .= 'LEFT JOIN companies c ON u.id = c.user_id ';
	$sql .= 'GROUP BY u.id ';
	$sql .= 'ORDER BY u.created DESC';

	$stmt = $dbh->prepare($sql);
	$stmt->execute();

	$users = $stmt->fetchAll();

    $advices = getAdvices($dbh);

    return mergeUserAndAdvice($users, $advices);
}


