<?php
require_once '../common/global.php';
require_once '../common/comfunc.class.php';
class Actmsg {
	function setnotice($str1,$str2) {
		$sq = new SqlHelper();
		$setsql = "insert into news (bt,nr) values ('$str1','$str2')";
		$Set = $sq->execute_dml ($setsql);
		return $Set;
	}

}

if ($_SERVER['REQUEST_METHOD']=="post") {
 echo 1;
	
// 	$cf->protect();
} else {
	$smarty->display ( "acissue.html" );
}

?>