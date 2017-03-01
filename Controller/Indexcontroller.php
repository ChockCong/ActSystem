<?php 
require_once '../common/global.php';
if(count($_SESSION)!=0)
	$smarty->display("index.html");
else
	$smarty->display("Sindex.html");
?>