<div class="tab-pane active" role="tabpanel" id="step1">
  <h3>Basic Infomation</h3>
    <p>This is step 1</p>
  <div class="container">
    <!-- <form action="/action_page.php"> -->
      <div class="row">
        <div class="col-25">
          <label for="name">name</label>
          <span>※必須項目</span>
        </div>
        <div class="col-75">
        <input type="text" id="name" name="input_name" placeholder="Your name.." value="<?php echo isset($signin_user) ? $signin_user["name"] : ''; ?>" required>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="email">email</label>
          <span>※必須項目</span>
        </div>
        <div class="col-75">
          <input type="email" id="email" name="input_email" placeholder="Your email.." value="<?php echo isset($signin_user) ? $signin_user["email"] : ''; ?>" required>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="password">password</label>
          <span>※必須項目</span>
      </div>
        <div class="col-75">
          <input type="password" id="password" name="input_password" placeholder="半角英数字4~16文字、記号は-_/.で入力してください"  required pattern="^([a-zA-Z0-9-_/.]{4,16})$" title="半角英数字4~16文字、記号は-_/.で入力してください">
          <ul style="list-style: none; padding-left: 0;">
            <?php if (isset($signin_user)) :?>
            <li>※パスワードは再入力してください</li>
            <?php endif;?>
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="img_name">プロフィール画像</label>
        </div>
        <div class="col-75 preview">
        <?php if(strpos($_SERVER['REQUEST_URI'], 'edit.php') !== false): ?>
        <img src="assets/img/user_profile_img/<?php echo isset($signin_user) ? $signin_user["img_name"] : ''; ?>" id="img" width="300px">
        <label for="select_img" id="label_select_img">プロフィール画像を変更
          <input type="file" name="input_img_name" id="select_img" style="display: none;">
        </label>
        <?php else: ?>
        <input type="file" name="input_img_name" accept="image/assets/img/user_profile_img/*" id="img_name">
        <?php endif; ?>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="status">ステータス</label>
          <span>※必須項目</span>
        </div>
        <div class="col-75">
          <select id="status" name="input_status" required>
            <option value="" <?php if (isset($signin_user) && $signin_user["status_id"] == "0"){echo "selected";}?>>-</option>
            <option value="1" <?php if (isset($signin_user) && $signin_user["status_id"] == "1"){echo "selected";}?>>在校生</option>
            <option value="2" <?php if (isset($signin_user) && $signin_user["status_id"] == "2"){echo "selected";}?>>卒業生(就活中)</option>
            <option value="3" <?php if (isset($signin_user) && $signin_user["status_id"] == "3"){echo "selected";}?>>卒業生(就職済)</option>
            <option value="4" <?php if (isset($signin_user) && $signin_user["status_id"] == "4"){echo "selected";}?>>フリーランス</option>
            <option value="5" <?php if (isset($signin_user) && $signin_user["status_id"] == "5"){echo "selected";}?>>未入学</option>
          </select>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="batchnumber">batch number</label>
        </div>
        <div class="col-75">
          <input type="text" id="batchnumber" name="input_batchnumber" placeholder="Your batchnumber.." value="<?php echo isset($signin_user) ? $signin_user["batch_number"] : ''; ?>" pattern="\d*" style="width: 30%;">&nbsp;batch
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="period">在籍期間</label>
          <span>※必須項目</span>
        </div>
        <div class="col-75">
          <select id="period" name="input_period" required>
            <option value="" <?php if (isset($signin_user) && $signin_user["term_nexseed_id"] == "0"){echo "selected";}?>>-</option>
            <option value="1" <?php if (isset($signin_user) && $signin_user["term_nexseed_id"] == "1"){echo "selected";}?>>1~4週間</option>
            <option value="2" <?php if (isset($signin_user) && $signin_user["term_nexseed_id"] == "2"){echo "selected";}?>>5~8週間</option>
            <option value="3" <?php if (isset($signin_user) && $signin_user["term_nexseed_id"] == "3"){echo "selected";}?>>8週間以上</option>
          </select>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="course">コース</label>
        </div>
        <div class="col-75">
          <select id="course" name="input_course">
            <option value="" <?php if (isset($signin_user) && $signin_user["course_id"] == "0"){echo "selected";}?>>-</option>
            <option value="1" <?php if (isset($signin_user) && $signin_user["course_id"] == "1"){echo "selected";}?>>webコース</option>
            <option value="2" <?php if (isset($signin_user) && $signin_user["course_id"] == "2"){echo "selected";}?>>iOSコース</option>
            <option value="3" <?php if (isset($signin_user) && $signin_user["course_id"] == "3"){echo "selected";}?>>basicコース</option>
            <option value="4" <?php if (isset($signin_user) && $signin_user["course_id"] == "4"){echo "selected";}?>>wec+iOSコース</option>
          </select>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
         <label for="profile">Profile<br>(卒業後の予定等)</label>
        </div>
        <div class="col-75">
          <textarea id="profile" name="input_profile" placeholder="Write something.."><?php echo isset($signin_user) ? $signin_user["profile"] : ''; ?></textarea>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="facebook">FaceBookアカウント</label>
          <span>※必須項目</span>
        </div>
        <div class="col-75">
          <input type="text" id="fb" name="input_fb" placeholder="https://www.facebook.com/" value="<?php echo isset($signin_user) ? $signin_user["fb_account"] : ''; ?>" required pattern="https://www.facebook.com/.+">
        </div>
      </div>
  </div>
  <ul class="list-inline pull-right">
    <li><button type="button" class="btn btn-primary next-step" id="next-btn" value="Save and continue">Continue</button></li>
  </ul>
</div>

<!-- <script type="text/javascript">
$(document).on('click', '#select_img_button', function() {
     $("#img_button").click();
    });
</script> -->
