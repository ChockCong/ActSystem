<?php 
require_once '../common/global.php';
require_once 'client_cookie.php';
require_once '../common/comfunc.class.php';

class Permsg{
	public function showmsg($sid){
		$sq=new SqlHelper();
		$msgsql="select * from student where sid=$sid";
		$smsg=$sq->execute_dql ($msgsql);
		return $smsg;
	}
	function altmsg($sid){
		foreach($_POST as $val)
			foreach($val as $key => $val2)
				$arr[$key]=$val2;
		$sq=new SqlHelper();
		if(!empty($arr[4])){
			$arr[4]=md5($arr[4]);
			$altsql="update student set sdh='$arr[0]',smail='$arr[1]',sname='$arr[2]',szjmm='$arr[3]',spassword='$arr[4]',sdh2='$arr[5]'"
					." where sid=$sid";
		}else 
			$altsql="update student set sdh='$arr[0]',smail='$arr[1]',sname='$arr[2]',szjmm='$arr[3]',sdh2='$arr[5]'"
			." where sid=$sid";
		$smsg=$sq->execute_dml ($altsql);
		return $smsg;
	}
}


if($_GET['info']=="look"){
	$sm=new Permsg();
	if(isset($_POST['submit'])&&isset($_COOKIE['sid'])){
		$cf=new comfunc;
		if($sm->altmsg($_COOKIE['sid']))
		$cf->protect();
	}else{
		$code = mt_rand(0,1000000);            //避免重复提交的标记
		$_SESSION['code'] = $code;
		$smarty->assign("stumsg",$sm->showmsg($_COOKIE['sid']));
		$smarty->display("infor.html");
	}
}
?>