<?php 
require_once '../common/global.php';
require_once '../common/comfunc.class.php';

class Pass{
	function passstu($str1="",$str2=""){
		$sq=new SqlHelper;
		if(empty($str1) && empty($str2))
			$passsql="select shid,shname,cyz,kssj from studenthd where xf=0";
		else if(!empty($str1) && empty($str2))
			$passsql="select h.shid,h.shname,h.cyz,h.kssj from studenthd h,student s where s.snum='$str1' and h.sid=s.sid and h.xf=0";
		else if(!empty($str2) && empty($str1))
			$passsql="select shid,shname,cyz,kssj from studenthd where shname like '%$str2%'";
		else if(!empty($str2) && !empty($str1))
			$passsql="select h.shid,h.shname,h.cyz,h.kssj from studenthd h,student s where s.snum='$str1' and h.sid=s.sid and h.shname like '%$str2%' and h.xf=0";
		
		$passStu=$sq->execute_dql2 ($passsql);
		return json_encode($passStu);
	}
	function passmark($str,$shid){
		$sq=new SqlHelper;
		$marksql="update studenthd set xf='$str' where shid=$shid";
		$passM=$sq->execute_dml ($marksql);
		return $passM;
		
	}
}

if($_SERVER['REQUEST_METHOD']=="POST"){
	$pass=new Pass();
	$passStu=$pass->passstu($_POST['username'],$_POST['acname']);
	$smarty->assign("passStu",$passStu);
	$smarty->display("acpass.html");
}else if(isset($_GET['score'])){
	$xf=floatval($_GET['score']);
	$sid=$_GET['sid'];
	$pass=new Pass();
	$cf=new comfunc();
	$passMark=$pass->passmark($xf,$sid);
	$cf->protectG("Admin_approveact.php",$passMark);
}else {
	$pass=new Pass();
	$passStu=$pass->passstu();
	$smarty->assign("passStu",$passStu);
	$smarty->display("acpass.html");
}
?>