<?php 
require_once '../common/global.php';
require_once '../common/comfunc.class.php';

class Stumsg{
	function addmsg(){
		foreach($_POST as $key => $val){
			$data[$key] = $val;
		}
		$pwd=md5($data[stupassword]);
		switch($data[actype]){
			case 1: $type="群众";break;
			case 2: $type="团员";break;
			case 3: $type="预备党员";break;
			case 4: $type="中共党员";
		}
		$addsql="insert into student (snum,sname,spassword,sxb,ssfj,szjmm,smz,sdh,sdh2,sfs,snj,sxy,szy,sbh,sxz,scc,smail)".
				" values('$data[username]','$data[stuname]','$pwd','$data[sex]',".
		"'$data[idnum]','$type','$data[nation]','$data[longtell]','$data[shorttell]','$data[score]',".
		"'$data[grade]','$data[institute]','$data[subject]','$data[class]','$data[scsys]','$data[level]','$data[qqnum]')";
		$sq=new SqlHelper();
		return $sq->execute_dml ($addsql);
	}
}

if(!isset($_POST['stuname'])){
	$smarty->display("addstu.html");
}else{
	$stumsg=new Stumsg();
	$cf=new comfunc();
	$cf->protect("Admin_addstu.php",$stumsg->addmsg());
	
}
?>