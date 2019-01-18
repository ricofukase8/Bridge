<?php


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>BRIDGE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">


    <link rel="stylesheet" type="text/css" href="assets/css/signup/step1.css">

    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="navbar.css">
    <link rel="stylesheet" type="text/css" href="assets/css/edit.css">
    <script type="text/javascript" src="assets/js/edit.js"></script>

</head>
<body>

  <?php include('navbar.php'); ?>
  <div class="container">
	  <div class="row">
	    <section>
        <div class="wizard">
          <div class="wizard-inner">
            <div class="connecting-line"></div>
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active">
                <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
                  <span class="round-tab">
                    <i class="glyphicon glyphicon-user"></i>
                  </span>
                </a>
              </li>
              <li role="presentation" class="disabled">
                <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
                  <span class="round-tab">
                    <i class="glyphicon glyphicon-pencil"></i>
                    </span>
                </a>
              </li>
              <li role="presentation" class="disabled">
                <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Step 3">
                  <span class="round-tab">
                    <i class="glyphicon glyphicon-cloud-upload"></i>
                  </span>
                </a>
              </li>
              <li role="presentation" class="disabled">
                <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Complete">
                  <span class="round-tab">
                    <i class="glyphicon glyphicon-ok"></i>
                  </span>
                </a>
              </li>
            </ul>
          </div>


