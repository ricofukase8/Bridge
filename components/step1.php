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
        <input type="text" id="name" name="input_name" placeholder="Your name.." value="<?php echo isset($signin_user) ? $signin_user[0] : ''; ?>"> 
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
          <label for="period">在籍期間</label>
        </div>
        <div class="col-75">
          <select id="period" name="input_period">
            <option value="" selected="selected">選択してください</option>
            <option value="1">1~4週間</option>
            <option value="2">5~8週間</option>
            <option value="3">8週間以上</option>
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
            <option value="4">wec+iOSコース</option>
          </select>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
         <label for="profile">Profile<br>(卒業後の予定等)</label>
        </div>
        <div class="col-75">
          <textarea id="profile" name="input_profile" placeholder="Write something.."></textarea>
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
  </div>
  <ul class="list-inline pull-right">
    <li><button type="button" class="btn btn-primary next-step" id="next-btn" value="Save and continue">Save and continue</button></li>
  </ul>
</div>