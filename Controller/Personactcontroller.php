
<?php 
require_once '../common/global.php';
require_once 'client_cookie.php';

 class Peract{
 	public function Showperact($sid,$con=""){
 		$sh=new SqlHelper();
 		if(empty($con))
 			$hdsql="select shid,shname,kssj,xf from studenthd where sid=$sid";
 		else
 			$hdsql="SELECT a.hid, a.hname, a.kssj, a.xf,g.tag FROM glb g, adminhd a, student s WHERE g.sid = s.sid AND g.hid = a.hid AND g.sid =$sid";
 		$acts=$sh->execute_dql2 ($hdsql);
 		//$actrow=$sh->execute_dml ($hdsql);
 		for($i=0;$i<count($acts);$i++)
 		if($acts[$i][tag]==1) $acts[$i][tag]="未通过";
 		else $acts[$i][tag]="未审核";
 		return $acts;
 		//print_r($acts);
 	}
	
} //活动信息model


if($_GET['myac_title']=="history"){
	if(isset($_COOKIE['sid'])){
	$sid=$_COOKIE['sid'];
	$peract=new Peract();	
	$Acts=$peract->Showperact($sid);     //选择历史活动
	$smarty->assign("acts",$Acts);
	$smarty->display('myac.html');
	}
}else{
	if(isset($_COOKIE['sid'])){
		$sid=$_COOKIE['sid'];
		$peract=new Peract();
		$Acts=$peract->Showperact($sid,1);    //选择报名结果
		$smarty->assign("acts",$Acts);
		$smarty->display("result.html");
	}
}
?>
