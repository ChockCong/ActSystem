<?php 
require_once '../common/global.php';
require_once  '../common/comfunc.class.php';
require_once 'client_cookie.php';

class Permsg{
	function showmsg($sid){
		$sq=new SqlHelper();
		$msgsql="select * from student where sid=$sid";
		$smsg=$sq->execute_dql ($msgsql);
		return $smsg;
	}
	function altmsg($sid){
		$cf=new comfunc;
		foreach($_POST as $val)
			foreach($val as $key => $val2)
				$arr[$key]=$cf->str_confirm($val2);
		if($cf->spamcheck($arr[1])){
		if(!empty($arr[4])){
			$altsql="update student set sdh='$arr[0]',smail='$arr[1]',sname='$arr[2]',szjmm='$arr[3]',spassword='".md5($arr[4])."',sdh2='$arr[5]'"
					." where sid='$sid'";
		}else {
			$altsql="update student set sdh='$arr[0]',smail='$arr[1]',sname='$arr[2]',szjmm='$arr[3]',sdh2='$arr[5]'"
			." where sid='$sid'";
		}
		
		$sq=new SqlHelper();
		$smsg=$sq->execute_dml ($altsql);
		return $smsg;
		
		}else{
			echo "e-mail填写错误请返回!";
		}
	}

}  //个人信息model



	
	if($_GET['info']=="look"){
		$sm=new Permsg();
// 		$code = mt_rand(0,1000000);            //避免重复提交的标记
// 		$_SESSION['code'] = $code;
		$smarty->assign("stumsg",$sm->showmsg($_COOKIE['sid']));
		$smarty->display("infor.html");
	}else if(isset($_POST['submit'])&&isset($_COOKIE['sid'])){
		$cf=new comfunc;
		$sm=new Permsg();
		$cf->protect("Personinfocontroller.php?info=look",$sm->altmsg($_COOKIE['sid']));
	} 

?>