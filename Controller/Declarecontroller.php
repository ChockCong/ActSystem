<?php 
require_once '../common/global.php';
require_once  '../common/comfunc.class.php';
require_once 'client_cookie.php';

class Act{
	function subact(){
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
		$hidsql="SELECT a.aid FROM student s, admin a WHERE s.sxy = a.xym AND s.sid =$_COOKIE[sid]";
		$hid=$sq->execute_dql ($hidsql);
		$addhdsql="INSERT INTO `rsql`.`studenthd` (`shname`, `sid`, `hid`, `cyz`, `kssj`, `jssj`, `time1`, `time2`, `fwdw`, `fwlx`, `nr`) VALUES"
				."( '$name', '$sid', '-$hid[aid]', '$_COOKIE[student]', '$date1', '$date1', '$time1', '$time2', '$addr', '$type', '$detail')";
		return $sq->execute_dml ($addhdsql);
	}
	
	function seeact($s,$text){
		$sh=new SqlHelper();
		if($text=="")
			$hdsql="select shid,shname from studenthd where sid=$s and hid<0 and xf=0";
		else
			$hdsql="select shid,shname from studenthd where sid=$s and hid<0 and xf=0 and shname like '%$text%'";
		$acts=$sh->execute_dql2 ($hdsql);
		return $acts;
	}
	
	function altact(){
		$shid=$_POST['actid'];
		$name=$_POST['acname'];
		$addr=$_POST['acaddr'];
		$date1=$_POST['pickdate'];
		$date2=$_POST['pickdate2'];
		$time1=$_POST['picktime'];
		$time2=$_POST['picktime2'];
		$type=$_POST['astype'];
		$detail=$_POST['actype'];
		$sq=new SqlHelper();
		$altact="update studenthd set shname='$name',fwdw='$addr',kssj='$date1',jssj='$date2',time1='$time1',".
		"time2='$time2',fwlx='$type',nr='$detail' where shid='$shid'";
		return $sq->execute_dml ($altact);
	}
	
	function delact(){
		$shid=$_POST['actid'];
		$sq=new SqlHelper();
		$delact="delete from studenthd where shid=$shid";
		return $sq->execute_dml ($delact);
	}
	
}  //活动信息申报model

$cf=new comfunc();
if($_GET['declare_title']=="declare"){
	$smarty->display('declare.html');            //首次连接显示	
}else if($_GET['declare_title']==1){             //操作提交页面
	if(isset($_POST['submit'])&&isset($_COOKIE['sid'])){		
		$act=new Act();          
		$cf->protect("Declarecontroller.php?declare_title=2",$act->subact());//类方法subact提交活动
	}else{
		$smarty->display("register.html");      //显示申报页面
	}
}else if($_GET['declare_title']==2){            //操作修改删除页面
	if(isset($_POST['text'])){
		$text=$_POST['text'];
		$s=$_COOKIE['sid'];
		$act=new Act();
		$Acts=$act->seeact($s,$text);
		$smarty->assign("Acts",$Acts);
		$smarty->display("acalter.html");
	}else if(isset($_POST['acalter'])){         //修改操作
		$act=new Act();		
		$cf->protect("Declarecontroller.php?declare_title=2",$act->altact());
		$smarty->display("acalter.html");
	}else if(isset($_POST['acdele'])){                 //删除操作
		$act=new Act();
		$act->delact();
		$smarty->display("acalter.html");
	}else 
		$smarty->display("acalter.html");        //显示修改页面
}

?>