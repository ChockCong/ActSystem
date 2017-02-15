<?php
require '../common/global.php';
class comfunc{
	
	function str_confirm($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	
	function clearlog(){
		session_destroy();
		setcookie("sid",'',0);
		setcookie("student",'',0);
	}
	function cancel(){
		echo "<script>";
		//echo "if(confirm('确认后退?'))";
		echo "history.go(-1);";
	    echo "</script>";
	}
	function menu(){
		echo "	<ul>
				<li><a href='UIcontroller.php?title=1'>公告通知</a></li>
				<li><a href='UIcontroller.php?title=2'>活动申报</a></li>
				<li><a href='UIcontroller.php?title=3'>个人活动</a></li>
				<li><a href='UIcontroller.php?title=4'>个人信息</a></li>
			   </ul>";
	}
	
	function protect(){
		if(isset($_POST['originator'])) {
			if($_POST['originator'] == $_SESSION['code']){
				unset($_SESSION["code"]);               //将其清除掉此时再按F5则无效
				echo "<script type='text/javascript'>";
				echo "alert('操作成功!');";
				echo "history.go(-1);";
				echo "</script>";
				//header("Location:Declarecontroller.php?declare_title=1");
			}else{
				echo "<script type='text/javascript'>";
				echo "confirm('请不要刷新本页面或重复提交表单');";
				echo "location.href='Personinfocontroller.php?info=look';";
				echo "</script>";
			}
		}
	}
} 

?>