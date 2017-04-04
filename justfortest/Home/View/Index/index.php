<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="keywords" content="">
    <meta name="description" content=""> 
    <title>CoolBox_主页</title>
    <link rel="stylesheet" href="<?php echo HOME_CSS_URL;?>/style.css" type="text/css" />
</head>
<body>
	<div id="main">
		<div id="header">
			<ul class="nav container">
				<li>
					<figure class="logo">
						<img src="<?php echo HOME_IMAGES_URL;?>/logo.png" />
					</figure>
				</li>
				<div class="nav-list">
					<figure id="nav-list-btn">
						<img src="<?php echo HOME_IMAGES_URL;?>/navbtn.png" />
					</figure>
					<div id="nav-option">
						<li><a href="/">主页</a></li>
						<li><a href="#">个人空间</a></li>
						<li><a href="#">关于</a></li>
						<li><a href="__MODULE__/user/register">登录/注册</a></li>
					</div>
				</div>
			</ul>
		</div>
		
		<div id="content" class="container">		
		</div>
		
		<div id="footer" class="container">
			<span>©版权所有及技术支持：Web联盟</span> 
			<a href="./index.php">网站首页</a> <a href="#">管理入口</a>
		</div>
	</div>
	
	<script src="<?php echo HOME_JS_URL;?>/jquery-1.12.3.min.js"></script>
	<script src="<?php echo HOME_JS_URL;?>/main.js"></script>
</body>
</html>