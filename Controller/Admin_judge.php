

<?php 
require_once '../common/global.php';
class Judge{
	function passstu($str=""){
		$sq=new SqlHelper;
		if($str=="")
			$judsql="select a.hid,a.hname,a.cyrs,count(g.sid),count(b.sid) from adminhd a,glb g,bmb b";
		else
			$judssql="select a.hid,a.hname,a.cyrs,count(g.sid),count(b.sid) from adminhd where a.hname='$str'";
	}
}

if($_SERVER['REQUEST_METHOD']=="POST"){

}else
	
	$smarty->display("score.html");
?>