<?php 
require_once '../common/global.php';
require_once 'client_cookie.php';
require_once  '../common/comfunc.class.php';
class Act{
	function subact(){
		$sid=$_COOKIE['sid'];
		$name=$_POST['acname'];
		$addr=$_POST['acaddr'];
		$date1=$_POST['pickdate'];
		$date2=$_POST['pickdate2'];
		$time1=$_POST['picktime'];
		$time2=$_POST['picktime2'];
		$type=$_POST['actype'];
		$detail=$_POST['acdetail'];
		$sq=new SqlHelper();
		$addhdsql="INSERT INTO `rsql`.`studenthd` (`shid`, `shname`, `shnum`, `sid`, `cyz`, `kssj`, `jssj`, `time1`, `time2`, `fwdw`, `fwlx`, `nr`, `xf`) VALUES"
				."(NULL, '$name', '', '$sid', '', '$date1', '$date1', '$time1', '$time2', '$addr', '$type', '$detail', '')";
				//$sq->execute_dml ($addhdsql);
	}
}


if($_GET['declare_title']=="declare"){
	$smarty->display('declare.html');	
}else if($_GET['declare_title']==1){
	if(isset($_POST['submit'])&&isset($_COOKIE['sid'])){
		$cf=new comfunc();
		$act=new Act();
		$act->subact();
		$cf->protect();
	}else{
		$code = mt_rand(0,1000000);            //避免重复提交的标记
		$_SESSION['code'] = $code;
		$smarty->display("register.html");
	}
}else if($_GET['declare_title']==2){
	$smarty->display("alter.html");
}else{

}

?>