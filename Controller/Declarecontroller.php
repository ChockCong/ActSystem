<?php 
require '../common/global.php';

class Actcor{
	var $hdname;
}


if($_GET['declare_title']=="declare"){
	$smarty->display('declare.html');	
}else if($_GET['declare_title']==1){
	$code = mt_rand(0,1000000);            //避免重复提交的标记
	$_SESSION['code'] = $code; 
	$smarty->display("register.html");
}else if($_GET['declare_title']==2){
	$smarty->display("alter.html");
}else{

}

?>