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
			<div class="container">
				<figure class="logo">
					<img src="./images/logo.png" />
				</figure>
				<ul class="nav">
					<li><a href="./index.php">主页</a></li>
					<li><a href="b.html">个人空间</a></li>
					<li><a href="c.html">关于</a></li>
					<li><a href="./register.php">登录/注册</a></li>
				</ul>
			</div>
		</div>
		
		<div id="content" class="container">
			<form class="temp-form" id="login-form" action="__MODULE__/user/login" method="POST">
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
			
			<form class="temp-form" id="register-form" action="__MODULE__/user/register" method="POST">
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
		
		</div>
		
		<div id="footer" class="container">
			<span>©版权所有及技术支持：Web联盟</span> 
			<a href="1.html">网站首页</a> <a href="2.html">管理入口</a>
		</div>
	</div>

	<script src="./js/jquery-1.12.3.min.js"></script>
	<script src="./js/main.js"></script>	
</body>
</html>