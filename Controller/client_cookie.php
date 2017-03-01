<?php     
    require_once '../Smarty/smarty.class.php';
    if(!isset($_COOKIE['sid'])) {
    	echo "<script type='text/javascript'>";
    	echo "if(confirm('身份过期或请先登录!'))
    			window.top.location.href='Logincontroller.php';";
    	echo "</script>";
    	
    	exit();
    }

    ?>