

<?php 
require '../common/global.php';
require_once 'client_cookie.php';
 class Peract{
 	public function Showperact($sid,$con=""){
 		$sh=new SqlHelper();
 		if(empty($con))
 			$hdsql="select * from studenthd where sid=$sid and xf!=0";
 		else
 			$hdsql="select * from studenthd where sid=$sid and xf=0 and shnum!=0";
 		$acts=$sh->execute_dql2 ($hdsql);
 		//$actrow=$sh->execute_dml ($hdsql);
 		return $acts;
 		//print_r($acts);
 	}
	
} 
if($_GET['myac_title']=="history"){
	if(isset($_COOKIE['sid'])){
	$sid=$_COOKIE['sid'];
	$peract=new Peract();	
	$Acts=$peract->Showperact($sid);

	$smarty->assign("acts",$Acts);
	$smarty->display('myac.html');
	}
}else{
	if(isset($_COOKIE['sid'])){
		$sid=$_COOKIE['sid'];
		$peract=new Peract();
		$Acts=$peract->Showperact($sid,1);
	
		$smarty->assign("acts",$Acts);
	$smarty->display("result.html");
	}
}
?>
