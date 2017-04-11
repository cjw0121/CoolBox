<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="keywords" content="">
    <meta name="description" content=""> 
    <title>CoolBox_注册登录页面</title>
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
						<li><a href="/MyGitHub/CoolBox/justfortest/index.php/Home/user/register">登录/注册</a></li>
					</div>
				</div>
			</ul>
		</div>
		
		<div id="content" class="container">
			<form class="form" id="login-form" action="/MyGitHub/CoolBox/justfortest/index.php/Home/user/login" method="POST">
				<h1>登录</h1>
				<p>
					<label for="user-id">账号：</label><input id="login-id" name="user_name" type="text" />
				</p>
				<p>
					<label for="user-psw">密码：</label><input id="login-psw" name="user_pwd" type="password" />
				</p>
				<p class="btn-line">
					<input class="change-btn" type="button" value="切换注册" />
					<input class="submit-btn" type="submit" value="确定" />
				</p>
			</form>
			
			<form class="form" id="register-form" action="/MyGitHub/CoolBox/justfortest/index.php/Home/user/register" method="POST">
				<h1>注册</h1>
				<p>
					<label for="user-id">账号：</label><input id="register-id" name="user_name" type="text" />
				</p>
				<p>
					<label for="user-psw">密码：</label><input id="register-psw" name="user_pwd" type="password" />
				</p>
				<p>
					<label for="user-psw">邮箱：</label><input id="register-email" name="user_email" type="text" />
				</p>
				<p class="btn-line">
					<input class="change-btn" type="button" value="切换登录" />
					<input class="submit-btn" type="submit" value="提交" />
				</p>
			</form>
		
		</div>
		
		<div id="footer" class="container">
			<span>©版权所有及技术支持：Web联盟</span><br />
			<a href="./index.php">网站首页</a> <a href="#">管理入口</a>
		</div>
	</div>

	<script src="<?php echo HOME_JS_URL;?>/jquery-1.12.3.min.js"></script>
	<script src="<?php echo HOME_JS_URL;?>/main.js"></script>
</body>
</html>