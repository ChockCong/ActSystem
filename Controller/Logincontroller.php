
<?php 

   header("Content-type:text/html;charset=utf-8");
   require_once '../common/global.php';
   require_once '../common/comfunc.class.php';
   require_once '../common/action.class.php';
   error_reporting(0);
   
   $sh=new SqlHelper();
   $cf=new comfunc();
   $user=$cf->str_confirm($_POST['username']);
   $pwd=$cf->str_confirm($_POST['password']);
   $tag=$_POST['status'];
   $ac=new action();
   
   if(!empty($user) &&!empty($pwd) && isset($tag) ){             //登录填写非空
   	if($tag==0){                                              
   		$adminsql="select * from student where snum='$user'";
   		$rs=$sh->execute_dql ($adminsql);                        //获取数据库信息进行比对
   		$rownum=$sh->execute_dml ($adminsql);                    //表示是否匹配到数据是1否0
   		
   		if($rownum && md5($pwd)==$rs['spassword']){                //判断身份
   			setcookie("sid", $rs['sid'], time()+360);               //客户cookies
   			setcookie("tag", $tag, time()+600);
   			setcookie("student", $rs['sname'], time()+600);
   			//$smarty->assign("student",$rs['sname']);
   			$ac->get_show_msg("UIcontroller.php");
   			//header("Location:UIcontroller.php");
   			//$smarty->display("index.html");
   		}else{
   			echo "<script type='text/javascript'>";
   			echo "alert('账号或密码错误！');";
   			echo "history.go(-1);";
   			echo "</script>";
   		}
   	}else if($tag==1){
   		$adminsql="select * from admin where ausername='$user'";
   		$rs=$sh->execute_dql ($adminsql);                        //获取数据库信息进行比对
   		$rownum=$sh->execute_dml ($adminsql);                    //表示是否匹配到数据是1否0
   		
   		if($rownum && $pwd==$rs['apassword']){                //判断身份
   			$_SESSION['aid']=$rs['aid'];                      //获取管理员session
   			$_SESSION['aname']=$rs['aname'];
   			echo $_SESSION['aid']."  ".$_SESSION['aname'];
   		}else{
   			echo "<script type='text/javascript'>";
   			echo "alert('账号或密码错误！');";
   			echo "history.go(-1);";
   			echo "</script>";
   		}
   	}
   }else{
   	echo "<script type='text/javascript'>";
   	echo "alert('请保证账号密码身份填写无误！');";
   	echo "history.go(-1);";
   	echo "</script>";
   	//$smarty->display("login.html");
   }

   $smarty->my_close ();
   
?>