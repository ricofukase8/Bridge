<?php
require('dbconnect.php');

// $name = $_GET['bridge']['name'];

$sql = 'SELECT * FROM `advices`';
$stmt = $dbh->prepare($sql);
$stmt->execute();

$advices = $stmt->fetchAll();

//edit画面だったら
if(strpos($_SERVER['REQUEST_URI'], 'edit.php') !== false) {
	$sql = 'SELECT * FROM `users`';//DBからとる
	// $data = [$_GET['bridge']['id']];
	// $stmt = $dbh->prepare($sql);
 //    $stmt->execute();
 //    $data = $stmt->fetch(PDO::FETCH_ASSOC);
	$user_name = 'ユーザーが入力した内容';
	$signin_user = ['2',3,4];
}
