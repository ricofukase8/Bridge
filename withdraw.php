<?php
    session_start();
    var_dump($_SESSION["bridge"]["id"]);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta http-equiv="X-UA-Compatible" content="ie=edge"> -->
    <title>BRIDGE-withdraw</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/edit.css">
    <link rel="stylesheet" type="text/css" href="assets/css/withdraw.css">
</head>
<body>
<div id="top" class="jumbotron" style="background-image: url(assets/img/bridgemain.png);">
    <?php include("components/header.php"); ?>
</div>
<div class="container">
    <h2 id="title">退会処理</h2>
</div>

<div class="container">
    <div class="row">
        <div class="col-xs-8 col-xs-offset-2 thumbnail" style="border: 0px;">
            <h2 class="text-center content_header">本当に退会しちゃうんですか？</h2>
            <div class="text-center">
            <p>一度考え直してみてもいんじゃないでしょうか？</p>
            <p>それでも、どうしても退会したのであれば、下記ボタンを押してください、、、</p>
            <a href="delet_user.php" class="btn btn-primary next-step" id="next-btn">退会</a>
        </div>
    </div>
</div>

</body>
</html>