<?php

session_start();
require('dbconnect.php');
require('function.php');

$signin_user_id=$_SESSION["bridge"]["user_id"];
$liked_id=$_POST["user_id"]

if (isset($_POST['is_unlike'])) {
  $sql = 'DELETE FROM `likes` WHERE `feed_id` = ? AND `user_id` = ?';
} else {
  $sql = 'INSERT INTO `likes` (`feed_id`,`user_id`) VALUES (?, ?)';
}

$data = [$feed_id,$user_id,];
$stmt = $dbh->prepare($sql);
$res = $stmt->execute($data);
echo json_encode($res);