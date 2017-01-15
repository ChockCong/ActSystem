<?php error_reporting(0);?>
<?php 
   header("Content-type:text/html;charset=utf8");
   require_once '../common/global.php';
   
   $sh=new SqlHelper();
   $user=$_POST['username'];
   $pwd=$_POST['password'];
   $adminsql="select * from admin where ausername=$user";
   
   $rs=$sh->execute_dql ($adminsql);
   if($pwd==$rs[2]){
   	 $_SESSION['aid']=$rs[0];
   	 $smarty->assign("admin",$user);
   	 $smarty->assign("index.html"); 
   	 
   }
 
?>