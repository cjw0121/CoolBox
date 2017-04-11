<?php
	if (count($_POST) > 0) {
	
		if ($_POST['action'] == 'logIn') { //登录
			
			//数据库处理数据
			$ifSuccess = ($_POST['login_name'] === 'admin' && $_POST['login_psw'] === '000000') ? 1 : 0;
			$data = json_encode($_POST); //json格式化数据
			
			echo $ifSuccess; //发送结果信息给前台
		} else if ($_POST['action'] == 'register') {
		
			//数据库处理数据
			
			$ifSuccess = 1;
			echo $ifSuccess;
		}
	} else {
		echo '<h1>404 not find</h1>';
	}
?>