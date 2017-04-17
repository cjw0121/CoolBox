<?php 
namespace Home\Controller;
use Think\Controller;

class UserController extends Controller{

	//用户注册和登录
	public function action(){
		if($_POST['action'] == 'register'){       		//判断是否提交注册表单
			//实例化数据库对象，查询此用户在f_user表单中的信息
			$mysql = new \Home\Model\userModel();
			//调用封装的函数，获取用户信息
			$result = $mysql->findUserByName($_POST['user_name']);
			//判断用户是否存在
			if(!$result){
				//写入数据库,同时将用户信息放进SESSION
				$_SESSION['user_id'] = $mysql->add($_POST);
				$_SESSION['user_name'] = $_POST['user_name'];
				$_SESSION['user_psw'] = $_POST['user_psw'];
				$_SESSION['user_email'] = $_POST['user_email'];
				//AJAX返回JSON数据
				$send = array(
					'result' => 'success', 
					'user' => $_POST['user_name'], 
					'id' => $_SESSION['user_id'], 
					'pic' => HOME_IMAGES_URL."/default_user.png");
					echo json_encode($send);
			}else{
				echo json_encode(array('result' => 'fail'));
			}
		}else if($_POST['action'] == 'logIn'){           //判断是否提交登录表单               
			//实例化数据库对象，查询此用户在f_user表单中的信息
			$mysql = new \Home\Model\userModel();
			//调用封装的函数，获取用户信息
			$result = $mysql->findUserByName($_POST['user_name']);
			//判断用户是否存在
			if($result){
				//判断密码是否正确
				if($result['user_psw'] == $_POST['user_psw']){
					//将用户信息放进SESSION，并跳转至主页
					$_SESSION['user_id'] = $_result['user_id'];
					$_SESSION['user_name'] = $_POST['user_name'];
					$_SESSION['user_psw'] = $_POST['user_psw'];
					//AJAX返回JSON数据
					$send = array(
						'result' => 'success', 
						'user' => $_POST['user_name'], 
						'id' => $_SESSION['user_id'], 
						'pic' => HOME_IMAGES_URL.'/default_user.png');
					echo json_encode($send);
				}else{
				echo json_encode(array('result' => 'fail','error' => '密码错误'));
				}
			}else{
				echo json_encode(array('result' => 'fail','error' => '用户名不存在'));
			}

		}else{
			$this->display();
		}
	}

	//用户退出
	public function logout(){
		$_SESSION = array();
		$this->redirect('home/user/register');
	}

	//用户中心
    public function center(){
    	$this->display();
    }

}


?>