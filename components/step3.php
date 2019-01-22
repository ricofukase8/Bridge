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
                <label><input class="radio-career" type="radio" id="portfolio_status_yes" name="input_portfolio_status" value="1">チーム開発</label> &emsp;
                <label><input class="radio-career" type="radio" id="portfolio_status_no" name="input_portfolio_status" value="2">個人開発</label>
              </div>
            </div>
            <div class="row">
              <div class="col-25">
                <label for="portfolio_contents">ポートフォリオコメント</label>
              </div>
              <div class="col-75">
                <textarea id="portfolio_contents" name="input_portfolio_contents" placeholder="Write something about Portfolio.."></textarea>
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