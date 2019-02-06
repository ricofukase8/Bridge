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
                        <p class="lead" id="result_status"><?php echo $signin_user['status']; ?></p>
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
                        <p class="lead"  id="result_period"><?php echo $signin_user['term']; ?></p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-25">
                        <label for="course">コース</label>
                      </div>
                      <div class="col-75">
                        <p class="lead" id="result_course"><?php echo $signin_user['course']; ?></p>
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
                          <?php if ($signin_user['career'] == 1): ?>
                          <p class="lead" id="result_career">Yes</p>
                          <?php elseif ($signin_user['career'] == 2): ?>
                          <p class="lead" id="result_career">No</p>
                          <?php endif; ?>
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
                        <ul class="career_period" color="#878787">
                          <li class="lead" id="result_career_year"><?php echo $signin_user['term_company_year']; ?>年</li>
                          <li class="lead" id="result_career_month"><?php echo $signin_user['term_company_month']; ?>月〜</li>
                          <li class="lead" id="result_career_year_end"><?php echo $signin_user['term_company_year_end']; ?>年</li>
                          <li class="lead" id="result_career_month_end"><?php echo $signin_user['term_company_month_end']; ?>月</li>
                        </ul>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-25">
                        <label for="job_status">現在働いている</label>
                      </div>
                      <div class="col-75">
                          <?php if ($signin_user['job_status'] == 1): ?>
                          <p class="lead" id="result_job_status">Yes</p>
                          <?php elseif ($signin_user['job_status'] == 2): ?>
                          <p class="lead" id="result_job_status">No</p>
                          <?php endif; ?>
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
                          <?php if ($signin_user['job_offer'] == 1): ?>
                          <p class="lead" id="result_job_offer">Yes</p>
                          <?php elseif ($signin_user['job_offer'] == 2): ?>
                          <p class="lead" id="result_job_offer">No</p>
                          <?php endif; ?>
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
                        <p class="lead" for="advice1" id="result_advice">
                          <?php if(isset($signin_user['advices'])): ?>
                            <?php foreach ($signin_user['advices'] as $advice): ?>
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
                        <a href="<?php echo $signin_user['portfolio_url']; ?>"><p class="lead" id="result_portfolio"><?php echo $signin_user['portfolio_url']; ?></p></a>
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
                          <?php if ($signin_user['portfolio_status'] == 1): ?>
                          <p class="lead" id="result_portfolio_status">チーム開発</p>
                          <?php elseif ($signin_user['portfolio_status'] == 2): ?>
                          <p class="lead" id="result_portfolio_status">個人開発</p>
                          <?php endif; ?>
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