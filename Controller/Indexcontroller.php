<?php 
require_once '../common/global.php';
require_once '../common/comfunc.class.php';
$cf=new comfunc();
$cf->clearlog();
$smarty->display("login.html");
?>