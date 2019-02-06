<?php
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