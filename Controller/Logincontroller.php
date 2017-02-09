
<?php 

   header("Content-type:text/html;charset=utf-8");
   require_once '../common/global.php';
   
   error_reporting(0);
   $sh=new SqlHelper();
   $user=$_POST['username'];
   $pwd=$_POST['password'];
   $tag=$_POST['status'];
   $logoff="Logincontroller.php";

   if(!empty($user)&&!empty($pwd)&&isset($tag)){             //登录填写非空
   	if($tag==0)                                              //判断身份
   		$adminsql="select * from student where snum='$user'";
   	else if(tag==1)
   		$adminsql="select * from admin where snum='$user'";
   	$rs=$sh->execute_dql ($adminsql);                        //获取数据库信息进行比对
   	
   	if(md5($pwd)==$rs['spassword']){
   	 setcookie("sid", $rs['sid'], time()+360);               //客户cookies
   	 setcookie("tag", $tag, time()+360);
   	 setcookie("student", $rs['sname'], time()+360);
   	 //$smarty->assign("student",$rs['sname']);
   	 $smarty->assign("logoff",$logoff);
   	 $smarty->display("index.html");
   	}
   }else{
   	 echo "<script type='text/javascript'>";
   	 echo "alert('请保证账号密码身份填写无误！')";
   	 echo "</script>";
   	 $smarty->display("login.html");
   }

   echo $_COOKIEp['sid'];
  /*  $_SESSION['aid']=$rs['aid'];
   $smarty->assign("session",$_SESSION['aid']); */
   
   //$smarty->my_close ();
   
   
?>