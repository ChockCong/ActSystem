
<?php 
   header("Content-type:text/html;charset=utf-8");
   require_once '../common/global.php';
   error_reporting(0);
   $sh=new SqlHelper();
   //$url=$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];

   if(!empty($_GET['title'])){
   	switch($_GET['title']){
   		case 1 : $smarty->display("index.html"); break;
   		case 2 : $smarty->display("declare.html"); break;
   		case 3 : $smarty->display(""); break;
   		case 4 : $smarty->display(""); break;
   		default : $smarty->display("login.html");
   	}
   }
   if(!empty($_GET['declare_title'])){
   	switch($_GET['declare_title']){
   		case 1 : $smarty->display("register.html"); break;
   		case 2 : $smarty->display("alter.html"); break;
   		case 3 : $smarty->display("");
   	}
   }
   
   if(count($_GET)==0) $smarty->display("index.html"); 
  /*  $_SESSION['aid']=$rs['aid'];
   $smarty->assign("session",$_SESSION['aid']); */
   
   //$smarty->my_close ();
   
   
?>