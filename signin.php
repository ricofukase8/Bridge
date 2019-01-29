<?php
session_start();
require("dbconnect.php");
require("function.php");


$errors=[];

if (!empty($_POST)) {
    $email = $_POST["input_email"];
    $password = $_POST["input_password"];
    // var_dump($email);die();
    if ($email !== "" && $password !== "") {
        $signin_user = getUser($dbh,$email);
        if ($signin_user == false) {
            $errors["signin"]="failed";
            // var_dump($errors["signin"]);
        }else{
            if (password_verify($password,$signin_user["password"])) {
                $_SESSION["bridge"]["id"]=$signin_user["user_id"];
                header("Location: home.php");
                exit();
            }else{
                $errors["signin"]="failed";
                // var_dump($errors["signin"]);
            }
        }
    }else{
        $errors["signin"]="blank";
    }
}




?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>BRIDGE</title>
    <link rel="stylesheet" type="text/css" href="assets/css/signup/signup.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>
<body >
  <div id="top" class="jumbotron" style="background-image: url(assets/img/bridgemain.png);">
    <div class="container">
      <h1 class="title">BRIDGE</h1>
        <p class="subtitle">-NexSeed-</p>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-xs-8 col-xs-offset-2 thumbnail" style="border: 0px;">
        <h2 class="text-center content_header">サインイン</h2>
          <form method="POST" action="signin.php" enctype="multipart/form-data">
            <div class="form-group">
              <label for="email">メールアドレス</label>
              <input type="email" name="input_email" class="form-control" id="email" placeholder="example@gmail.com" required/>
              <!-- <?php if (isset($errors["signin"]) && $errors["signin"] == "blank"): ?>
              <p class="text-danger">メールアドレスとパスワードを入力してください</p>
              <?php endif ?> -->
             <!--  <?php if (isset($errors["signin"]) && $errors["signin"] == "failed"): ?>
              <p class="text-danger">ログインに失敗しました</p>
              <?php endif ?> -->
            </div>
            <div class="form-group">
                <label for="password">パスワード</label>
                <input type="password" name="input_password" class="form-control" id="password" placeholder="4 ~ 16文字のパスワード" pattern="^([a-zA-Z0-9-_/.]{4,16})$" title="半角英数字4~16文字、記号は-_/.で入力してください" required />
                  <?php if (isset($errors["signin"]) && $errors["signin"] == "failed"): ?>
                  <p class="text-danger">ログインに失敗しました</p>
                  <?php endif ?>
            </div>
            <input type="submit" class="btn btn-primary next-step" id="next-btn" value="サインイン">
            <span style="float: right; padding-top: 6px;">
                <a href="main.php">戻る</a>
            </span>
          </form>
      </div>
    </div>
  </div>
</body>
</html>