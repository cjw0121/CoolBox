<?php 
//初始化页面编码
header("Content-type:text/html;charset=utf-8");

//定义静态资源路径常量
define('HOME_CSS_URL',"\justfortest\justfortest\home\common\css");
define('HOME_JS_URL',"\justfortest\justfortest\home\common\js");
define('HOME_FONT_URL',"\justfortest\justfortest\home\common\font");

//配置开发模式
define('APP_DEBUG',TRUE);

//引入入口文件
require('../ThinkPHP/ThinkPHP.php');
?>