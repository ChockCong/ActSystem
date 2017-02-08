
<?php 
   header("Content-type:text/html;charset=utf8");
   require_once '../common/global.php';
   
   $sh=new SqlHelper();
   $user=$_POST['username'];
   $pwd=$_POST['password'];
   $adminsql="select * from admin where ausername='sxyzgb'";
   $rs=$sh->execute_dql ($adminsql);
   
   if(1){
   	 $_SESSION['aid']=$rs['aid'];
   	 //$_SESSION['tag']=$rs['tag'];
   	 $smarty->assign("admin",$rs['ausername']);
   	 $smarty->assign("url","../templates/ht.html");
   	 $smarty->display("index.html"); 
   	 
   }
  /*  $_SESSION['aid']=$rs['aid'];
   $smarty->assign("session",$_SESSION['aid']); */
   
   //$smarty->my_close ();
   
   
?>