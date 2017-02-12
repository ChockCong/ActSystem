
<?php 
   require_once '../common/global.php';
   require_once 'client_cookie.php';
   $sh=new SqlHelper();
   //$url=$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];

   if(count($_GET)==0) $smarty->display("index.html");
   else{
   	switch($_GET['title']){
   		case 1 : $smarty->display("index.html"); break;
   		case 2 : $smarty->display("declare.html"); break;
   		case 3 : $smarty->display("myac.html"); break;
   		case 4 : $smarty->display(""); break;
   		default : $smarty->display("index.html");
   	}
   }

  /*  $_SESSION['aid']=$rs['aid'];
   $smarty->assign("session",$_SESSION['aid']); */
   
   //$smarty->my_close ();
   
   
?>