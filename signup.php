<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Form wizard (using tabs) - Bootsnipp.com</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="signup.css">

    <link rel="stylesheet" type="text/css" href="step1.css">
    <link rel="stylesheet" type="text/css" href="step2.css">

    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    
</head>
<body>
  <div id="top" class="jumbotron">
    <div class="container">
      <h1 class="title">BRIDGE<br>-NexSeed-</h1>
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
                    <i class="glyphicon glyphicon-folder-open"></i>
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
                    <i class="glyphicon glyphicon-picture"></i>
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
                <div class="container">
                  <form action="/action_page.php">
                    <div class="row">
                      <div class="col-25">
                        <label for="fname">name</label>
                      </div>
                      <div class="col-75">
                      <input type="text" id="fname" name="firstname" placeholder="Your name..">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-25">
                        <label for="email">email</label>
                      </div>
                      <div class="col-75">
                        <input type="email" id="email" name="email" placeholder="Your email..">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-25">
                        <label for="password">password</label>
                    </div>
                      <div class="col-75">
                        <input type="password" id="password" name="password" placeholder="Your password..">
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
                        <label for="batchnumber">コース</label>
                      </div>
                      <div class="col-75">
                        <select id="batch number" name="batch number">
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
                        <select id="batch number" name="batch number">
                          <option value="australia">batch48</option>
                          <option value="canada">batch48</option>
                          <option value="usa">batch48</option>
                          <option value="usa">batch48</option>
                        </select>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-25">
                        <label for="batchnumber">在籍期間</label>
                      </div>
                      <div class="col-75">
                        <select id="batch number" name="batch number">
                          <option value="australia">1ヶ月未満</option>
                          <option value="canada">1ヶ月~2ヶ月</option>
                          <option value="usa">2ヶ月~3ヶ月</option>
                          <option value="usa">3ヶ月以上</option>
                        </select>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-25">
                        <label for="batchnumber">コース</label>
                      </div>
                      <div class="col-75">
                        <select id="batch number" name="batch number">
                          <option value="australia">webコース</option>
                          <option value="canada">iOSコース</option>
                          <option value="usa">basicコース</option>
                        </select>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-25">
                       <label for="Plofile">Plofile<br>(卒業後の予定等)</label>
                      </div>
                      <div class="col-75">
                        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-25">
                        <label for="facebook">FaceBookアカウント</label>
                      </div>
                      <div class="col-75">
                        <input type="text" id="fb" name="fb" placeholder="Your FBaccount..">
                      </div>
                    </div>
                  </form>
                </div>
                <ul class="list-inline pull-right">
                  <li><button type="button" class="btn btn-primary next-step">Save and continue</button></li>
                </ul>
              </div>

              <!-- step2 form内容 -->
              <div class="tab-pane" role="tabpanel" id="step2">
                <form role="form">
                  <div class="tab-content">
                    <div class="tab-pane active" role="tabpanel" id="step2">
                      <div class="container">
                        <form action="/action_page.php">
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
                              <label for="company-name">会社名</label>
                            </div>
                            <div class="col-75">
                              <input type="text" id="company-name" name="company-name" placeholder="Your company name..">
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-25">
                              <label for="password">役職</label>
                            </div>
                            <div class="col-75">
                              <input type="text" id="managerial" name="managerial" placeholder="Your managerial..">
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
                              <label for="batchnumber">コース</label>
                            </div>
                            <div class="col-75">
                              <select id="batch number" name="batch number">
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
                                <select id="batch number" name="batch number">
                                  <option value="australia">batch48</option>
                                  <option value="canada">batch48</option>
                                  <option value="usa">batch48</option>
                                  <option value="usa">batch48</option>
                                </select>
                              </div>
                            </div>
                          <div class="row">
                            <div class="col-25">
                              <label for="batchnumber">在籍期間</label>
                            </div>
                            <div class="col-75">
                              <select id="batch number" name="batch number">
                                <option value="australia">1ヶ月未満</option>
                                <option value="canada">1ヶ月~2ヶ月</option>
                                <option value="usa">2ヶ月~3ヶ月</option>
                                <option value="usa">3ヶ月以上</option>
                              </select>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-25">
                              <label for="batchnumber">コース</label>
                            </div>
                            <div class="col-75">
                              <select id="batch number" name="batch number">
                                <option value="australia">webコース</option>
                                <option value="canada">iOSコース</option>
                                <option value="usa">basicコース</option>
                              </select>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-25">
                             <label for="Plofile">Plofile<br>(卒業後の予定等)</label>
                            </div>
                            <div class="col-75">
                              <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-25">
                              <label for="facebook">FaceBookアカウント</label>
                            </div>
                            <div class="col-75">
                              <input type="text" id="fb" name="fb" placeholder="Your FBaccount..">
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>

                    <ul class="list-inline pull-right">
                        <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                        <li><button type="button" class="btn btn-primary next-step">Save and continue</button></li>
                    </ul>
                  </div>
                </div>

              <!-- step3 form内容 -->
              <div class="tab-pane" role="tabpanel" id="step3">
                  <h3>Step 3</h3>
                  <p>This is step 3</p>
                  <ul class="list-inline pull-right">
                      <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                      <li><button type="button" class="btn btn-default next-step">Skip</button></li>
                      <li><button type="button" class="btn btn-primary btn-info-full next-step">Save and continue</button></li>
                  </ul>
              </div>

              <!-- step4 form内容 -->
              <div class="tab-pane" role="tabpanel" id="complete">
                <h3>Complete</h3>
                <p>You have successfully completed all steps.</p>
              </div>
              <div class="clearfix"></div>
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
