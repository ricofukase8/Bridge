<?php
    session_start();
    $signup_user_id = $_SESSION["bridge"]["id"];
    require 'dbconnect.php';
    require 'function.php';
    require 'transition.php';

    deleteUser($dbh, $signup_user_id);
    deleteCompany($dbh, $signup_user_id);
    deleteAdvice($dbh, $signup_user_id);
    deletePortfolios($dbh, $signup_user_id);
    deleteLike($dbh, $signup_user_id);

    header("Location: end.php");
    exit();
