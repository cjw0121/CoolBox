<?php 
namespace Home\Model;
use Think\Model;

class userModel extends Model{
	/*
		根据用户名查询用户信息

		params $user_name   用户名
		return bool/array()  false或一维数组
	*/
	public function findUserByName($user_name){
		$this->where("user_name ='".$user_name."'");
		$result = $this->select();
		if($result){
			foreach($result as $k=>$v){
				return $v;
			}
		}else{
			return false;	
		}
	}
}



?>