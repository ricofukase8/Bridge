<?php

session_start();
require('dbconnect.php');
require('function.php');

$signin_user_id=$_POST["signin_user_id"];
$liked_id=$_POST["user_id"];

if (isset($_POST['is_unlike'])) {
    $sql = 'DELETE FROM `likes` WHERE `user_id` = ? AND `liked_id` = ?';
} else {
    $sql = 'INSERT INTO `likes` (`user_id`,`liked_id`) VALUES (?, ?)';
}

$data = [$signin_user_id, $liked_id];
$stmt = $dbh->prepare($sql);
$res = $stmt->execute($data);
echo json_encode($res);