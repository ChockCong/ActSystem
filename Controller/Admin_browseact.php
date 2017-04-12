<?php 
require_once '../common/global.php';

class Actmsg{
	function gaMsg($tag){
		$sq=new SqlHelper();
		if($tag!=0)
			$getsql="select hid,hname,cyrs,kssj,tag from adminhd where tag=$tag and lb=$_SESSION[aid]";
		else
			$getsql="select hid,hname,cyrs,kssj,tag from adminhd where lb=$_SESSION[aid]";
		$GetMsg=$sq->execute_dql2 ($getsql);
		for($i=0;$i<count($GetMsg);$i++){
			if($GetMsg[$i][tag]==1)
				$GetMsg[$i][tag] ="已完成";
			else
				$GetMsg[$i][tag] ="未完成";
		}
		return json_encode($GetMsg);
	}
	function delMsg($sid,$hid){
		$sq=new SqlHelper();
		$delsql="update studenthd set xf=0 where sid=$sid and hid=$hid";
		$actsql="select sid,snum,sname,szy,sdh from student where sid in (select sid from studenthd where hid=$hid and xf!=0)";
		if($sq->execute_dml ($delsql)){
			$finsql="select count(shid) as num from studenthd where hid=$hid and xf!=0";
			$sum="select cyrs from adminhd where hid=$hid";
			$number1=$sq->execute_dql ($finsql);
			$number2=$sq->execute_dql ($sum);
			if($number1[num]<$number2[cyrs]){
				$finact="update adminhd set tag=2 where hid=$hid";
				$sq->execute_dml ($finact);
			}
			$DelMsg=$sq->execute_dql2 ($actsql);
		}
		return $DelMsg;
	}
	function delAct($hid){
		$sq=new SqlHelper();
		$delasql="delete from adminhd where hid in ($hid)";
		$delmsql="delete from studenthd where hid in ($hid)";
// 		echo $delasql;
// 		echo $delmsql;
		if($Del=$sq->execute_dml ($delasql))
			return $sq->execute_dml ($delmsql);
		//return $Del;
	}
}

if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST['grade'])){
	$actMsg=new Actmsg();
	$ActMsg=$actMsg->gaMsg($_POST['grade']);
	$smarty->assign("ActMsg",$ActMsg);
	$smarty->display("acall.html");
	
}else if($_SERVER['REQUEST_METHOD']=="POST" && !empty($_POST['ghid'])){
	$hdi=$_POST['ghid'];
	$actMsg=new Actmsg();
	
	if($actMsg->delAct($hdi)){
		$ActMsg=$actMsg->gaMsg(0);
		$smarty->assign("ActMsg",$ActMsg);
		$smarty->display("acall.html");
	}
}else if(!empty($_GET['ssid']) && !empty($_GET['hhid'])){
	$actMsg=new Actmsg();
	$sid=$_GET['ssid'];
	$hid=$_GET['hhid'];
	$ActMsg=$actMsg->delMsg($sid,$hid);
	echo json_encode(array('jsonObj'=>$ActMsg));
}else{
	$actMsg=new Actmsg();
	$ActMsg=$actMsg->gaMsg(0);
	$smarty->assign("ActMsg",$ActMsg);
	$smarty->display("acall.html");
}
?>