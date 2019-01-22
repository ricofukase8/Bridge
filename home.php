<?php
session_start();
require('dbconnect.php');
require('function.php');

$users = getAllUsers($dbh);
$signin_user = getUser($dbh,[23]); //関数の呼び出し
// $users[] = $user;
// $user_companies = getUserCompanies($dbh,[16]); //関数の呼び出し
// $user_advices = getUserAdvices($dbh,[16]); //関数の呼び出し
// $user_portfolios = getUserPortfolios($dbh,[16]); //関数の呼び出し

// $sql='SELECT*FROM`users`';
// $stmt=$dbh->prepare($sql);
// $stmt->execute();
// $users=[];
// while (true) {
//     $record=$stmt->fetch(PDO::FETCH_ASSOC);

// if ($record==false) {
//       break;
//     }
// }

// echo '<pre>';
// var_dump($users);die();

 ?>

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
	<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
	<link rel="stylesheet" href="assets/css/home/owl.carousel.css"/>

  <!-- Tabs -->
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <!-- favebook button -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">

	<link rel="stylesheet" href="assets/css/home/style.css"/>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3">
					<div class="site-logo">
						<h3>BRIDGE</h3><br>
						<p>-NexSeed-</p>
						<!-- <img src="img/logo.png" alt=""> -->
					</div>
					<div class="nav-switch">
						<i class="fa fa-bars"></i>
					</div>
				</div>
				<div class="col-lg-9 col-md-9">
					<a href="#mypage" class="site-btn header-btn" data-toggle="modal" >MYPAGE</a></a>
					<nav class="main-menu">
						<ul>
							<li><a href="like.php" id="link">LIKE</a></li>
							<li><a href="edit.php" id="link">EDIT</a></li>
							<li><a href="main.php" id="link">LOG OUT</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</header>
	<!-- Header section end -->


	<!-- Hero section -->
	<section class="hero-section set-bg" data-setbg="assets/img/bridgemain.png">
		<div class="container">
			<div class="hero-text text-white">
			<!-- <div class="search-warp">
				<div class="section-title text-white">
					<h2>SERCH</h2>
				</div> -->
				<div class="row">
					<div class="col-md-10 offset-md-1">
						<!-- search form -->
						<form class="course-search-form">
							<div class="course-search-form-1">
							<a class="course-search-form-1-button">
							<button type="button" class="btn btn-info sharp">新着順</button>
							<button type="button" class="btn btn-info sharp">人気順</button>
							</a>
							<text class="course-search-form-select">インターン採用</text>
							<input class="radio-career" type="radio" id="careerrer" name="career" value="Yes"> Yes
							<input class="radio-career" type="radio" id="career" name="career" value="No"> No
							</div>
							<div class="course-search-form-2">
							<input type="text" placeholder="keywords">
							<button class="site-btn">Go SERCH!</button>
							</div>
							<div>

							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- <div class="row">
				<div class="col-lg-10 offset-lg-1">
					<form class="intro-newslatter">
						<input type="text" placeholder="Name">
						<input type="text" class="last-s" placeholder="E-mail">
						<button class="site-btn">Sign Up Now</button>
					</form>
				</div>
			</div> -->
			</div>
		</div>
	</section>
	<!-- Hero section end -->


	<!-- categories section -->
	<section class="categories-section spad">
		<div class="container">
			<nav>
            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
            	<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Graduates</a>
            	<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Students</a>
            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">就活中</a>
            </div>
            </nav>
			<div class="row" id="hoge">

			<!-- categorie -->
			<?php foreach ($users as $user): ?>
				<div class="col-lg-4 col-md-6">
					<div class="categorie-item">
						<div class="ci-thumb set-bg" data-setbg="assets/img/user_profile_img/<?php echo $user['img_name']; ?>">
            			</div>
            			<a class="ci-text-link" data-toggle="modal" href="#portfolioModal<?php echo $user['id']; ?>">
						<div class="ci-text">
							<h5><?php echo $user['name']; ?></h5>
							<p><?php echo $user['company_name']; ?></p>
							<!-- <span>120 Courses</span> -->
						</div>
						</a>
					</div>
				</div>

				    <!-- Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal<?php echo $user['id']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
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
                        <p class="lead" id="result_status"><?php echo $user['status_id']; ?></p>
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
                        <p class="lead"  id="result_period"><?php echo $user['term_nexseed_id']; ?></p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-25">
                        <label for="course">コース</label>
                      </div>
                      <div class="col-75">
                        <p class="lead" id="result_course"><?php echo $user['course_id']; ?></p>
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
                              <p class="lead" id="result_career"><?php echo $user['career']; ?></p>
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
                              <p class="lead" id="result_career_period"><?php echo $user['term_company']; ?></p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-25">
                              <label for="job_status">現在働いている</label>
                            </div>
                            <div class="col-75">
                              <p class="lead" id="result_job_status"><?php echo $user['job_status']; ?></p>
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
                              <p class="lead" id="result_job_offer"><?php echo $user['job_offer']; ?></p>
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
                              <p class="lead" for="advice1" id="result_advice"><?php echo $user['advice_id']; ?></p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-25">
                              <label for="portfolio">ポートフォリオURL</label>
                            </div>
                            <div class="col-75">
                              <p class="lead" id="result_portfolio"><?php echo $user['portfolio_url']; ?></p>
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
                              <p class="lead" id="result_portfolio_status"><?php echo $user['portfolio_status']; ?></p>
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
                  		<li><button class="btn btn-warning" type="button" style="border-bottom-width: 20px; margin-bottom: 30px; margin-right: 20px;">LIKE</button></li>
                  		<li><a href="<?php echo $user['fb_account']; ?>"><i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a></li>
                  		<li><button class="btn btn-primary" data-dismiss="modal" type="button" style="margin-bottom: 10px; margin-left: 700px;" >Close Project</button></li>
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
				<!-- categorie -->
				<!-- <div class="col-lg-4 col-md-6">
					<div class="categorie-item">
						<div class="ci-thumb set-bg" data-setbg="assets/img/categories/2.jpg"></div>
						<a class="ci-text-link" data-toggle="modal" href="#portfolioModal2">
						<div class="ci-text">
							<h5>萩原カズマ</h5>
							<p>株式会社〇〇</p> -->
							<!-- <span>70 Courses</span> -->
						<!-- </div>
						</a>
					</div>
				</div> -->
				<!-- categorie -->
				<!-- <div class="col-lg-4 col-md-6">
					<div class="categorie-item">
						<div class="ci-thumb set-bg" data-setbg="assets/img/categories/3.jpg"></div>
						<a class="ci-text-link" data-toggle="modal" href="#portfolioModal3">
						<div class="ci-text" href="#portfolio-modal1">
							<h5>伊藤公平</h5>
							<p>〇〇株式会社</p> -->
							<!-- <span>55 Courses</span> -->
						<!-- </div>
						</a>
					</div>
				</div> -->
				<!-- categorie -->
				<!-- <div class="col-lg-4 col-md-6">
					<div class="categorie-item">
						<div class="ci-thumb set-bg" data-setbg="assets/img/categories/4.jpg"></div>
						<a class="ci-text-link" data-toggle="modal" href="#portfolioModal4">
						<div class="ci-text">
							<h5>大月えりか</h5>
							<p>〇〇 Co., LTD</p> -->
							<!-- <span>40 Courses</span> -->
						<!-- </div>
						</a>
					</div>
				</div> -->
				<!-- categorie -->
				<!-- <div class="col-lg-4 col-md-6">
					<div class="categorie-item">
						<div class="ci-thumb set-bg" data-setbg="assets/img/categories/5.jpg"></div>
						<a class="ci-text-link" data-toggle="modal" href="#portfolioModal5">
						<div class="ci-text">
							<h5>萩原カズマ</h5>
							<p>〇〇株式会社</p> -->
							<!-- <span>220 Courses</span> -->
						<!-- </div>
						</a>
					</div>
				</div> -->
				<!-- categorie -->
				<!-- <div class="col-lg-4 col-md-6">
					<div class="categorie-item">
						<div class="ci-thumb set-bg" data-setbg="assets/img/categories/6.jpg"></div>
						<a class="ci-text-link" data-toggle="modal" href="#portfolioModal6">
						<div class="ci-text">
							<h5>伊藤公平</h5>
							<p>株式会社〇〇</p> -->
							<!-- <span>25 Courses</span> -->
						<!-- </div>
						</a>
					</div>
				</div> -->
			</div>
		</div>
	</section>
	<!-- categories section end -->


		<!-- banner section end -->


	<!-- footer section -->
	<footer class="footer-section spad pb-0" style="padding-top: 50px">
		<div class="footer-top">
			<div class="footer-warp">
				<a href="home.php">
					<h3 style="color: #474747">☝︎TOP</h3>
				</a>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="footer-warp">
				<ul class="footer-menu">
					<li><a href="#">Terms & Conditions</a></li>
					<li><a href="#">Register</a></li>
					<li><a href="#">Privacy</a></li>
				</ul>
				<div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
			</div>
		</div>
	</footer>
	<!-- footer section end -->

	<!-- Portfolio Modals -->

	<!-- my page -->
    <div class="portfolio-modal modal fade" id="mypage" tabindex="-1" role="dialog" aria-hidden="true">
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
                  <h2 class="text-uppercase"><?php echo $signin_user['name']; ?></h2>
                  <img class="img-fluid d-block mx-auto" src="assets/img/user_profile_img/<?php echo $signin_user['img_name']; ?>" alt="">
                   <div class="row">
                      <div class="col-25">
                        <label for="status">ステータス</label>
                      </div>
                      <div class="col-75">
                        <p class="lead" id="result_status"><?php echo $signin_user['status_id']; ?></p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-25">
                        <label for="batchnumber">batch number</label>
                      </div>
                      <div class="col-75">
                        <p class="lead" id="result_batchnumber"><?php echo $signin_user['batch_number']; ?></p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-25">
                        <label for="period">在籍期間</label>
                      </div>
                      <div class="col-75">
                        <p class="lead"  id="result_period"><?php echo $signin_user['term_nexseed_id']; ?></p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-25">
                        <label for="course">コース</label>
                      </div>
                      <div class="col-75">
                        <p class="lead" id="result_course"><?php echo $signin_user['course_id']; ?></p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-25">
                       <label for="profile" id="result_profile">Profile<br>(卒業後の予定等)</label>
                      </div>
                      <div class="col-75">
                        <p class="lead" id="result_profile"><?php echo $signin_user['profile']; ?></p>
                      </div>
                    </div>
                    <div class="row">
                            <div class="col-25">
                              <label for="career">職歴</label>
                            </div>
                            <div class="col-75">
                              <p class="lead" id="result_career"><?php echo $signin_user['career']; ?></p>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-25">
                              <label for="company_name">会社名</label>
                            </div>
                            <div class="col-75">
                              <p class="lead" id="result_company_name"><?php echo $signin_user['company_name']; ?></p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-25">
                              <label for="position" id="result_position">役職</label>
                            </div>
                            <div class="col-75">
                              <p class="lead" id="result_position"><?php echo $signin_user['position']; ?></p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-25">
                              <label for="career_period">在籍期間</label>
                            </div>
                            <div class="col-75">
                              <p class="lead" id="result_career_period"><?php echo $signin_user['term_company']; ?></p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-25">
                              <label for="job_status">現在働いている</label>
                            </div>
                            <div class="col-75">
                              <p class="lead" id="result_job_status"><?php echo $signin_user['job_status']; ?></p>
                            </div>
                          </div>
                            <div class="row">
                              <div class="col-25">
                                <label for="job_contents">仕事内容</label>
                              </div>
                              <div class="col-75">
                               <p class="lead" id="result_job_contents"><?php echo $signin_user['job_contents']; ?></p>
                              </div>
                            </div>
                          <div class="row">
                            <div class="col-25">
                              <label for="job_offer">求人の有無</label>
                            </div>
                            <div class="col-75">
                              <p class="lead" id="result_job_offer"><?php echo $signin_user['job_offer']; ?></p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-25">
                              <label for="job_offer_contents">求人情報</label>
                            </div>
                            <div class="col-75">
                              <p class="lead" id="result_job_offer_contents"><?php echo $signin_user['offer_contents']; ?></p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-25">
                              <label for="advice">相談に乗れること</label>
                            </div>
                            <div class="col-75">
                              <p class="lead" for="advice1" id="result_advice"><?php echo $signin_user['offer_contents']; ?></p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-25">
                              <label for="portfolio">ポートフォリオURL</label>
                            </div>
                            <div class="col-75">
                              <p class="lead" id="result_portfolio"><?php echo $signin_user['portfolio_url']; ?></p>
                            </div>
                          </div> 
                          <div class="row">
                            <div class="col-25">
                              <label for="portfolio_name">サービス名</label>
                            </div>
                            <div class="col-75">
                              <p class="lead" id="result_portfolio_name"><?php echo $signin_user['portfolio_name']; ?></p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-25">
                              <label for="portfolio_status">開発環境</label>
                            </div>
                            <div class="col-75">
                              <p class="lead" id="result_portfolio_status"><?php echo $signin_user['portfolio_status']; ?></p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-25">
                              <label for="portfolio_contents">ポートフォリオコメント</label>
                            </div>
                            <div class="col-75">
                              <p class="lead" id="result_portfolio_contents"><?php echo $signin_user['portfolio_comments']; ?></p>
                            </div>
                          </div>


                  <div class="btn-profile">
                  	<ul class="btn-profile">
                  		<li><button class="btn btn-warning" type="button" style="border-bottom-width: 20px; margin-bottom: 30px; margin-right: 20px;">LIKE</button></li>
                  		<li><a href="<?php echo $user['fb_account']; ?>"><i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a></li>
                  		<li><button class="btn btn-primary" data-dismiss="modal" type="button" style="margin-bottom: 10px; margin-left: 700px;" >Close Project</button></li>
              		</ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>



	<!--====== Javascripts & Jquery ======-->
	<script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/mixitup.min.js"></script>
	<script src="assets/js/circle-progress.min.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	<script src="assets/js/main.js"></script>
</html>