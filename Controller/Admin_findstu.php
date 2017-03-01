<?php 
require_once '../common/global.php';

class Stumsg{
	function showmsg($grade,$class,$name,$num){
		$sq=new SqlHelper();
		$msg="select sid,snum,sname,sbh,sdh from student where ";
		if(!empty($grade)){
			$msg.=" snj=$grade";
			if(!empty($class)){
				$msg.=" and sbh=$class";
				if(!empty($name)){
					$msg.=" and sname='$name'";
					if(!empty($num)){
						$msg.=" and snum=$num";
					}	
				}else if(!empty($num))
					$msg.=" and snum=$num";
			}else if(!empty($name)){
				$msg.=" and sname='$name'";
				if(!empty($num))
					$msg.=" and snum=$num";
			}else if(!empty($num))
				$msg.=" and snum=$num";
		}
		$Msg=$sq->execute_dql2 ($msg);
		return json_encode($Msg);
	}
}
if($_SERVER['REQUEST_METHOD']=='POST'){
	$stumsg=new Stumsg();
	$stuMsg=$stumsg->showmsg($_POST['grade'],$_POST['class'],$_POST['stuname'],$_POST['username']);
 	$smarty->assign("stuMsg",$stuMsg);
 	$smarty->display("squery.html");
	
}else{
	$stuMsg=json_encode(null);
	$smarty->assign("stuMsg",$stuMsg);
	$smarty->display("squery.html");
}
?>