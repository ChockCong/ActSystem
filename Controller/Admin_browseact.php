<?php 
require_once '../common/global.php';

class Actmsg{
	function gaMsg($tag){
		$sq=new SqlHelper();
		if($tag!=0)
			$getsql="select hid,hname,cyrs,kssj,tag from adminhd where tag=$tag";
		else
			$getsql="select hid,hname,cyrs,kssj,tag from adminhd";
		$GetMsg=$sq->execute_dql2 ($getsql);
		for($i=0;$i<count($GetMsg);$i++){
			if($GetMsg[$i][tag]==1)
				$GetMsg[$i][tag] ="已完成";
			else
				$GetMsg[$i][tag] ="未完成";
		}
		return json_encode($GetMsg);
	}
}

if($_SERVER['REQUEST_METHOD']=="POST"){
	$actMsg=new Actmsg();
	$ActMsg=$actMsg->gaMsg($_POST['grade']);
	$smarty->assign("ActMsg",$ActMsg);
	$smarty->display("acall.html");
	
}else{
	$actMsg=new Actmsg();
	$ActMsg=$actMsg->gaMsg(0);
	$smarty->assign("ActMsg",$ActMsg);
	$smarty->display("acall.html");
}
?>