<!-- step1 form内容 -->
          <form role="form">
            <div class="tab-content">
              <div class="tab-pane active" role="tabpanel" id="step1">
                <h3>Basic Infomation</h3>
                  <p>This is step 1</p>
                <div class="container">
                  <!-- <form action="/action_page.php"> -->
                    <div class="row">
                      <div class="col-25">
                        <label for="name">name</label>
                      </div>
                      <div class="col-75">
                      <input type="text" id="name" name="input_name" placeholder="Your name.." required>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-25">
                        <label for="email">email</label>
                      </div>
                      <div class="col-75">
                        <input type="email" id="email" name="input_email" placeholder="Your email..">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-25">
                        <label for="password">password</label>
                    </div>
                      <div class="col-75">
                        <input type="password" id="password" name="input_password" placeholder="Your password..">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-25">
                        <label for="img_name">プロフィール画像</label>
                      </div>
                      <div class="col-75">
                      <input type="file" name="input_img_name" id="img_name" accept="image/*">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-25">
                        <label for="status">ステータス</label>
                      </div>
                      <div class="col-75">
                        <select id="status" name="input_status">
                          <option value="" selected="selected">選択してください</option>
                          <option value="1">在校生</option>
                          <option value="2">卒業生(就活中)</option>
                          <option value="3">卒業生(就職済)</option>
                          <option value="4">フリーランス</option>
                        </select>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-25">
                        <label for="batchnumber">batch number</label>
                      </div>
                      <div class="col-75">
                        <input type="tel" id="batchnumber" name="input_batchnumber" placeholder="Your batchnumber..">&nbsp;batch
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-25">
                        <label for="priod">在籍期間</label>
                      </div>
                      <div class="col-75">
                        <select id="priod" name="input_priod">
                          <option value="" selected="selected">選択してください</option>
                          <option value="1">1ヶ月未満</option>
                          <option value="2">1ヶ月~2ヶ月</option>
                          <option value="3">2ヶ月~3ヶ月</option>
                          <option value="4">3ヶ月以上</option>
                        </select>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-25">
                        <label for="course">コース</label>
                      </div>
                      <div class="col-75">
                        <select id="course" name="input_course">
                          <option value="" selected="selected">選択してください</option>
                          <option value="1">webコース</option>
                          <option value="2">iOSコース</option>
                          <option value="3">basicコース</option>
                        </select>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-25">
                       <label for="profile">Profile<br>(卒業後の予定等)</label>
                      </div>
                      <div class="col-75">
                        <textarea id="profile" name="subject" placeholder="Write something.."></textarea>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-25">
                        <label for="facebook">FaceBookアカウント</label>
                      </div>
                      <div class="col-75">
                        <input type="text" id="fb" name="input_fb" placeholder="Your FBaccount..">
                      </div>
                    </div>
                  <!-- </form> -->
                </div>
                <ul class="list-inline pull-right">
                  <li><button type="button" class="btn btn-primary next-step" id="next-btn">Save and continue</button></li>
                </ul>
              </div>


              <!-- step2 form内容 -->
              <div class="tab-pane" role="tabpanel" id="step2">
                <h3>Job Infomation</h3>
                  <p>This is step 2</p>
                <!-- <form role="form"> -->
                  <div class="tab-content">
                    <div class="tab-pane active" role="tabpanel" id="step2">
                      <div class="container">
                        <!-- <form action="/action_page.php"> -->
                          <div class="row">
                            <div class="col-25">
                              <label for="career">職歴</label>
                            </div>
                            <div class="col-75">
                              <input class="radio-career" type="radio" id="career_yes" name="career" value="Yes">Yes &emsp;
                              <input class="radio-career" type="radio" id="career_no" name="career" value="No">No
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-25">
                              <label for="company_name">会社名</label>
                            </div>
                            <div class="col-75">
                              <input type="text" id="company_name" name="input_company_name" placeholder="Your company name..">
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-25">
                              <label for="position">役職</label>
                            </div>
                            <div class="col-75">
                              <input type="text" id="position" name="input_position" placeholder="Your position..">
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-25">
                              <label for="career_period">在籍期間</label>
                            </div>
                            <div class="col-75">
                              <select id="select_box_year" name="input_year">
                                  <option value="" selected="selected">-</option>
                                  <option value="2000">2000</option>
                                  <option value="2001">2001</option>
                                  <option value="2002">2002</option>
                                  <option value="2003">2003</option>
                                  <option value="2004">2004</option>
                                  <option value="2005">2005</option>
                                  <option value="2006">2006</option>
                                  <option value="2007">2007</option>
                                  <option value="2008">2008</option>
                                  <option value="2009">2009</option>
                                  <option value="2010">2010</option>
                                  <option value="2011">2011</option>
                                  <option value="2012">2012</option>
                                  <option value="2013">2013</option>
                                  <option value="2014">2014</option>
                                  <option value="2015">2015</option>
                                  <option value="2016">2016</option>
                                  <option value="2017">2017</option>
                                  <option value="2018">2018</option>
                                  <option value="2019">2019</option>
                                  <option value="2020">2020</option>
                                  <option value="2021">2021</option>
                                  <option value="2022">2022</option>
                                  <option value="2023">2023</option>
                                  <option value="2024">2024</option>
                                  <option value="2025">2025</option>
                                  <option value="2026">2026</option>
                                  <option value="2027">2027</option>
                                  <option value="2028">2028</option>
                                  <option value="2029">2029</option>
                                  <option value="2030">2030</option>
                              </select>年 &thinsp;

                              <select id="select_box_month" name="input_course">
                                <option value="" selected="selected">-</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                              </select>月~

                              <select id="select_box_year_end" name="input_year">
                                  <option value="" selected="selected">-</option>
                                  <option value="2000">2000</option>
                                  <option value="2001">2001</option>
                                  <option value="2002">2002</option>
                                  <option value="2003">2003</option>
                                  <option value="2004">2004</option>
                                  <option value="2005">2005</option>
                                  <option value="2006">2006</option>
                                  <option value="2007">2007</option>
                                  <option value="2008">2008</option>
                                  <option value="2009">2009</option>
                                  <option value="2010">2010</option>
                                  <option value="2011">2011</option>
                                  <option value="2012">2012</option>
                                  <option value="2013">2013</option>
                                  <option value="2014">2014</option>
                                  <option value="2015">2015</option>
                                  <option value="2016">2016</option>
                                  <option value="2017">2017</option>
                                  <option value="2018">2018</option>
                                  <option value="2019">2019</option>
                                  <option value="2020">2020</option>
                                  <option value="2021">2021</option>
                                  <option value="2022">2022</option>
                                  <option value="2023">2023</option>
                                  <option value="2024">2024</option>
                                  <option value="2025">2025</option>
                                  <option value="2026">2026</option>
                                  <option value="2027">2027</option>
                                  <option value="2028">2028</option>
                                  <option value="2029">2029</option>
                                  <option value="2030">2030</option>
                              </select>年 &thinsp;

                              <select id="select_box_month_end" name="input_course">
                                <option value="" selected="selected">-</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                              </select>月
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-25">
                              <label for="job_status">現在働いている</label>
                            </div>
                            <div class="col-75">
                              <input class="radio-career" type="radio" id="job_status_yes" name="input_job_status" value="Yes">Yes &emsp;
                              <input class="radio-career" type="radio" id="job_status_no" name="input_job_status" value="No">No
                            </div>
                          </div>
                            <div class="row">
                              <div class="col-25">
                                <label for="job_contents">仕事内容</label>
                              </div>
                              <div class="col-75">
                               <textarea id="job_contents" name="input_job_content" placeholder="Write your job contents..."></textarea>
                              </div>
                            <!-- </div> -->



                        <div id="icon">
                          <a id="panel-btn"><span id="panel-btn-icon"></span></a>
                        </div>



                      <div id="company-toggle">
                        <div class="row">
                            <div class="col-25">
                              <label for="career">職歴2</label>
                            </div>
                            <div class="col-75">
                              <input class="radio-career" type="radio" id="career_yes_2" name="input_career_2" value="Yes">Yes &emsp;
                              <input class="radio-career" type="radio" id="career_no_2" name="input_career_2" value="No">No
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-25">
                              <label for="company_name">会社名</label>
                            </div>
                            <div class="col-75">
                              <input type="text" id="company_name_2" name="input_company_name_2" placeholder="Your company name..">
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-25">
                              <label for="position">役職</label>
                            </div>
                            <div class="col-75">
                              <input type="text" id="position_2" name="input_position_2" placeholder="Your position..">
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-25">
                              <label for="career_period">在籍期間</label>
                            </div>
                            <div class="col-75">
                              <select id="select_box_year_2" name="input_career_year_2">
                                  <option value="" selected="selected">-</option>
                                  <option value="2000">2000</option>
                                  <option value="2001">2001</option>
                                  <option value="2002">2002</option>
                                  <option value="2003">2003</option>
                                  <option value="2004">2004</option>
                                  <option value="2005">2005</option>
                                  <option value="2006">2006</option>
                                  <option value="2007">2007</option>
                                  <option value="2008">2008</option>
                                  <option value="2009">2009</option>
                                  <option value="2010">2010</option>
                                  <option value="2011">2011</option>
                                  <option value="2012">2012</option>
                                  <option value="2013">2013</option>
                                  <option value="2014">2014</option>
                                  <option value="2015">2015</option>
                                  <option value="2016">2016</option>
                                  <option value="2017">2017</option>
                                  <option value="2018">2018</option>
                                  <option value="2019">2019</option>
                                  <option value="2020">2020</option>
                                  <option value="2021">2021</option>
                                  <option value="2022">2022</option>
                                  <option value="2023">2023</option>
                                  <option value="2024">2024</option>
                                  <option value="2025">2025</option>
                                  <option value="2026">2026</option>
                                  <option value="2027">2027</option>
                                  <option value="2028">2028</option>
                                  <option value="2029">2029</option>
                                  <option value="2030">2030</option>
                              </select>年 &thinsp;

                              <select id="select_box_month_2" name="input_career_month_2">
                                <option value="" selected="selected">-</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                              </select>月~

                              <select id="select_box_year_end_2" name="input_career_year_end_2">
                                  <option value="" selected="selected">-</option>
                                  <option value="2000">2000</option>
                                  <option value="2001">2001</option>
                                  <option value="2002">2002</option>
                                  <option value="2003">2003</option>
                                  <option value="2004">2004</option>
                                  <option value="2005">2005</option>
                                  <option value="2006">2006</option>
                                  <option value="2007">2007</option>
                                  <option value="2008">2008</option>
                                  <option value="2009">2009</option>
                                  <option value="2010">2010</option>
                                  <option value="2011">2011</option>
                                  <option value="2012">2012</option>
                                  <option value="2013">2013</option>
                                  <option value="2014">2014</option>
                                  <option value="2015">2015</option>
                                  <option value="2016">2016</option>
                                  <option value="2017">2017</option>
                                  <option value="2018">2018</option>
                                  <option value="2019">2019</option>
                                  <option value="2020">2020</option>
                                  <option value="2021">2021</option>
                                  <option value="2022">2022</option>
                                  <option value="2023">2023</option>
                                  <option value="2024">2024</option>
                                  <option value="2025">2025</option>
                                  <option value="2026">2026</option>
                                  <option value="2027">2027</option>
                                  <option value="2028">2028</option>
                                  <option value="2029">2029</option>
                                  <option value="2030">2030</option>
                              </select>年 &thinsp;

                              <select id="select_box_month_end_2" name="input_career_month_end_2">
                                <option value="" selected="selected">-</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                              </select>月
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-25">
                              <label for="job_status">現在働いている</label>
                            </div>
                            <div class="col-75">
                              <input class="radio-career" type="radio" id="job_status_yes_2" name="input_job_status_2" value="Yes">Yes &emsp;
                              <input class="radio-career" type="radio" id="job_status_no_2" name="input_job_status_2" value="No">No
                            </div>
                          </div>
                            <div class="row">
                              <div class="col-25">
                                <label for="job_contents">仕事内容</label>
                              </div>
                              <div class="col-75">
                               <textarea id="job_contents_2" name="input_job_content_2" placeholder="Write your job contents..."></textarea>
                              </div>
                            </div>
                            <hr>
                      </div>






                          <div class="row">
                            <div class="col-25">
                              <label for="job_offer">求人の有無</label>
                            </div>
                            <div class="col-75">
                              <input class="radio-career" type="radio" id="job_offer_yes" name="input_job_offer" value="Yes">Yes &emsp;
                              <input class="radio-career" type="radio" id="job_offer_no" name="input_job_offer" value="No">No
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-25">
                              <label for="job_offer_comments">求人情報</label>
                            </div>
                            <div class="col-75">
                              <textarea id="job_offer_comments" name="input_job_offer_comments" placeholder="Write job offer contents..."></textarea>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-25">
                              <label for="advice">相談に乗れること</label>
                            </div>
                            <div class="checkbox">
                              <input type="checkbox" class="check_box" id="advice1" name="advice[]" value="1">
                              <label class="advice_check" for="advice1">就活相談</label>
                              <input type="checkbox" class="check_box" id="advice2" name="advice[]" value="2">
                              <label class="advice_check" for="advice2">業界分析</label>
                              <input type="checkbox" class="check_box" id="advice3" name="advice[]" value="3">
                              <label class="advice_check" for="advice3">企業研究</label>
                              <input type="checkbox" class="check_box" id="advice4" name="advice[]" value="4">
                              <label class="advice_check" for="advice4">自己分析</label>
                            </div>
                            </div>
                          </div>
                        <!-- </form> -->
                      </div>
                    </div>

                    <ul class="list-inline pull-right">
                        <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                        <li><button type="button" class="btn btn-primary next-step" id="next-btn">Save and continue</button></li>
                    </ul>
                  </div>
                </div>

              <!-- step3 form内容 -->

              <div class="tab-pane" role="tabpanel" id="step3">
                <h3>Portfolio</h3>
                  <p>This is step 3</p>
                <!-- <form role="form"> -->
                  <div class="tab-content">
                    <div class="tab-pane active" role="tabpanel" id="step3">
                      <div class="container">
                        <!-- <form action="/action_page.php"> -->
                          <div class="row">
                            <div class="col-25">
                              <label for="portfolio">ポートフォリオURL<br>(Git URLでも構いません)</label>
                            </div>
                            <div class="col-75">
                              <input type="text" id="portfolio" name="input_portfolio" placeholder="Your Portfolio URL..">
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-25">
                              <label for="portfolio_name">サービス名</label>
                            </div>
                            <div class="col-75">
                              <input type="text" id="portfolio_name" name="input_portfolio_name" placeholder="Your Portfolio Name..">
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-25">
                              <label for="portfolio_status">開発環境</label>
                            </div>
                            <div class="col-75">
                               <input class="radio-career" type="radio" id="portfolio_status_yes" name="input_portfolio_status" value="team">チーム開発 &emsp;
                                      <input class="radio-career" type="radio" id="portfolio_status_no" name="input_portfolio_status" value="private">個人開発
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-25">
                              <label for="portfolio_name">ポートフォリオコメント</label>
                            </div>
                            <div class="col-75">
                              <textarea id="portfolio_contents" name="subject" placeholder="Write something about Portfolio.."></textarea>
                            </div>
                          </div>
                        <!-- </form> -->
                      </div>
                    </div>

                    <ul class="list-inline pull-right">
                      <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                      <!-- <li><button type="button" class="btn btn-default next-step">Skip</button></li> -->
                      <li><button type="button" class="btn btn-primary btn-info-full next-step" id="next-btn">Save and continue</button></li>
                    </ul>
                  </div>
                </div>

              <!-- step4 form内容 -->
              <div class="tab-pane" role="tabpanel" id="complete">
                <h3>Check Page</h3>
                  <p>以下の内容でよろしいですか？</p>
                <!-- <form role="form"> -->
                  <div class="tab-content">
                    <div class="tab-pane active" role="tabpanel" id="complete">
                      <div class="container">
                        <!-- <form action="/action_page.php"> -->
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
                            <div class="col-75">  <!--要検討事項-->
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
                              <label for="job_offer_comments">求人情報</label>
                            </div>
                            <div class="col-75">
                              <p class="lead" id="result_job_offer_comments">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
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
                              <!-- <p class="advice_check" for="advice2" id="result_advice"></p>
                              <p class="advice_check" for="advice3" id="result_advice"></p>
                              <p class="advice_check" for="advice4" id="result_advice"></p> -->
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
                    <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                    <li><a href="thanks.php"><button type="button" class="btn btn-primary btn-info-full next-step" id="next-btn">complete</button></a></li>
                    
                  </ul>
              </div>
              <!-- <div class="clearfix"></div> -->
            </div>
          </form>
        </div>
      </section>
    </div>
  </div>


<!-- Java script -->

<script type="text/javascript">
$(document).ready(function () {
    //Initialize tooltips
    $('.nav-tabs > li a[title]').tooltip();
    
    //Wizard
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
<script src="assets/js/edit.js"></script>
</body>
</html>
