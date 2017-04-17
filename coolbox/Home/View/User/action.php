<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="keywords" content="">
    <meta name="description" content=""> 
    <title>CoolBox_注册登录页面</title>
    <link rel="stylesheet" href="<?PHP echo HOME_CSS_URL;?>/style.css" type="text/css" />
</head>
<body>
	<div id="main">
		<div id="header">
			<ul class="nav container">
				<li>
					<figure class="logo">
						<img src="<?PHP echo HOME_IMAGES_URL;?>/logo.png" />
					</figure>
				</li>
				<div class="nav-list">
					<span id="nav-list-btn" class="icon-align-justify"></span>
					<div id="nav-option">
							<li><a href="__MODULE__/Index/index">主页</a></li>
							<li><a href="__MODULE__/User/center">个人空间</a></li>
							<li><a href="__MODULE__/Index/about">关于</a></li>
							<li id="major-option"><a class="right" href="__MODULE__/User/action">登录/注册</a></li>						
					</div>
				</div>
			</ul>
		</div>
		
		<div id="content" class="container">

			<!-- 登录表单 -->
			<div class="form" id="login-form" action="__MODULE__/User/action" method="POST">
				<h1>登录</h1>
				<p>
					<label for="user-name">账号：</label><input id="login-name" name="user_name" type="text" />
				</p>
				<p>
					<label for="user-psw">密码：</label><input id="login-psw" name="user_psw" type="password" />
				</p>
				<p class="btn-line">
					<input class="change-btn" type="button" value="切换注册" />
					<input id="login-btn" class="submit-btn" type="button" value="确定" />
				</p>
			</div>
			
			<!-- 注册表单 -->
			<div class="form" id="register-form" action="__MODULE__/User/action" method="POST">
				<h1>注册</h1>
				<p>
					<label for="register-name">账号：</label><input id="register-name" name="user_name" type="text" />
				</p>
				<p>
					<label for="register-psw">密码：</label><input id="register-psw" name="user_psw" type="password" />
				</p>
				<p>
					<label for="register-email">邮箱：</label><input id="register-email" name="user_email" type="text" />
				</p>
				<p class="btn-line">
					<input class="change-btn" type="button" value="切换登录" />
					<input id="register-btn" class="submit-btn" type="button" value="提交" />
				</p>
			</div>
		
		</div>
		
		<div id="footer" class="container">
			<span>©版权所有及技术支持：Web联盟</span><br/>
			<a href="__ROOT__/index.php">网站首页</a> <a href="#">管理入口</a>
		</div>
	</div>

	<script src="<?PHP echo HOME_JS_URL;?>/jquery-1.12.3.min.js"></script>
	<script src="<?PHP echo HOME_JS_URL;?>/main.js"></script>	
</body>
</html>