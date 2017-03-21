<?php
require_once '../common/global.php';
require_once '../common/comfunc.class.php';
class Notice {
	function setnotice($str1, $str2) {
		$sq = new SqlHelper ();
		$setsql = "insert into news (bt,nr,time,hnid) values ('$str1','$str2',now(),$_SESSION[aid])";
		$Set = $sq->execute_dml ( $setsql );
		return $Set;
	}
	function seenotice() {
		$sq = new SqlHelper ();
		$seesql = "select nid,bt from news where hnid=$_SESSION[aid]";
		$See = $sq->execute_dql2 ( $seesql );
		return $See;
	}
	function delnotice($nid) {
		$sq = new SqlHelper ();
		$delsql = "delete from news where nid=$nid";
		$Del = $sq->execute_dml ( $delsql );
		return $Del;
	}
}

if (isset ( $_POST ['notiname'] )) {
	$note = new Notice ();
	$cf = new comfunc ();
	$title = $_POST ['notiname'];
	$cont = $_POST ['content'];
	$cf->protect ( "Admin_setnotice.php", $note->setnotice ( $title, $cont ) );
} else if (isset ( $_GET ['nid'] )) {
	$note = new Notice ();
	$nid = $_GET [nid];
	$cf = new comfunc ();
	$cf->protectG ( "Admin_setnotice.php", $note->delnotice ( $nid ) );
} else {
	$note = new Notice ();
	$smarty->assign ( "news", $note->seenotice () );
	$smarty->display ( "notice.html" );
}

?>