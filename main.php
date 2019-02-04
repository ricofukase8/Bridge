<!DOCTYPE html>
<html>
<head>
	<title>Bridge main</title>
	<meta charset="utf-8">
		<link rel="stylesheet" href="assets/css/main/style.css">
		<link href="https://fonts.googleapis.com/css?family=Montserrat+Subrayada:400,700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>

<body>
	<div class="parallax-bg">
		<div class="parallax-bg-title">
		<h1">BRIDGE</h1>
		<p>NexSeed</p>
		</div>
	</div>

	<div class="scrollbox"><h3>エンジニアを目指す、NexSeedエンジニア生のための、OBOG訪問サイト。</h3><br>
		<div class="index-btn-group">
			<a class="index-btn-group-1" href="signup.php">
				<button type="button" class="btn btn-info round" style="padding-left: 40px; padding-right: 40px; padding-top: 10px; padding-bottom: 10px;">SIGN UP</button>
			</a>
			<a class="index-btn-group-2" href="signin.php">
				<button type="button" class="btn btn-info round" style="padding-left: 40px; padding-right: 40px; padding-top: 10px; padding-bottom: 10px;">LOG IN</button>
			</a>
		</div>
	</div>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="assets/jquery/jquery.stellar.min.js"></script>
<script type="text/javascript">
	$(function(){
    $('.scrollbox').css({
        left: "-50px",
        opacity: "0"
    });

    setTimeout(function() {
        $(".scrollbox").animate({
            left:"50px",
            opacity:"1.0"
        }, 2000);
    }, 1100);
});
</script>

</body>
</html>