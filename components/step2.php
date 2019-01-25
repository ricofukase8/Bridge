<?php
  require('get_userdata.php');


 ?>

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
              <label><input class="radio-career" type="radio" id="career" name="input_career" value="1"
              <?php if (isset($signin_user) && $signin_user["career"]=="1"): ?>
                checked="checked"
              <?php endif ?>
                >Yes</label>
              <label><input class="radio-career" type="radio" id="career" name="input_career" value="2" 
              <?php if (isset($signin_user) && $signin_user["career"]=="2"): ?>
                checked="checked"
              <?php endif ?>
              >No</label>
            </div>
          </div>

          <div class="row">
            <div class="col-25">
              <label for="company_name">会社名</label>
            </div>
            <div class="col-75">
              <input type="text" id="company_name" name="input_company_name" placeholder="Your company name.." value="<?php echo isset($signin_user) ? $signin_user["company_name"] : ''; ?>">
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="position">役職</label>
            </div>
            <div class="col-75">
              <input type="text" id="position" name="input_position" placeholder="Your position.." value="<?php echo isset($signin_user) ? $signin_user["position"] : ''; ?>">
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="carrer_period">在籍期間</label>
            </div>
            <div class="col-75">
              <select id="select_box_year" name="input_career_year" >
                  <option value="" selected="selected">-</option>
                  <?php foreach(range(2000,2030) as $year): ?>
                  <option value="<?=$year?>" <?php if (isset($signin_user) && $year == $signin_user["term_company_year"]){echo "selected";}?>><?=$year?></option>
                  <?php endforeach; ?>
              </select>年&thinsp;

              <select id="select_box_month" name="input_career_month">
                <option value="" selected="selected">-</option>
                <?php foreach(range(1,12) as $month): ?>
                <option value="<?=str_pad($month,2,0,STR_PAD_LEFT)?>" <?php if (isset($signin_user) && $month == $signin_user["term_company_month"]){echo "selected";}?>><?=$month?></option>
                <?php endforeach; ?>
              </select>月~

              <select id="select_box_year_end" name="input_career_year_end">
                  <option value="" selected="selected">-</option>
                  <?php foreach(range(2000,2030) as $year_end): ?>
                  <option value="<?=$year_end?>" <?php if (isset($signin_user) && $year_end == $signin_user["term_company_year_end"]){echo "selected";}?>><?=$year_end?></option>
                  <?php endforeach; ?>
              </select>年　&thinsp;

              <select id="select_box_month_end" name="input_career_month_end">
                <option value="" selected="selected">-</option>
                <?php foreach(range(1,12) as $month_end): ?>
                <option value="<?=str_pad($month,2,0,STR_PAD_LEFT)?>" <?php if (isset($signin_user) && $month_end == 
                $signin_user["term_company_month_end"]){echo "selected";}?>><?=$month_end?></option>
                <?php endforeach; ?>
              </select>月
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="job_status">現在働いている</label>
            </div>
            <div class="col-75">
              <label><input class="radio-career" type="radio" id="job_status_yes" name="input_job_status" value="1" 
              <?php if (isset($signin_user) && $signin_user["job_status"]=="1"): ?>
              checked="checked"
              <?php endif ?>
              >Yes</label>
              <label><input class="radio-career" type="radio" id="job_status_no" name="input_job_status" value="2"
              <?php if (isset($signin_user) && $signin_user["job_status"]=="2"): ?>
              checked="checked"
              <?php endif ?>
              >No</label>
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="job_contents">仕事内容</label>
            </div>
            <div class="col-75">
             <textarea id="job_contents" name="input_job_content" placeholder="Write your job contents..."><?php echo isset($signin_user) ? $signin_user["job_contents"] : ''; ?></textarea>
            </div>
          </div>
          <!-- 職歴2 -->
          <?php if(strpos($_SERVER['REQUEST_URI'], 'edit.php') !== false): ?>
            <div id="icon">
              <a id="panel-btn"><span id="panel-btn-icon"></span></a>
            </div>

             <div id="company-toggle">
              <div class="row">
              <div class="col-25">
                <label for="career">職歴2</label>
              </div>
              <div class="col-75">
                <input class="radio-career" type="radio" id="career_yes_2" name="input_career_2" value="1">Yes &emsp;
                <input class="radio-career" type="radio" id="career_no_2" name="input_career_2" value="2">No
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
                <input class="radio-career" type="radio" id="job_status_yes_2" name="input_job_status_2" value="1">Yes &emsp;
                <input class="radio-career" type="radio" id="job_status_no_2" name="input_job_status_2" value="2">No
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
          <?php endif; ?>

          <div class="row">
            <div class="col-25">
              <label for="job_offer">求人の有無</label>
            </div>
            <div class="col-75">
              <label><input class="radio-career" type="radio" id="job_offer_yes" name="input_job_offer" value="1"
              <?php if (isset($signin_user) && $signin_user["job_offer"]=="1"): ?>
              checked="checked"
              <?php endif ?>
              >Yes</label>
              <label><input class="radio-career" type="radio" id="job_offer_no" name="input_job_offer" value="2"
              <?php if (isset($signin_user) && $signin_user["job_offer"]=="2"): ?>
              checked="checked"
              <?php endif ?>
              >No</label>
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="job_offer_contents">求人情報</label>
            </div>
            <div class="col-75">
              <textarea id="job_offer_contents" name="input_job_offer_contents" placeholder="Write job offer contents..."><?php echo isset($signin_user) ? $signin_user["offer_contents"] : ''; ?></textarea>
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="advice">相談に乗れること</label>
            </div>
            <div class="checkbox">
              <?php foreach ($advices as $v): ?>
                <input type="checkbox" class="check_box" id="advice<?php echo $v['id'] ?>" name="advice[]" value="<?php echo $v['id'] ?>">
                <label class="advice_check" for="advice<?php echo $v['id'] ?>" ><?php echo $v['advice_id'] ?></label>
              <?php endforeach; ?>
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