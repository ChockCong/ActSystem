<?php
require_once '../common/global.php';
require_once '../common/comfunc.class.php';
class Notice {
	function setnotice($str1,$str2) {
		$sq = new SqlHelper();
		$setsql = "insert into news (bt,nr,time) values ('$str1','$str2',now())";
		$Set = $sq->execute_dml ($setsql);
		return $Set;
	}

}

if (isset($_POST ['notiname'])) {
	$note = new Notice();
	$cf = new comfunc();
	$title = $_POST['notiname'];
	$cont = $_POST['content'];
	
	$cf->protect("Admin_setnotice.php",$note->setnotice($title,$cont));
} else {
	$smarty->display ( "notice.html" );
}

?>