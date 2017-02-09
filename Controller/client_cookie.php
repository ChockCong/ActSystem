<?php     
    require_once '../Smarty/smarty.class.php';
    if(!isset($_COOKIE['sid'])) 
	$smarty->display("login.html");
    ?>