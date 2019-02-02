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
  <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="assets/css/signup/step1.css">
  <link rel="stylesheet" type="text/css" href="assets/css/signup/signup.css">
  <link rel="stylesheet" type="text/css" href="navbar.css">

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
                        <p class="lead" id="result_name">name</p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-25">
                        <label for="email">email</label>
                      </div>
                      <div class="col-75">
                        <p class="lead" id="result_email">email</p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-25">
                        <label for="password">password</label>
                      </div>
                      <div class="col-75">
                        <p class="lead" id="result_password">●●●●●●●●</p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-25">
                        <label for="img_name">プロフィール画像</label>
                      </div>
                      <div class="col-75">
                        <img src="assets/img/categories/1.jpg" class="img-responsive img-thumbnail" id="result_img_name" width="300px">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-25">
                        <label for="status">ステータス</label>
                      </div>
                      <div class="col-75">
                        <p class="lead" id="result_status">status</p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-25">
                        <label for="batchnumber">batch number</label>
                      </div>
                      <div class="col-75">
                        <p class="lead" id="result_batchnumber">batch48</p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-25">
                        <label for="period">在籍期間</label>
                      </div>
                      <div class="col-75">
                        <p class="lead" id="result_period">○ヶ月〜○ヶ月</p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-25">
                        <label for="course">コース</label>
                      </div>
                      <div class="col-75">
                        <p class="lead" id="result_course">course</p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-25">
                       <label for="profile">Profile<br>(卒業後の予定等)</label>
                      </div>
                      <div class="col-75">
                        <p class="lead" id="result_profile"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-25">
                        <label for="facebook">FaceBookアカウント</label>
                      </div>
                      <div class="col-75">
                        <p class="lead" id="result_fb">FBaccountURL</p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-25">
                        <label for="career">職歴</label>
                      </div>
                      <div class="col-75">
                        <p class="lead" id="result_career">Yes or No</p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-25">
                        <label for="company_name">会社名</label>
                      </div>
                      <div class="col-75">
                        <p class="lead" id="result_company_name">company name</p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-25">
                        <label for="position">役職</label>
                      </div>
                      <div class="col-75">
                        <p class="lead" id="result_position">position</p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-25">
                        <label for="career_period">在籍期間</label>
                      </div>
                      <div class="col-75">
                        <ul class="career_period">
                          <li class="lead" id="result_career_year">0000年</li>
                          <li class="lead" id="result_career_month">00月〜</li>
                          <li class="lead" id="result_career_year_end">0000年</li>
                          <li class="lead" id="result_career_month_end">00月</li>
                        </ul>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-25">
                        <label for="job_status">現在働いている</label>
                      </div>
                      <div class="col-75">
                        <p class="lead" id="result_job_status">Yes or No</p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-25">
                        <label for="job_contents">仕事内容</label>
                      </div>
                      <div class="col-75">
                         <p class="lead" id="result_job_contents">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                         tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                         quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                         consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                         cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                         proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                      </div>
                    </div>

                    <!-- <?php if(isset($_POST["input_career_2"])) :?>
                    <div class="row">
                      <div class="col-25">
                        <label for="career">職歴2</label>
                      </div>
                      <div class="col-75">
                        <p class="lead" id="result_career_2">Yes or No</p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-25">
                        <label for="company_name">会社名</label>
                      </div>
                      <div class="col-75">
                        <p class="lead" id="result_company_name_2">company name</p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-25">
                        <label for="position">役職</label>
                      </div>
                      <div class="col-75">
                        <p class="lead" id="result_position_2">position</p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-25">
                        <label for="career_period">在籍期間</label>
                      </div>
                      <div class="col-75">
                        <ul class="career_period">
                          <li class="lead" id="result_career_year_2">0000年</li>
                          <li class="lead" id="result_career_month_2">00月〜</li>
                          <li class="lead" id="result_career_year_end_2">0000年</li>
                          <li class="lead" id="result_career_month_end_2">00月</li>
                        </ul>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-25">
                        <label for="job_status">現在働いている</label>
                      </div>
                      <div class="col-75">
                        <p class="lead" id="result_job_status_2">Yes or No</p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-25">
                        <label for="job_contents">仕事内容</label>
                      </div>
                      <div class="col-75">
                        <p class="lead" id="result_job_contents_2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                         tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                         quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                         consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                         cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                         proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                      </div>
                    </div>
                    <?php endif; ?> -->

                    <div class="row">
                      <div class="col-25">
                        <label for="job_offer">求人の有無</label>
                      </div>
                      <div class="col-75">
                        <p class="lead" id="result_job_offer">Yes or No</p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-25">
                        <label for="job_offer_contents">求人情報</label>
                      </div>
                      <div class="col-75">
                        <p class="lead" id="result_job_offer_contents">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
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
                        <p class="lead" id="result_portfolio">PortfolioURL</p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-25">
                        <label for="portfolio_name">サービス名</label>
                      </div>
                      <div class="col-75">
                        <p class="lead" id="result_portfolio_name">service name</p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-25">
                        <label for="portfolio_status">開発環境</label>
                      </div>
                      <div class="col-75">
                        <p class="lead" id="result_portfolio_status">個人開発 or チーム開発</p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-25">
                        <label for="portfolio_contents">ポートフォリオコメント</label>
                      </div>
                      <div class="col-75">
                        <p class="lead" id="result_portfolio_contents">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
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

<!-- Java script -->
<script type="text/javascript">
$(document).ready(function () {
    $('.nav-tabs > li a[title]').tooltip();

    $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

        var $target = $(e.target);

        if ($target.parent().hasClass('disabled')) {
            return false;
        }
    });

    $(".next-step").click(function (e) {

        var $active = $('.wizard .nav-tabs li.active');
        $active.next().removeClass('disabled');
        nextTab($active);
    });

    $(".prev-step").click(function (e) {

        var $active = $('.wizard .nav-tabs li.active');
        prevTab($active);
    });
});

function nextTab(elem) {
    $(elem).next().find('a[data-toggle="tab"]').click();
}
function prevTab(elem) {
    $(elem).prev().find('a[data-toggle="tab"]').click();
}
</script>

<!-- <script src="assets/jquery/jquery.min.js"></script> -->
<script src="assets/js/parsley.min.js"></script>
<script src="assets/js/ja.js"></script>
<script src="assets/js/ja.extra.js"></script>
<link rel="stylesheet" type="text/css" href="assets/css/signup/parsley.css">
<script src="assets/js/signup.js"></script>

</body>
</html>
