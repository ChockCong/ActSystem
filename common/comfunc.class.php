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
	function spamcheck($field)
	{
		$field=filter_var($field, FILTER_SANITIZE_EMAIL);   //删除邮箱中非法字符
	
		if(filter_var($field, FILTER_VALIDATE_EMAIL))   //验证邮箱
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}
	
	function protect($url,$str){
		if($_SERVER['REQUEST_METHOD']=='POST' && $str) {
			echo "<script type='text/javascript'>";
			    echo "alert('操作成功!');";
			    echo "location.href='$url';";
			echo "</script>";
		}else{
		echo "<script type='text/javascript'>";
			echo "confirm('提交失败，请不要刷新本页面或重复提交表单');";
			echo "location.href='$url';";
		echo "</script>";
		}
	}
	function protectG($url,$str){
		if($_SERVER['REQUEST_METHOD']=='GET' && $str) {
			echo "<script type='text/javascript'>";
			echo "alert('操作成功!');";
			echo "location.href='$url';";
			echo "</script>";
		}else{
			echo "<script type='text/javascript'>";
					echo "confirm('提交失败，请不要刷新本页面或重复提交表单');";
							echo "location.href='$url';";
							echo "</script>";
			}
	}
} 

?>