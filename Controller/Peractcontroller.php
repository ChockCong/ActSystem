<?php 
require '../common/global.php';
function protect(){
	if(isset($_POST['originator'])) {
		if($_POST['originator'] == $_SESSION['code']){
			unset($_SESSION["code"]);               //将其清除掉此时再按F5则无效
			echo "<script type='text/javascript'>";
			echo "alert('申报成功!');";
			echo "</script>";
			header("Declarecontroller.php?declare_title=3");
		}else{
			echo "<script type='text/javascript'>";
			echo "alert('请不要刷新本页面或重复提交表单')";
			echo "</script>";
		}
	}
}

  if(isset($_POST['submit'])){
  	$sid=$_COOKIE['sid'];
  	$name=$_POST['acname'];
  	$addr=$_POST['acaddr'];
  	$date1=$_POST['pickdate'];
  	$date2=$_POST['pickdate2'];
  	$time1=$_POST['picktime'];
  	$time2=$_POST['picktime2'];
  	$type=$_POST['actype'];
  	$detail=$_POST['acdetail'];
  	$sq=new SqlHelper();
  	$addhdsql="INSERT INTO `rsql`.`studenthd` (`shid`, `shname`, `shnum`, `sid`, `cyz`, `kssj`, `jssj`, `time1`, `time2`, `fwdw`, `fwlx`, `nr`, `xf`) VALUES" 
  			."(NULL, '$name', '', '$sid', '', '$date1', '$date1', '$time1', '$time2', '$addr', '$type', '$detail', '')";
  	$sq->execute_dml ($addhdsql);
  	
  	protect();
  }else{
  	echo "<script type='text/javascript'>";
  	echo "alert('请先申报您的活动')";
  	echo "</script>";
  	$smarty->display("register.html");
  }

?>