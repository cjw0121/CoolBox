<?php 
namespace Home\Controller;
use Think\Controller;

class UserController extends Controller{

	//用户登录,注册及处理
	public function register(){
		//判断是否提交表单
		if(isset($_POST['user_name'])){
			//实例化数据库对象，查询此用户在f_user表单中的信息
			$mysql = new \Home\Model\userModel();
			//调用封装的函数，获取用户信息
			$result = $mysql->findUserByName($_POST['user_name']);
			//判断用户是否存在
			if(!$result){
				//写入数据库,同时将用户信息放进SESSION
				$_SESSION['user_id'] = $mysql->add($_POST);
				$_SESSION['user_name'] = $_POST['user_name'];
				$_SESSION['user_pwd'] = $_POST['user_pwd'];
				$_SESSION['user_pub'] = $_POST['user_pub'];
				$this->redirect('home/index/index','',1,'注册成功');
			}else{
				$this->redirect('home/user/register','',1,'用户已存在');
			}
		}else{
			$this->display();
		}
	}

	//用户登录处理
	public function login(){
		//判断是否提交表单
		if(isset($_POST['user_name'])){
			//实例化数据库对象，查询此用户在f_user表单中的信息
			$mysql = new \Home\Model\userModel();
			//调用封装的函数，获取用户信息
			$result = $mysql->findUserByName($_POST['user_name']);
			//判断用户是否存在
			if($result){
				//判断密码是否正确
				if($result['user_pwd'] == $_POST['user_pwd']){
					//将用户信息放进SESSION，并跳转至主页
					$_SESSION['user_name'] = $_POST['user_name'];
					$_SESSION['user_pwd'] = $_POST['user_pwd'];
					$_SESSION['user_state'] = $_POST['user_state'];
					$this->redirect('home/index/index','',1,'登录成功');
				}else{
					$this->redirect('home/user/register','',1,'密码错误');
				}
			}else{
				$this->redirect('home/user/register','',1,'用户不存在');
			}
		}else{
			$this->redirect('home/user/register');
		}
	}

	//用户退出
	public function logout(){
		$_SESSION = array();
		$this->redirect('home/user/register');
	}


}


?>