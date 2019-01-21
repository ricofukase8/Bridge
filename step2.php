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
              <input class="radio-career" type="radio" id="career-yes" name="career" value="Yes">Yes &emsp;
              <input class="radio-career" type="radio" id="career-no" name="career" value="No">No
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
              <label for="carrer_period">在籍期間</label>
            </div>
            <div class="col-75">
              <select id="select_box_year" name="input_career_year">
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

              <select id="select_box_month" name="input_career_month">
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

              <select id="select_box_year_end" name="input_career_year_end">
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

              <select id="select_box_month_end" name="input_career_month_end">
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
              <input class="radio-career" type="radio" id="job_status_yes" name="job_status" value="Yes">Yes &emsp;
              <input class="radio-career" type="radio" id="job_status_no" name="job_status" value="No">No
            </div>
          </div>
            <div class="row">
              <div class="col-25">
                <label for="job_contents">仕事内容</label>
              </div>
              <div class="col-75">
               <textarea id="job_contents" name="input_job_content" placeholder="Write your job contents..."></textarea>
              </div>
            </div>
          <div class="row">
            <div class="col-25">
              <label for="job_offer">求人の有無</label>
            </div>
            <div class="col-75">
              <input class="radio-career" type="radio" id="job_offer_yes" name="job_offer" value="Yes">Yes &emsp;
              <input class="radio-career" type="radio" id="job_offer_no" name="job_offer" value="No">No
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="job_offer_contents">求人情報</label>
            </div>
            <div class="col-75">
              <textarea id="job_offer_contents" name="input_job_offer_contents" placeholder="Write job offer contents..."></textarea>
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="advice">相談に乗れること</label>
            </div>
            <div class="checkbox">
              <input type="checkbox" class="check_box" id="advice1" name="advice[]" value="1">
              <label class="advice_check" for="advice1" >就活相談</label>
              <input type="checkbox" class="check_box" id="advice2" name="advice[]" value="業界分析">
              <label class="advice_check" for="advice2">業界分析</label>
              <input type="checkbox" class="check_box" id="advice3" name="advice[]" value="企業分析">
              <label class="advice_check" for="advice3">企業研究</label>
              <input type="checkbox" class="check_box" id="advice4" name="advice[]" value="自己分析">
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