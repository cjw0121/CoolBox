<?php
namespace Home\Controller;
use Think\Controller;

class IndexController extends Controller {
	//展示主页
    public function index(){
    	$this->display();
    }

    //展示简介
    public function about(){
    	$this->display();
    }

}
?>