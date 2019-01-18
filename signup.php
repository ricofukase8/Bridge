<?php
session_start();
// require('dbconnect.php');

// $name="";
// if (!empty($_POST)) {
//   $_SESSION["bridge2"]["name"]=$name;

// }

// var_dump($_POST);
// $name="";


// $_SESSION["48_LearnSNS"]["name"]=$_POST["input_name"];
// $file_name="";





?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>BRIDGE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">


    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/css/signup/step1.css">
    <link rel="stylesheet" type="text/css" href="assets/css/signup/signup.css">

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
          <?php include('components/wizard.php');?>

          <form method="POST" action="post.php" enctype="multipart/form-data">
            <div class="tab-content">
              <?php include('components/step1.php');?>
              <?php include('components/step2.php');?>
              <?php include('components/step3.php');?>
              <?php include('components/step4.php');?>
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

<script src="assets/js/signup.js"></script>
</body>
</html>
