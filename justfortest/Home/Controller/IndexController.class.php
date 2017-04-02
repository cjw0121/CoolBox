<?php
namespace Home\Controller;
use Think\Controller;

class IndexController extends Controller {
    public function index(){
    	//SESSION调试
    	//var_dump($_SESSION);
    	$this->display();
    }
}