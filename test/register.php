<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="keywords" content="">
    <meta name="description" content=""> 
    <title>CoolBox_注册登录页面</title>
    <link rel="stylesheet" href="./css/style.css" type="text/css" />
</head>
<body>
	<div id="main">
		<div id="header">
			<ul class="nav container">
				<li>
					<figure class="logo">
						<img src="./images/logo.png" />
					</figure>
				</li>
				<div class="nav-list">
					<span id="nav-list-btn" class="icon-align-justify"></span>
					<div id="nav-option">
						<li><a href="./index.php">主页</a></li>
						<li><a href="#">个人空间</a></li>
						<li><a href="#">关于</a></li>
						<li><a href="./register.php">登录/注册</a></li>
					</div>
				</div>
			</ul>
		</div>
		
		<div id="content" class="container">

			<!-- 登录表单 -->
			<div class="form" id="login-form" action="./getData.php" method="POST">
				<h1>登录</h1>
				<p>
					<label for="user-name">账号：</label><input id="login-name" name="login_name" type="text" />
				</p>
				<p>
					<label for="user-psw">密码：</label><input id="login-psw" name="login_psw" type="password" />
				</p>
				<p class="btn-line">
					<input class="change-btn" type="button" value="切换注册" />
					<input id="login-btn" class="submit-btn" type="button" value="确定" />
				</p>
			</div>
			
			<!-- 注册表单 -->
			<div class="form" id="register-form" action="./getData.php" method="POST">
				<h1>注册</h1>
				<p>
					<label for="register-name">账号：</label><input id="register-name" name="register_name" type="text" />
				</p>
				<p>
					<label for="register-psw">密码：</label><input id="register-psw" name="register_psw" type="password" />
				</p>
				<p>
					<label for="register-email">邮箱：</label><input id="register-email" name="register_email" type="text" />
				</p>
				<p class="btn-line">
					<input class="change-btn" type="button" value="切换登录" />
					<input id="register-btn" class="submit-btn" type="button" value="提交" />
				</p>
			</div>
		
		</div>
		
		<div id="footer" class="container">
			<span>©版权所有及技术支持：Web联盟</span><br/>
			<a href="./index.php">网站首页</a> <a href="#">管理入口</a>
		</div>
	</div>

	<script src="./js/jquery-1.12.3.min.js"></script>
	<script src="./js/main.js"></script>	
</body>
</html>