<?php
session_start();
require('dbconnect.php');

$sql = 'SELECT * FROM `advices`';
$stmt = $dbh->prepare($sql);
$stmt->execute();
$advices = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>BRIDGE</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets/css/signup/step1.css">
  <link rel="stylesheet" type="text/css" href="assets/css/signup/signup.css">
  <link rel="stylesheet" type="text/css" href="navbar.css">
  <link rel="stylesheet" type="text/css" href="assets/css/signup/parsley.css">
</head>
<body>
  <div id="top" class="jumbotron" style="background-image: url(assets/img/bridgemain.png);">
    <div class="container">
      <h1 class="title">BRIDGE</h1>
      <p class="subtitle">-NexSeed-</p>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <section>
        <div class="wizard">
            <?php include('components/wizard.php');?>
            <form method="POST" action="post.php" enctype="multipart/form-data" data-parsley-validate data-parsley-trigger="keyup focusout change input">
            <div class="tab-content">
                <?php include('components/step1.php');?>
                <?php include('components/step2.php');?>
                <?php include('components/step3.php');?>

            <!-- step4 form内容 -->
            <div class="tab-pane" role="tabpanel" id="complete">
              <h3>Check Page</h3>
              <p>以下の内容でよろしいですか？</p>

              <div class="tab-content">
              <div class="tab-pane active" role="tabpanel" id="complete">
                <div class="container">
                    <div class="row">
                      <div class="col-25">
                        <label for="name">name</label>
                      </div>
                      <div class="col-75">
                        <p class="lead" id="result_name"></p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-25">
                        <label for="email">email</label>
                      </div>
                      <div class="col-75">
                        <p class="lead" id="result_email"></p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-25">
                        <label for="password">password</label>
                      </div>
                      <div class="col-75">
                        <p class="lead" id="result_password">●●●●●●●</p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-25">
                        <label for="img_name">プロフィール画像</label>
                      </div>
                      <div class="col-75">
                        <img src="assets/img/user_profile_img/defalut.jpg" class="img-responsive img-thumbnail" id="result_img_name" width="300px">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-25">
                        <label for="status">ステータス</label>
                      </div>
                      <div class="col-75">
                        <p class="lead" id="result_status"></p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-25">
                        <label for="batchnumber">batch number</label>
                      </div>
                      <div class="col-75">
                        <p class="lead" id="result_batchnumber"></p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-25">
                        <label for="period">在籍期間</label>
                      </div>
                      <div class="col-75">
                        <p class="lead" id="result_period"></p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-25">
                        <label for="course">コース</label>
                      </div>
                      <div class="col-75">
                        <p class="lead" id="result_course"></p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-25">
                       <label for="profile">Profile<br>(卒業後の予定等)</label>
                      </div>
                      <div class="col-75">
                        <p class="lead" id="result_profile"></p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-25">
                        <label for="facebook">FaceBookアカウント</label>
                      </div>
                      <div class="col-75">
                        <p class="lead" id="result_fb"></p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-25">
                        <label for="career">職歴</label>
                      </div>
                      <div class="col-75">
                        <p class="lead" id="result_career"></p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-25">
                        <label for="company_name">会社名</label>
                      </div>
                      <div class="col-75">
                        <p class="lead" id="result_company_name"></p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-25">
                        <label for="position">役職</label>
                      </div>
                      <div class="col-75">
                        <p class="lead" id="result_position"></p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-25">
                        <label for="career_period">在籍期間</label>
                      </div>
                      <div class="col-75">
                        <ul class="career_period">
                          <li class="lead" id="result_career_year"></li>
                          <li class="lead" id="result_career_month"></li>
                          <li class="lead" id="result_career_year_end"></li>
                          <li class="lead" id="result_career_month_end"></li>
                        </ul>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-25">
                        <label for="job_status">現在働いている</label>
                      </div>
                      <div class="col-75">
                        <p class="lead" id="result_job_status"></p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-25">
                        <label for="job_contents">仕事内容</label>
                      </div>
                      <div class="col-75">
                         <p class="lead" id="result_job_contents"></p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-25">
                        <label for="job_offer">求人の有無</label>
                      </div>
                      <div class="col-75">
                        <p class="lead" id="result_job_offer"></p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-25">
                        <label for="job_offer_contents">求人情報</label>
                      </div>
                      <div class="col-75">
                        <p class="lead" id="result_job_offer_contents"></p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-25">
                        <label for="advice">相談に乗れること</label>
                      </div>
                      <div class="col-75">
                        <p class="lead" for="advice1" id="result_advice"></p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-25">
                        <label for="portfolio">ポートフォリオURL<br>(Git URLでも構いません)</label>
                      </div>
                      <div class="col-75">
                        <p class="lead" id="result_portfolio"></p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-25">
                        <label for="portfolio_name">サービス名</label>
                      </div>
                      <div class="col-75">
                        <p class="lead" id="result_portfolio_name"></p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-25">
                        <label for="portfolio_status">開発体制</label>
                      </div>
                      <div class="col-75">
                        <p class="lead" id="result_portfolio_status"></p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-25">
                        <label for="portfolio_contents">ポートフォリオコメント</label>
                      </div>
                      <div class="col-75">
                        <p class="lead" id="result_portfolio_contents"></p>
                      </div>
                    </div>
                  <ul class="list-inline pull-right">
                    <li>
                    <button type="button" class="btn btn-default prev-step">Previous</button>
                    </li>
                    <li>
                    <button type="submit" class="btn btn-primary btn-info-full next-step" id="next-btn">complete</button>
                    </li>
                  </ul>
                </div>
              </div>
              </div>
            </div>
            </div>
            </form>
        </div>
      </section>
    </div>
  </div>

<script src="assets/jquery/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="assets/js/signup.js"></script>
<script src="assets/js/parsley.min.js"></script>
<script src="assets/js/ja.js"></script>
<script src="assets/js/ja.extra.js"></script>

</body>
</html>
