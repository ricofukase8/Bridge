<!DOCTYPE html>
<html lang="ja">
<head>
  <title>bridge-home</title>
  <meta charset="UTF-8">
  <meta name="description" content="WebUni Education Template">
  <meta name="keywords" content="webuni, education, creative, html">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Favicon -->
  <link href="img/favicon.ico" rel="shortcut icon"/>
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">
  <!-- Stylesheets -->
  <link rel="stylesheet" href="assets/css/home/bootstrap.min.css"/>
  <link rel="stylesheet" href="assets/css/home/owl.carousel.css"/>
  <!-- Tabs -->
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!-- favebook button -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/home/style.css"/>
  <script src="assets/js/like.js"></script>
</head>
<body>
  <!-- Page Preloder -->
  <div id="preloder">
    <div class="loader"></div>
  </div>

  <?php include('header.php'); ?>

  <!-- Hero section -->
  <section class="hero-section set-bg" data-setbg="assets/img/bridgemain.png">
    <div class="container">
    <div class="hero-text text-white">
        <?php if (strpos($_SERVER['REQUEST_URI'], 'like.php') !== false) : ?>
        <div class="section-title text-white">
          <h2>Your LIKE</h2>
        </div>
        <?php endif; ?>
    <div class="row">
    <div class="col-md-10 offset-md-1">
      <span hidden class="signin-user"><?php echo $signin_user_id; ?></span>
      <?php if (strpos($_SERVER['REQUEST_URI'], 'home.php') !== false) : ?>
      <?php include('components/search.php'); ?>
      <?php endif; ?>
    </div>
    </div>
    </div>
    </div>
  </section>


  <!-- categories section -->
  <section class="categories-section spad" <?php if(strpos($_SERVER['REQUEST_URI'], 'like.php') !== false): ?> style="
    padding-bottom: 50‒;
    padding-top: 100‒;
    padding-top: 150px;
  " <?php endif; ?>>
    <div class="container">
        <?php if (strpos($_SERVER['REQUEST_URI'], 'home.php') !== false) : ?>
        <nav>
          <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
            <a class="nav-item nav-link graduates" id="nav-graduates-tab" data-toggle="tab" href="#nav-graduates" role="tab" aria-controls="nav-graduates" aria-selected="true">Graduates</a>
            <a class="nav-item nav-link students" id="nav-students-tab" data-toggle="tab" href="#nav-students" role="tab" aria-controls="nav-students" aria-selected="false">Students</a>
            <a class="nav-item nav-link huntings" id="nav-huntings-tab" data-toggle="tab" href="#nav-huntings" role="tab" aria-controls="nav-huntings" aria-selected="false">就活中</a>
          </div>
        </nav>
        <?php endif; ?>

        <!-- categorie -->
        <div class="row" id="hoge">
            <?php if (isset($users[0]) && $users[0] !== false) : ?>
            <?php foreach ($users as $user) : ?>
              <div class="col-lg-4 col-md-6 category-item status_id_<?php echo $user['status_id']; ?>">
                <div class="categorie-item">
                  <a class="ci-text-link" data-toggle="modal" href="#portfolioModal<?php
                      if (strpos($_SERVER['REQUEST_URI'], 'home.php') !== false) {
                          echo $user['user_id'];
                      } elseif (strpos($_SERVER['REQUEST_URI'], 'like.php') !== false) {
                          echo $user['id'];
                      }
                     ?>">
                    <div class="ci-thumb set-bg" data-setbg="assets/img/user_profile_img/<?php echo $user['img_name']; ?>">
                    </div>
                    <div class="ci-text">
                      <h5><?php echo $user['name']; ?></h5>
                      <p><?php echo $user['company_name']; ?></p>
                    </div>
                  </a>
                </div>
              </div>

              <!-- profileModal -->
              <div class="portfolio-modal modal fade" id="portfolioModal<?php
                      if (strpos($_SERVER['REQUEST_URI'], 'home.php') !== false) {
                          echo $user['user_id'];
                      } elseif (strpos($_SERVER['REQUEST_URI'], 'like.php') !== false) {
                          echo $user['id'];
                      }
                     ?>" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-profile">
                <div class="modal-content">
                  <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                      <div class="rl"></div>
                    </div>
                  </div>
                  <div class="container">
                    <div class="row">
                      <div class="col-lg-8 mx-auto">
                        <div class="modal-body">
                          <!-- Project Details Go Here -->
                          <h2 class="text-uppercase"><?php echo $user['name']; ?></h2>
                          <img class="img-fluid d-block mx-auto" src="assets/img/user_profile_img/<?php echo $user['img_name']; ?>" alt="">
                          <div class="row">
                            <div class="col-25">
                              <label for="status">ステータス</label>
                            </div>
                            <div class="col-75">
                              <p class="lead" id="result_status"><?php echo $user['status']; ?></p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-25">
                              <label for="batchnumber">batch number</label>
                            </div>
                            <div class="col-75">
                              <p class="lead" id="result_batchnumber"><?php echo $user['batch_number']; ?></p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-25">
                              <label for="period">在籍期間</label>
                            </div>
                            <div class="col-75">
                              <p class="lead"  id="result_period"><?php echo $user['term']; ?></p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-25">
                              <label for="course">コース</label>
                            </div>
                            <div class="col-75">
                              <p class="lead" id="result_course"><?php echo $user['course']; ?></p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-25">
                             <label for="profile" id="result_profile">Profile<br>(卒業後の予定等)</label>
                            </div>
                            <div class="col-75">
                              <p class="lead" id="result_profile"><?php echo $user['profile']; ?></p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-25">
                              <label for="career">職歴</label>
                            </div>
                            <div class="col-75">
                                <?php if ($user['career'] == 1) : ?>
                                <p class="lead" id="result_career">Yes</p>
                                <?php elseif ($user['career'] == 2) : ?>
                                <p class="lead" id="result_career">No</p>
                                <?php endif; ?>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-25">
                              <label for="company_name">会社名</label>
                            </div>
                            <div class="col-75">
                              <p class="lead" id="result_company_name"><?php echo $user['company_name']; ?></p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-25">
                              <label for="position" id="result_position">役職</label>
                            </div>
                            <div class="col-75">
                              <p class="lead" id="result_position"><?php echo $user['position']; ?></p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-25">
                              <label for="career_period">在籍期間</label>
                            </div>
                            <div class="col-75">
                              <ul class="career_period" color="#878787">
                                <li class="lead" id="result_career_year"><?php echo $user['term_company_year']; ?>年</li>
                                <li class="lead" id="result_career_month"><?php echo $user['term_company_month']; ?>月〜</li>
                                <li class="lead" id="result_career_year_end"><?php echo $user['term_company_year_end']; ?>年</li>
                                <li class="lead" id="result_career_month_end"><?php echo $user['term_company_month_end']; ?>月</li>
                              </ul>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-25">
                              <label for="job_status">現在働いている</label>
                            </div>
                            <div class="col-75">
                                <?php if ($user['job_status'] == 1) : ?>
                                <p class="lead" id="result_job_status">Yes</p>
                                <?php elseif ($user['job_status'] == 2) : ?>
                                <p class="lead" id="result_job_status">No</p>
                                <?php endif; ?>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-25">
                              <label for="job_contents">仕事内容</label>
                            </div>
                            <div class="col-75">
                             <p class="lead" id="result_job_contents"><?php echo $user['job_contents']; ?></p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-25">
                              <label for="job_offer">求人の有無</label>
                            </div>
                            <div class="col-75">
                                <?php if ($user['job_offer'] == 1) : ?>
                                <p class="lead" id="result_job_offer">Yes</p>
                                <?php elseif ($user['job_offer'] == 2) : ?>
                                <p class="lead" id="result_job_offer">No</p>
                                <?php endif; ?>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-25">
                              <label for="job_offer_contents">求人情報</label>
                            </div>
                            <div class="col-75">
                              <p class="lead" id="result_job_offer_contents"><?php echo $user['offer_contents']; ?></p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-25">
                              <label for="advice">相談に乗れること</label>
                            </div>
                            <div class="col-75">
                              <p class="lead" for="advice1" id="result_advice">
                                  <?php if (isset($user['advices'])) : ?>
                                    <?php foreach ($user['advices'] as $advice) : ?>
                                      <?php echo $advice['advice_id']; ?>
                                    <?php endforeach; ?>
                                  <?php endif; ?>
                              </p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-25">
                              <label for="portfolio">ポートフォリオURL</label>
                            </div>
                            <div class="col-75">
                              <a href="<?php echo $user['portfolio_url']; ?>"><p class="lead" id="result_portfolio"><?php echo $user['portfolio_url']; ?></p></a>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-25">
                              <label for="portfolio_name">サービス名</label>
                            </div>
                            <div class="col-75">
                              <p class="lead" id="result_portfolio_name"><?php echo $user['portfolio_name']; ?></p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-25">
                              <label for="portfolio_status">開発環境</label>
                            </div>
                            <div class="col-75">
                                <?php if ($user['portfolio_status'] == 1) : ?>
                                <p class="lead" id="result_portfolio_status">チーム開発</p>
                                <?php elseif ($user['portfolio_status'] == 2) : ?>
                                <p class="lead" id="result_portfolio_status">個人開発</p>
                                <?php endif; ?>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-25">
                              <label for="portfolio_contents">ポートフォリオコメント</label>
                            </div>
                            <div class="col-75">
                              <p class="lead" id="result_portfolio_contents"><?php echo $user['portfolio_comments']; ?></p>
                            </div>
                          </div>

                          <div class="btn-profile">
                            <ul class="btn-profile">
                              <li>
                                <?php if(strpos($_SERVER['REQUEST_URI'], 'home.php') !== false && $user['user_id'] !== $signin_user_id): ?>
                                  <span hidden class="user-id"><?php echo $user['user_id']; ?></span>
                                    <?php if ($user['is_liked']) : ?>
                                      <button class="btn btn-like js-unlike" id="like-btn" style="border-bottom-width: 2px; margin-bottom: 30px; margin-right: 20px;">
                                        <span>LIKEを取り消す</span>
                                      </button>
                                    <?php else : ?>
                                      <button class="btn btn-like js-like" id="like-btn" style="border-bottom-width: 2px; margin-bottom: 30px; margin-right: 20px;">
                                        <span>LIKE</span>
                                      </button>
                                    <?php endif;?>
                                <?php elseif (strpos($_SERVER['REQUEST_URI'], 'like.php') !== false && $user['id'] !== $signin_user_id): ?>
                                  <span hidden class="user-id"><?php echo $user['liked_id']; ?></span>
                                    <?php if ($user['is_liked']) : ?>
                                      <button class="btn btn-like js-unlike" id="like-btn" style="border-bottom-width: 2px; margin-bottom: 30px; margin-right: 20px;">
                                        <span>LIKEを取り消す</span>
                                      </button>
                                    <?php else : ?>
                                      <button class="btn btn-like js-like" id="like-btn" style="border-bottom-width: 2px; margin-bottom: 30px; margin-right: 20px;">
                                        <span>LIKE</span>
                                      </button>
                                    <?php endif;?>
                                <?php endif; ?>
                              </li>
                              <li>
                                <a href="<?php echo $user['fb_account']; ?>"><i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a>
                              </li>
                              <li>
                                <button class="btn btn-primary" data-dismiss="modal" type="button" style="margin-bottom: 10px; margin-left: 700px;" >Close Project</button>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  </div>
                </div>
        </div>
            <?php endforeach; ?>
            <?php endif ?>
        </div>
  </section>

  <!-- footer section -->
  <footer class="footer-section spad pb-0" style="padding-top: 50px">
    <div class="footer-top">
      <div class="footer-warp">
          <?php if (strpos($_SERVER['REQUEST_URI'], 'home.php') !== false) : ?>
          <a href="home.php">
          <?php elseif (strpos($_SERVER['REQUEST_URI'], 'like.php') !== false) : ?>
          <a href="like.php">
          <?php endif; ?>
          <h3 style="color: #474747">☝︎TOP</h3>
        </a>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="footer-warp">
          <ul class="footer-menu">
            <li><a href="withdraw.php">退会</a></li>
            <li><a href="#">Register</a></li>
            <li><a href="#">Privacy</a></li>
          </ul>
          <div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
      </div>
    </div>
  </footer>

  <?php include('mypage.php'); ?>

    <!--====== Javascripts & Jquery ======-->
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/mixitup.min.js"></script>
    <script src="assets/js/circle-progress.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>