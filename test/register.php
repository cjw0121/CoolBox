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
					<figure id="nav-list-btn">
						<img src="./images/navbtn.png" />
					</figure>
					<div id="nav-option">
						<li><a href="./index.php">主页</a></li>
						<li><a href="b.html">个人空间</a></li>
						<li><a href="c.html">关于</a></li>
						<li><a href="./register.php">登录/注册</a></li>
					</div>
				</div>
			</ul>
		</div>
		
		<div id="content" class="container">
			<form class="form" id="login-form" action="#login" method="POST">
				<h1>登录</h1>
				<p>
					<label for="user-id">账号：</label><input id="login-id" name="user_name" type="text" />
				</p>
				<p>
					<label for="user-psw">密码：</label><input id="login-psw" name="user_pwd" type="password" />
				</p>
				<p class="btn-line">
					<input class="change-btn" type="button" value="注册" />
					<input class="submit-btn" type="submit" value="提交" />
				</p>
			</form>
			
			<form class="form" id="register-form" action="#register" method="POST">
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
					<input class="change-btn" type="button" value="登录" />
					<input class="submit-btn" type="submit" value="提交" />
				</p>
			</form>
		
		</div>
		
		<div id="footer" class="container">
			<span>©版权所有及技术支持：Web联盟</span> 
			<a href="./index.php">网站首页</a> <a href="#">管理入口</a>
		</div>
	</div>

	<script src="./js/jquery-1.12.3.min.js"></script>
	<script src="./js/main.js"></script>	
</body>
</html>