<?php if(strpos($_SERVER['REQUEST_URI'], 'edit.php') !== false): ?>
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
                <label for="carrer_period">在籍期間</label>
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
            <?php endif; ?>
    <ul class="list-inline pull-right">
      <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
      <li><a href="post.php"><button type="submit" class="btn btn-primary btn-info-full next-step" id="next-btn">complete</button></a></li>
      
    </ul>
   </div>