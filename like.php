<?php
session_start();
require('dbconnect.php');
require('function.php');

$signin_user_id=$_SESSION["bridge"]["id"];
var_dump($signin_user_id);
$tmp_users = getLikedUsers($dbh,$signin_user_id);
$signin_user = getSigninUser($dbh,$signin_user_id);

$users = [];
foreach ($tmp_users as $user) {
    $like_flg_sql = 'SELECT * FROM `likes` WHERE `user_id` = ? AND `liked_id` = ?';
    $like_flg_data = [$signin_user_id, $user['user_id']];
    $like_flg_stmt = $dbh->prepare($like_flg_sql);
    $like_flg_stmt->execute($like_flg_data);
    $is_liked = $like_flg_stmt->fetch(PDO::FETCH_ASSOC);
    $user['is_liked'] = $is_liked ? true : false;
    $users[] = $user;
}
 ?>

<?php include('components/user_list.php'); ?>