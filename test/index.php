<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>CoolBox_主页</title>
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
						<li><a href="#">个人空间</a></li>
						<li><a href="#">关于</a></li>
						<li><a href="./register.php">登录/注册</a></li>
					</div>
				</div>
			</ul>
		</div>

		<ul id="content" class="container">
			<li class="project-item">
				<div class="project-title">
					<a href=""><span>掘金主页克隆修改版</span></a>
				</div>
				<div class="project-main">
					<p class="project-main-title">项目描述</p>
					<div class="project-description">
						<p>本项目为技术资讯网站——掘金的克隆微改版本，由纯 HTML+CSS 构成，在原页面的基础上修改了部分样式。创建此项目的目的是练习静态页面的构筑，了解网站页面的内部构造。</p>
					</div>
					<div class="project-message">
						<span class="message-item">负责人: <span>魏杰涛</span></span>
						<span class="message-item">创建日期: <span>2017年3月20日</span></span>
					</div>
				</div>
			</li>
		</ul>

		<div id="footer" class="container">
			<span>©版权所有及技术支持：Web联盟</span><br />
			<a href="./index.php">网站首页</a> <a href="#">管理入口</a>
		</div>
	</div>

	<script src="./js/jquery-1.12.3.min.js"></script>
	<script src="./js/main.js"></script>
</body>
</html>
