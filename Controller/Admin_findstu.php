<?php 
require_once '../common/global.php';
require_once '../common/comfunc.class.php';
class Stumsg{
	function showmsg($grade,$class,$name,$num){
		$sq=new SqlHelper();
		$msg="select sid,snum,sname,szy,sdh from student where ";
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
	function delstu($sid){
		$sq=new SqlHelper();
		$delql="delete from student where sid in ($sid)";
		$delstu=$sq->execute_dml ($delql);
		return $delstu;
	}
}

class Actname{
	function gethname(){
		$sq=new SqlHelper();
		$nameql="select hid,hname from adminhd where lb=$_SESSION[aid]";
		$namestu=$sq->execute_dql2 ($nameql);
		return $namestu;
	}
	function addact($hid,$sid){
		$sq=new SqlHelper();
		$addstu=0;
		$ssid=explode(',',$sid);
		for($i=0;$i<count($ssid);$i++){
			$addql="insert into glb (hid,sid,tag) values ('$hid','$ssid[$i]','0')";
			if($sq->execute_dml ($addql)) 
				$addstu++;
		}
		if($addstu==count($ssid))
			return true;
		else 
			return false;
	}
}

$actn=new Actname();
if($_SERVER['REQUEST_METHOD']=='POST'){
	$stumsg=new Stumsg();
	$stuMsg=$stumsg->showmsg($_POST['grade'],$_POST['class'],$_POST['stuname'],$_POST['username']);
 	$smarty->assign("stuMsg",$stuMsg);
 	$smarty->assign("hname",$actn->gethname());
 	$smarty->display("squery.html");
	
}else if($_SERVER['REQUEST_METHOD']=='GET' && isset($_GET['sid'])){
	$stumsg=new Stumsg();
	$cf=new comfunc();
	$sid=$_GET['sid'];
	$Delstu=$stumsg->delstu($sid);
	$cf->protectG("Admin_findstu.php",$Delstu);
	
}else if (!empty($_GET['act']) && !empty($_GET['sid2'])){
	$cf=new comfunc();
	$hid=$_GET['act'];
	$sid=$_GET['sid2'];
	$Addact=$actn->addact($hid,$sid);
	$cf->protectG("Admin_findstu.php",$Addact);
}else{
	$stuMsg=json_encode(null);
	$actn=new Actname();
	$smarty->assign("stuMsg",$stuMsg);
	//print_r($actn->gethname());
	$smarty->assign("hname",$actn->gethname());
	$smarty->display("squery.html");
}
?>