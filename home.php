<?php
session_start();
require('dbconnect.php');
require('function.php');
require('transition.php');

$sql = 'SELECT * FROM `advices`';
$stmt = $dbh->prepare($sql);
$stmt->execute();
$advices = $stmt->fetchAll();

$signin_user_id = $_SESSION["bridge"]["id"];

$signin_user = getSigninUser($dbh,$signin_user_id);

if (isset($_GET["search"])) {
	$tmp_users = getSearchUsers($dbh);
	if (!empty($tmp_users)) {

		foreach ($tmp_users as $user) {
			$like_flg_sql = 'SELECT * FROM `likes` WHERE `user_id` = ? AND `liked_id` = ?';
			$like_flg_data = [$signin_user_id, $user['user_id']];
			$like_flg_stmt = $dbh->prepare($like_flg_sql);
			$like_flg_stmt->execute($like_flg_data);
			$is_liked = $like_flg_stmt->fetch(PDO::FETCH_ASSOC);
			$user['is_liked'] = $is_liked ? true : false;
			$users[] = $user;
		}
	}else{
		$users[] = false;
	}


}else{
	$tmp_users = getAllUsers($dbh);

	foreach ($tmp_users as $user) {
		$like_flg_sql = 'SELECT * FROM `likes` WHERE `user_id` = ? AND `liked_id` = ?';
		$like_flg_data = [$signin_user_id, $user['user_id']];
		$like_flg_stmt = $dbh->prepare($like_flg_sql);
		$like_flg_stmt->execute($like_flg_data);
		$is_liked = $like_flg_stmt->fetch(PDO::FETCH_ASSOC);
		$user['is_liked'] = $is_liked ? true : false;
		$users[] = $user;
	}
}

include('components/user_list.php');




