<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>BRIDGE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="assets/css/signup/signup.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <link rel="stylesheet" type="text/css" href="assets/css/signup/step1.css">

    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

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
                      <input type="text" id="name" name="input_name" placeholder="Your name..">
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
                          <option value="students">在校生</option>
                          <option value="graduates-jobless">卒業生(就活中)</option>
                          <option value="guraduate">卒業生(就職済)</option>
                          <option value="free">フリーランス</option>
                        </select>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-25">
                        <label for="batchnumber">batch number</label>
                      </div>
                      <div class="col-75">
                        <select id="batch number" name="input_batch_number">
                          <option value="" selected="selected">選択してください</option>
                          <option value="batch48">batch48</option>
                          <option value="batch48">batch48</option>
                          <option value="batch48">batch48</option>
                          <option value="batch48">batch48</option>
                        </select>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-25">
                        <label for="priod">在籍期間</label>
                      </div>
                      <div class="col-75">
                        <select id="priod" name="input_priod">
                          <option value="" selected="selected">選択してください</option>
                          <option value="">1ヶ月未満</option>
                          <option value="">1ヶ月~2ヶ月</option>
                          <option value="">2ヶ月~3ヶ月</option>
                          <option value="">3ヶ月以上</option>
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
                          <option value="web">webコース</option>
                          <option value="iOS">iOSコース</option>
                          <option value="basic">basicコース</option>
                        </select>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-25">
                       <label for="Plofile">Profile<br>(卒業後の予定等)</label>
                      </div>
                      <div class="col-75">
                        <textarea id="subject" name="subject" placeholder="Write something.."></textarea>
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
                              <label for="carrer">職歴</label>
                            </div>
                            <div class="col-75">
                              <input class="radio-career" type="radio" id="carrer" name="carrer" value="Yes">Yes &emsp;
                              <input class="radio-career" type="radio" id="carrer" name="carrer" value="No">No
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
                              <label for="managerial">役職</label>
                            </div>
                            <div class="col-75">
                              <input type="text" id="managerial" name="input_managerial" placeholder="Your managerial..">
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-25">
                              <label for="carrer_period">在籍期間</label>
                            </div>
                            <div class="col-75">
                              <select id="year" name="input_year">
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
                              </select>年&thinsp;

                              <select id="year" name="input_course">
                                <option value="" selected="selected">-</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                                <option>11</option>
                                <option>12</option>
                              </select>月~

                              <select id="year" name="input_year">
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
                              </select>年　&thinsp;

                              <select id="year" name="input_course">
                                <option value="" selected="selected">-</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                                <option>11</option>
                                <option>12</option>
                              </select>月
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-25">
                              <label for="job_status">現在働いている</label>
                            </div>
                            <div class="col-75">
                              <input class="radio-career" type="radio" id="job_status" name="input_job_status" value="Yes">Yes &emsp;
                              <input class="radio-career" type="radio" id="job_status" name="input_job_status" value="No">No
                            </div>
                          </div>
                            <div class="row">
                              <div class="col-25">
                                <label for="job_contents">仕事内容</label>
                              </div>
                              <div class="col-75">
                               <textarea id="subject" name="input_job_content" placeholder="Write your job contents..."></textarea>
                              </div>
                            </div>
                          <div class="row">
                            <div class="col-25">
                              <label for="job_offer">求人の有無</label>
                            </div>
                            <div class="col-75">
                              <input class="radio-career" type="radio" id="job_offer" name="input_job_offer" value="Yes">Yes &emsp;
                              <input class="radio-career" type="radio" id="job_offer" name="input_job_offer" value="No">No
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-25">
                              <label for="job_offer_comments">求人情報</label>
                            </div>
                            <div class="col-75">
                              <textarea id="subject" name="input_job_offer_comments" placeholder="Write job offer contents..."></textarea>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-25">
                              <label for="advice">相談に乗れること</label>
                            </div>
                            <div class="col-75">
                              <input type="checkbox" class="check_box" id="advice1" />
                              <label class="advice_check" for="advice1">就活相談</label>
                              <input type="checkbox" class="check_box" id="advice2" />
                              <label class="advice_check" for="advice2">業界分析</label>
                              <input type="checkbox" class="check_box" id="advice3" />
                              <label class="advice_check" for="advice3">企業研究</label>
                              <input type="checkbox" class="check_box" id="advice4" />
                              <label class="advice_check" for="advice4">自己分析</label>
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
                              <input type="text" id="portfolio" name="input_portfolio_name" placeholder="Your Portfolio Name..">
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-25">
                              <label for="portfolio_status">開発環境</label>
                            </div>
                            <div class="col-75">
                               <input class="radio-career" type="radio" id="portfolio_status" name="input_portfolio_status" value="Yes">チーム開発 &emsp;
                                      <input class="radio-career" type="radio" id="portfolio_status" name="input_portfolio_status" value="No">個人開発
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-25">
                              <label for="portfolio_name">ポートフォリオコメント</label>
                            </div>
                            <div class="col-75">
                              <textarea id="subject" name="subject" placeholder="Write something about Portfolio.."></textarea>
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
                              ここに入力情報を表示？
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
</body>
</html>
