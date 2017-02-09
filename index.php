<meta charset="utf8">
<?php

    require_once 'Smarty/smarty.class.php';
    if($smarty.cookies.sid==0) 
	header("Location: Controller/UIController.php");
	//$smarty->display("index.html");
	

?>