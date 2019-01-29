<?php
require('dbconnect.php');
require('function.php');

$sql = 'SELECT * FROM `advices`';
$stmt = $dbh->prepare($sql);
$stmt->execute();

$advices = $stmt->fetchAll();

if(strpos($_SERVER['REQUEST_URI'], 'edit.php') !== false) {
	$signin_user = getSigninUser($dbh,$_SESSION['bridge']['id']);
}
