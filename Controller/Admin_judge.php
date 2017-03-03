<?php 
require_once '../common/global.php';
class Judge{
	function passnum($str){
		$sq=new SqlHelper();
		if($str=="")
			$judsql="SELECT DISTINCT a.hid, a.hname, a.kssj, a.cyrs, COUNT( s.sid ) AS passman, g.sid AS bmman
					FROM adminhd a LEFT JOIN studenthd s ON s.hid = a.hid, glb g WHERE g.sid IN (
					SELECT COUNT( sid ) FROM glb WHERE hid = a.hid) GROUP BY a.hid";
		else
			$judsql="SELECT DISTINCT a.hid, a.hname, a.kssj, a.cyrs, COUNT( s.sid ) AS passman, g.sid AS bmman
					FROM adminhd a LEFT JOIN studenthd s ON s.hid = a.hid, glb g WHERE g.sid IN (
					SELECT COUNT( sid ) FROM glb WHERE hid = a.hid)
					AND a.hname like '%$str%' GROUP BY a.hid";
		$passNum=$sq->execute_dql2 ($judsql);
		return json_encode($passNum);
	}
	function nopass($hid){
		$sq=new SqlHelper();
		$Nosql="select s.sid,s.snum,s.sname,s.szy,s.sdh from glb,student where hid='$hid' and g.sid=s.sid";
		
		$passNum=$sq->execute_dql2 ($Nosql);
		return json_encode($passNum);
	}
}

if($_SERVER['REQUEST_METHOD']=="POST"){

	$judge=new Judge();
	$Passnum=$judge->passnum($_POST['acname']);
	$smarty->assign("Passnum",$Passnum);
	$smarty->display("score.html");
}else{
	$Passnum=json_encode(null);
	$smarty->assign("Passnum",$Passnum);
	$smarty->display("score.html");
}
?>