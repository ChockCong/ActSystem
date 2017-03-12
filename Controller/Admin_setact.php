<?php
require_once '../common/global.php';
require_once '../common/comfunc.class.php';
class Actmsg {
	function setact($data,$xy) {
		$sq = new SqlHelper();
		$setsql = "insert into adminhd (hname,xf,fbdw,fzr,dh,dh2,cyrs,fwlx,kssj,jssj,xs,nr,fwdw,lb) values"
				." ('$data[title]','$data[score]','$xy','$data[respon]','$data[longtell]','$data[shorttell]','$data[acnumber]','$data[actype]','$data[date1]',"
		        ."'$data[date2]','$data[acduration]','$data[cont]','$data[acaddr]','$_SESSION[aid]')";
		$Set = $sq->execute_dml ($setsql);
		//echo $setsql;
		return $Set;
	}

}

if ($_SERVER['REQUEST_METHOD']=="POST") {
	foreach($_POST as $key=>$value){
		$data[$key]=$value;
	}
	$actmsg= new Actmsg();
	$cf=new comfunc();
//	print_r($data);
    $actMsg=$actmsg->setact($data,$_SESSION['xym']);
	$cf->protect("Admin_setact.php",$actMsg);
} else {
	$smarty->display ( "acissue.html" );
}

?>