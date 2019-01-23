<?php
require('dbconnect.php');

// $name = $_GET['bridge']['name'];

$sql = 'SELECT * FROM `advices`';
$stmt = $dbh->prepare($sql);
$stmt->execute();

$advices = $stmt->fetchAll();

//edit画面だったら
if(strpos($_SERVER['REQUEST_URI'], 'edit.php') !== false) {
	$sql = "SELECT * FROM `users` LEFT JOIN `companies` ON `users` . `id` = `companies` . `user_id` LEFT JOIN `portfolios` ON `users` . `id` = `portfolios` . `user_id` WHERE `users` . `id` = ?";//DBからとる
	$data = ["100"];
	$stmt = $dbh->prepare($sql);
    $stmt->execute($data);
    $signin_user = $stmt->fetch(PDO::FETCH_ASSOC);

    // var_dump($signin_user); die();

    // echo "<pre>";
    // var_dump($signin_user);
    // echo "</pre>";
	// $user_name = 'ユーザーが入力した内容';
	// $signin_user = ['2',3,4];
}
