<?php

if (!isset($_SESSION["bridge"]["id"])) {
    header("Location: signin.php");
    exit();
}
