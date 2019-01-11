<?php

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
  <div id="top" class="jumbotron">
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
              <input type="email" name="input_email" class="form-control" id="email" placeholder="example@gmail.com">
            </div>
            <div class="form-group">
                <label for="password">パスワード</label>
                <input type="password" name="input_password" class="form-control" id="password" placeholder="4 ~ 16文字のパスワード">
            </div>
            <input type="submit" class="btn btn-primary next-step" id="next-btn" value="サインイン">
            <span style="float: right; padding-top: 6px;">
                <a href="index.php">戻る</a>
            </span>
          </form>
      </div>
    </div>
  </div>
</body>
</html>