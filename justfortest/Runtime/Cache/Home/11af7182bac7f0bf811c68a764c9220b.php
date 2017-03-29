<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="keywords" content="">
    <meta name="description" content=""> 
    <title></title>
    <link rel="stylesheet" href="<?php echo HOME_CSS_URL;?>/style.css" type="text/css" />
</head>
<body>
	
	<form class="temp-form" id="login-form" action="/git/index.php/Home/user/login" method="POST">
		<h1>登录</h1>
		<p>
			<label for="user-id">账号：</label><input id="user-id" name="user_name" type="text" required />
		</p>
		<p>
			<label for="user-psw">密码：</label><input id="user-psw" name="user_pwd" type="password" required />
		</p>
		<p class="btn-line">
			<input class="change-btn" type="button" value="注册" />
			<input class="submit-btn" type="submit" value="提交" />
		</p>
	</form>
	
	<form class="temp-form" id="register-form" action="/git/index.php/Home/user/register" method="POST">
		<h1>注册</h1>
		<p>
			<label for="user-id">账号：</label><input id="user-id" name="user_name" type="text" required />
		</p>
		<p>
			<label for="user-psw">密码：</label><input id="user-psw" name="user_pwd" type="password" required />
		</p>
		<p>
			<label for="user-psw">公钥：</label>
			<textarea name="user_pub" required ></textarea>
		</p>
		<p class="btn-line">
			<input class="change-btn" type="button" value="登录" />
			<input class="submit-btn" type="submit" value="提交" />
		</p>
	</form>
	
	<script src="<?php echo HOME_JS_URL;?>/jquery-1.12.3.min.js"></script>
	<script src="<?php echo HOME_JS_URL;?>/main.js"></script>
</body>
</html>