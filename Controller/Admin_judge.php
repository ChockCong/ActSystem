<?php 
require_once '../common/global.php';
class Judge{
	function passnum($str){
		$sq=new SqlHelper();
		if($str==""){
			$judsql1="SELECT DISTINCT a.hid, a.hname, a.kssj, a.cyrs, COUNT( s.sid ) AS passman, s.tag AS bmman
					FROM adminhd a LEFT JOIN studenthd s ON s.hid = a.hid where a.tag!=1 and a.lb=$_SESSION[aid] GROUP BY a.hid ";
			$judsql2="SELECT hid, COUNT( sid ) FROM glb where tag=0 GROUP BY hid ORDER BY hid";
			$passNum1=$sq->execute_dql2 ($judsql1);
			$passNum2=$sq->execute_dql2 ($judsql2);
		}else{
			$judsql1="SELECT DISTINCT a.hid, a.hname, a.kssj, a.cyrs, COUNT( s.sid ) AS passman, s.tag AS bmman
					FROM adminhd a LEFT JOIN studenthd s ON s.hid = a.hid 
					WHERE a.hname LIKE  '%$str%' and a.tag!=1 and a.lb=$_SESSION[aid]  GROUP BY a.hid";
			$passNum1=$sq->execute_dql2 ($judsql1);
			$judsql2="SELECT hid, COUNT( sid ) FROM glb where hid in (";
			for($i=0;$i<count($passNum1);$i++){
				$judsql2.=$passNum1[$i]['hid'];
				if($i!=count($passNum1)-1)
				$judsql2.=',';
			}
			$judsql2.=") and tag=0 GROUP BY hid ORDER BY hid";
			$passNum2=$sq->execute_dql2 ($judsql2);
		}
		
		for($i=0;$i<count($passNum1);$i++)
			for($j=0;$j<count($passNum2);$j++){
			if ($passNum1[$i]['hid']==$passNum2[$j]['hid'])
			$passNum1[$i]['bmman']=$passNum2[$j]['COUNT( sid )'];
		}
// 		print_r($passNum1);
// 		echo "<br />";
// 		print_r($judsql2);
		return json_encode($passNum1);
	}
	function nopass($sid,$hid,$gid){
		$sq=new SqlHelper();
		$Nosql="update glb set tag=1 where hid=$hid and sid=$sid and gid=$gid";
		$showsql="select g.gid,s.sid,s.snum,s.sname,s.szy,s.sdh from glb g,student s where g.hid='$hid' and g.sid=s.sid and g.tag=0";
		$passNum=$sq->execute_dml ($Nosql);
		$shownopass=$sq->execute_dql2 ($showsql);
		if($passNum)
		return $shownopass;
	}
	function pass($sid,$hid,$gid){
		$sq=new SqlHelper();
		$Adsql="insert into studenthd(shname,hid,sid,cyz,kssj,jssj,fwdw,fwlx,nr)".
		" select a.hname,a.hid,c.sid,c.sname,a.kssj,a.jssj,a.fwdw,a.fwlx,a.nr from adminhd a,student c where a.hid=$hid and c.sid=$sid";
		$Pasql="delete from glb where sid=$sid and hid=$hid and tag=0 and gid=$gid";
		$showsql="select g.gid,s.sid,s.snum,s.sname,s.szy,s.sdh from glb g,student s where g.hid='$hid' and g.sid=s.sid and g.tag=0";
		$passNum1=$sq->execute_dml ($Adsql);
		$passNum2=$sq->execute_dml ($Pasql);
		$shownopass=$sq->execute_dql2 ($showsql);
		if($passNum1 && $passNum2) return $shownopass;
		else return false;
		
	}
}
$url = $_SERVER['PHP_SELF'];
$filename = end(explode('/',$url));
if($_SERVER['REQUEST_METHOD']=="POST"){                  //搜索活动
	$judge=new Judge();
	$Passnum=$judge->passnum($_POST['acname']);
	$smarty->assign("Passnum",$Passnum);
	$smarty->display("score.html");
}else if(isset($_GET['ysid'])){                         //通过审核
	$sid=$_GET['ysid'];
	$hid=$_GET['hhid'];
	$judge=new Judge();
	//if($judge->pass($sid,$hid))
		//header("location:".$filename);
	$AM=$judge->pass($sid,$hid,$_GET['gid']);
	echo json_encode(array('jsonObj'=>$AM));
}else if(isset($_GET['nsid'])){                         //不通过审核
	$sid=$_GET['nsid'];
	$hid=$_GET['hhid'];
	$judge=new Judge();
	$NM=$judge->nopass($sid,$hid,$_GET['gid']);
	echo json_encode(array('jsonObj'=>$NM));
// 	if($judge->nopass($sid,$hid))
// 		header("location:".$filename);
}else{                                                  //首次显示
	$judge=new Judge();
	$Passnum=$judge->passnum();
	$smarty->assign("Passnum",$Passnum);
	$smarty->display("score.html");
}
?>