
<div class="tab-pane" role="tabpanel" id="step2">
<h3>Job Infomation</h3>
  <p>This is step 2</p>
  <div class="tab-content">
    <div class="tab-pane active" role="tabpanel" id="step2">
      <div class="container">
          <div class="row">
            <div class="col-25">
              <label for="career">職歴</label>
            </div>
            <div class="col-75" >
              <label><input class="radio-career" type="radio" id="career" name="input_career" value="1" checked
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
              <label for="company_name" class="step2_label">会社名</label>
            </div>
            <div class="col-75">
              <input type="text" id="company_name" name="input_company_name" placeholder="Your company name.." value="<?php echo isset($signin_user) ? $signin_user["company_name"] : ''; ?>" class="step2_form" required>
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="position" class="step2_label">役職</label>
            </div>
            <div class="col-75">
              <input type="text" id="position" name="input_position" placeholder="Your position.." value="<?php echo isset($signin_user) ? $signin_user["position"] : ''; ?>" class="step2_form">
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="carrer_period" class="step2_label">在籍期間</label>
            </div>
            <div class="col-75" required>
              <select id="select_box_year" name="input_career_year" class="step2_form">
                  <option value="" selected="selected">-</option>
                  <?php foreach(range(2000,2030) as $year): ?>
                  <option value="<?=$year?>" <?php if (isset($signin_user) && $year == $signin_user["term_company_year"]){echo "selected";}?>><?=$year?></option>
                  <?php endforeach; ?>
              </select>年&thinsp;

              <select id="select_box_month" name="input_career_month" class="step2_form">
                <option value="" selected="selected">-</option>
                <?php foreach(range(1,12) as $month): ?>
                <option value="<?=str_pad($month,2,0,STR_PAD_LEFT)?>" <?php if (isset($signin_user) && $month == $signin_user["term_company_month"]){echo "selected";}?>><?=$month?></option>
                <?php endforeach; ?>
              </select>月~

              <select id="select_box_year_end" name="input_career_year_end" class="step2_form">
                  <option value="" selected="selected">-</option>
                  <?php foreach(range(2000,2030) as $year_end): ?>
                  <option value="<?=$year_end?>" <?php if (isset($signin_user) && $year_end == $signin_user["term_company_year_end"]){echo "selected";}?>><?=$year_end?></option>
                  <?php endforeach; ?>
              </select>年　&thinsp;

              <select id="select_box_month_end" name="input_career_month_end" class="step2_form">
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
              <label for="job_status" class="step2_label">現在働いている</label>
            </div>
            <div class="col-75">
              <label><input class="radio-career step2_form" type="radio" id="job_status_yes" name="input_job_status" value="1"
              <?php if (!isset($signin_user)) :?>
                checked
              <?php endif;?>
              <?php if (isset($signin_user) && $signin_user["job_status"]=="1"): ?>
              checked="checked"
              <?php endif ?>
              >Yes</label>
              <label><input class="radio-career step2_form" type="radio" id="job_status_no" name="input_job_status" value="2"
              <?php if (isset($signin_user) && $signin_user["job_status"]=="2"): ?>
              checked="checked"
              <?php endif ?>
              >No</label>
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="job_contents" class="step2_label">仕事内容</label>
            </div>
            <div class="col-75">
             <textarea id="job_contents" name="input_job_content" placeholder="Write your job contents..." class="step2_form"><?php echo isset($signin_user) ? $signin_user["job_contents"] : ''; ?></textarea>
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="job_offer" class="step2_label">求人の有無</label>
            </div>
            <div class="col-75">
              <label><input class="radio-career step2_form" type="radio" id="job_offer_yes" name="input_job_offer" value="1"
              <?php if (isset($signin_user) && $signin_user["job_offer"]=="1"): ?>
              checked="checked"
              <?php endif; ?>
              >Yes</label>
              <label><input class="radio-career step2_form" type="radio" id="job_offer_no" name="input_job_offer" value="2"
               <?php if (!isset($signin_user)): ?>
                 checked
               <?php endif; ?>
              <?php if (isset($signin_user) && $signin_user["job_offer"]=="2"): ?>
              checked="checked"
              <?php endif; ?>
              >No</label>
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="job_offer_contents" id="label_job_offer_contents" 
              <?php if (!isset($signin_user)): ?>
              class="disabled"
              <?php endif; ?>

              <?php if (isset($signin_user) && $signin_user["job_offer"] == "2"): ?>
              class="disabled"
              <?php endif; ?>
              >求人情報</label>
            </div>
            <div class="col-75">
              <textarea id="job_offer_contents" name="input_job_offer_contents" placeholder="Write job offer contents..."
              <?php if (isset($signin_user) && $signin_user["job_offer"] == "2"): ?>
              disabled
              <?php endif; ?>
              ><?php echo isset($signin_user) ? $signin_user["offer_contents"] : ''; ?></textarea>
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="advice" class="step2_label">相談に乗れること</label>
            </div>
            <div class="checkbox">
              <?php foreach ($advices as $v): ?>
                <input type="checkbox" class="check_box step2_form" id="advice<?php echo $v['id'] ?>" name="advice[]" value="<?php echo $v['id'] ?>"
                <?php if (isset($signin_user) && array_search($v["id"], $selected_advices) !== false): ?>
                  checked = "checked"
                <?php endif; ?>
                >
                <label class="advice_check step2_form" for="advice<?php echo $v['id'] ?>" ><?php echo $v['advice_id'] ?></label>
              <?php endforeach; ?>
            </div>
          </div>
      </div>
    </div>

    <ul class="list-inline pull-right">
        <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
        <li><button type="button" class="btn btn-primary next-step" id="next-btn">Continue</button></li>
    </ul>
  </div>
</div>