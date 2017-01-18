<?php error_reporting(0);?>
<?php 
   header("Content-type:text/html;charset=utf8");
   require_once '../common/global.php';
   
   $marty=new SqlHelper();
   $user=$_POST['username'];
   $pwd=$_POST['password'];
   //$adminsql="select * from admin where ausername=$user";
   //$rs=$sh->execute_dql ($adminsql);
   
   if($pwd==$rs['apassword']){
   	 $_SESSION['aid']=$rs['aid'];
   	 $smarty->assign("admin",$rs['ausername']);
   	 $smarty->display("index.html"); 
   	 
   }
  /*  $_SESSION['aid']=$rs['aid'];
   $smarty->assign("session",$_SESSION['aid']); */
   
   $smarty->my_close ();
   
   
?>