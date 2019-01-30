<?php
require('dbconnect.php');
require('function.php');

$sql = 'SELECT * FROM `advices`';
$stmt = $dbh->prepare($sql);
$stmt->execute();

$advices = $stmt->fetchAll();
$signin_user_id = $_SESSION["bridge"]["id"];

if(strpos($_SERVER['REQUEST_URI'], 'edit.php') !== false) {
	// $sql = "SELECT * FROM `users` LEFT JOIN `companies` ON `users` . `id` = `companies` . `user_id` LEFT JOIN `portfolios` ON `users` . `id` = `portfolios` . `user_id` WHERE `users` . `id` = ?";//DBからとる
	// $data = [$signin_user_id];
	// $stmt = $dbh->prepare($sql);
 //    $stmt->execute($data);
 //    $signin_user = $stmt->fetch(PDO::FETCH_ASSOC);
    $signin_user = getSigninUser($dbh , $signin_user_id);
}