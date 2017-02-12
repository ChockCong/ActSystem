<?php
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
} 

?>