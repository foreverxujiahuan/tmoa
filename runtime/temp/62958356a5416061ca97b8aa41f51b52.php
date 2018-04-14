<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:89:"E:\phpstudy\phpStudy_2016.11.03\WWW\tmoa\public/../application/user\view\email\index.html";i:1523067554;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<title>邮件发送系统</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<!-- //for-mobile-apps -->
<link href="/static/user/email/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="/static/user/email/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="">
<!-- js -->
<script src="/static/user/email/js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<!-- login-pop-up -->
<script src="/static/user/email/js/menu_jquery.js"></script>
<!-- //login-pop-up -->
<!-- animation-effect -->
<link href="/static/user/email/css/animate.min.css" rel="stylesheet"> 
<script src="/static/user/email/js/wow.min.js"></script>
<!-- //animation-effect -->
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
</head>
	
<body>
<!-- header -->
<div class="header-top">
	<div class="container">
		<div class="header-top-left animated wow slideInLeft" data-wow-delay=".5s">
			<p>Welcome to TMOA</p>
		</div>
		<div class="header-top-left1 animated wow slideInLeft" data-wow-delay=".7s">
			<h1>Email-system<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></h1>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>
<!-- //header -->
<!-- banner -->
	<div class="banner">
		<div class="banner-pos banner1">
			<div class="container">
				<div class="banner-info animated wow slideInUp" data-wow-delay=".5s">
				</div>
			</div>
			<div class="banner-posit animated wow zoomIn" data-wow-delay=".5s">
				<form action="<?php echo url('user/email/email'); ?>" method="post">
				<h2><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>邮件发送系统</h2>
				<div class="reservation">
					<div class="book_date" style="margin-top:1rem;">
							<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
							<input class="date" id="datepicker" type="text" value="" onfocus="this.value = '';" required="" placeholder="收件人邮箱" name="c_email">
					</div>	
					 <div class="book_date" style="margin-top:2rem;">
							   <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
							   <input class="date" id="datepicker" type="text" value="" onfocus="this.value = '';"  required="" placeholder="收件人姓名" name="c_name">
					   </div>	
					 <div class="book_date" style="margin-top:2rem;">
							
							   <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
							   <input class="date" id="datepicker" type="text" value="" onfocus="this.value = '';"  required="" placeholder="邮箱标题" name="c_title">
							
					   </div>	
					<div class="book" style="margin-top:2rem;">
							<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><textarea value="Message:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '请输入邮件内容';}" name="c_text">请输入邮件内容</textarea>
							<input type="submit" value="发送邮件">
					</div>
				</div>
				</form>
			</div>
		</div>	
	</div>
	<div class="footer-copy" style="margin-bottom:0px">
		<div class="container">	
			<div class="footer-left animated wow slideInUp" data-wow-delay=".5s" style="color:white">
					<br>
					Powered by TMOA</a>
					<br>
					制作时间:2018-4-5
					<br>
					核心开发技术：ThinkPHP5 bootstrap font-awesome lanmp 
			</div>
			<div class="footer-right animated wow slideInUp" data-wow-delay=".7s">
				<ul>
					<li><a href="#" class="p"> </a></li>
					<li><a href="#" class="facebook"> </a></li>
					<li><a href="#" class="in"> </a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //footer -->
<!-- for bootstrap working -->
	<script src="/static/user/email/js/bootstrap.js"></script>
<!-- //for bootstrap working -->
</body>
</html>