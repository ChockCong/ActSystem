<meta charset="utf8">
<?php

    require_once 'Smarty/smarty.class.php';
    
    if(!isset($_COOKIE['sid'])) 
	header("Location: Controller/Logincontroller.php");
	//$smarty->display("index.html");
	

?>