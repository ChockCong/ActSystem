<?php 
require_once '../common/global.php';
require_once 'client_cookie.php';
if(!empty($_GET['declare_title'])){
	switch($_GET['declare_title']){
		case 1 : $smarty->display("register.html"); break;
		case 2 : $smarty->display("alter.html"); break;
		case 3 : $smarty->display("");
	}
}
if(!empty($_GET['myac_title'])){
	switch($_GET['myac_title']){
		case 1 : header("Location:Personactcontroller.php"); break;
		
	}
}
?>