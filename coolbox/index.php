<?php 
//初始化页面编码
header("Content-type:text/html;charset=utf-8");

//本地静态资源路径常量配置
define('HOME_CSS_URL',"/coolbox/coolbox/Home/Common/css");
define('HOME_JS_URL',"/coolbox/coolbox/Home/Common/js");
define('HOME_FONT_URL',"/coolbox/coolbox/Home/Common/font");
define('HOME_IMAGES_URL',"/coolbox/coolbox/Home/Common/images");

/*
//远程静态资源路径常量配置
define('HOME_CSS_URL',"/justfortest/Home/Common/css");
define('HOME_JS_URL',"/justfortest/Home/Common/js");
define('HOME_FONT_URL',"/justfortest/Home/Common/font");
define('HOME_IMAGES_URL',"/justfortest/Home/Common/images");
*/

//配置开发模式
define('APP_DEBUG',TRUE);

//引入入口文件
require('../ThinkPHP/ThinkPHP.php');

?>