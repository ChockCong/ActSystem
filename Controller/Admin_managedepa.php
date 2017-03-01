<?php 
require_once '../common/global.php';
require_once '../common/comfunc.class.php';

class admin{
	function admmsg($aid){
		$sq=new SqlHelper();
		$msg="select * from admin where aid=$aid";
		$Msg=$sq->execute_dql ($msg);
		return $Msg;
	}
	function altmsg($aid,$str1){
		$apwd=$_POST[password];
		$anm=$_POST[admname];
		$xym=$_POST[xym];
		$sq=new SqlHelper();
		if(!empty($xym))
			$msg="update admin set apassword='$apwd',aname='$anm',xym='$xym' where aid=$aid";
		else 
			$msg="update admin set apassword='$apwd',aname='$anm' where aid=$aid";
		$Msg=$sq->execute_dml ($msg);
		return $Msg;
	}
}


$aid=$_SESSION['aid'];
if(!isset($_POST['adminsub'])){
	$admin=new admin();
	$admstr=$admin->admmsg($aid);
	$smarty->assign("admMsg",$admstr);
	$smarty->display("admininfor.html");
}else{
	$admin=new admin();
	$cf=new comfunc();
	//$admin->altmsg($aid);
	$cf->protect("Admin_managedepa.php",$admin->altmsg($aid));
	//header("Location:Admin_managedepa.php");
	
}

?>