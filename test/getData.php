<?php
	if (count($_POST) > 0) {
	
		if ($_POST['action'] == 'logIn') { //登录
			
			//数据库处理数据
			$send = ($_POST['login_name'] === 'admin' && $_POST['login_psw'] === '000000') ? array('result' => 'success', 'user' => 'admin', 'id' => 'coolbox001', 'pic' => './images/default_user.png') : array('result' => 'fail');
			$data = json_encode($_POST); //json格式化数据
			
			echo json_encode($send); //发送结果信息给前台
		} else if ($_POST['action'] == 'register') {
		
			//数据库处理数据
			
			$ifSuccess = 1;
			echo $ifSuccess;
		}
	} else {
		echo '<h1>404 not find</h1>';
	}
?>