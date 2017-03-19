<?php 
require_once '../common/global.php';
require_once '../common/comfunc.class.php';

class Pass{
	function passstu($str1="",$str2=""){
		$sq=new SqlHelper;
		$hidsql="select hid from adminhd where lb=$_SESSION[aid]";
		$hid=$sq->execute_dql2 ($hidsql);
		
		if(empty($str1) && empty($str2)){
			if(count($hid)==0) $passsql="select shid,shname,cyz,kssj from studenthd where xf=0 and (hid=-$_SESSION[aid])";
			else{
			$passsql="select shid,shname,cyz,kssj from studenthd where xf=0 and (hid=-$_SESSION[aid] or hid in(";
			for($i=0;$i<count($hid);$i++){
				if($i!=count($hid)-1)
				$passsql.=$hid[$i][hid].',';
				else $passsql.=$hid[$i][hid];
			}
			$passsql.="))";
			}
		}
		else if(!empty($str1) && empty($str2)){
			if(count($hid)==0) $passsql="select h.shid,h.shname,h.cyz,h.kssj from studenthd h,student s where s.snum='$str1' and h.sid=s.sid and h.xf=0 and (hid=-$_SESSION[aid])";
			else{
			$passsql="select h.shid,h.shname,h.cyz,h.kssj from studenthd h,student s where s.snum='$str1' and h.sid=s.sid and h.xf=0 and (hid=-$_SESSION[aid] or hid in(";
			for($i=0;$i<count($hid);$i++){
				if($i!=count($hid)-1)
					$passsql.=$hid[$i][hid].',';
				else $passsql.=$hid[$i][hid]."))";
			}
			}
		}
		else if(!empty($str2) && empty($str1)){
			if(count($hid)==0) $passsql="select shid,shname,cyz,kssj from studenthd where shname like '%$str2%' and xf=0 and (hid=-$_SESSION[aid])";
			else{
			$passsql="select shid,shname,cyz,kssj from studenthd where shname like '%$str2%' and xf=0 and (hid=-$_SESSION[aid] or hid in(";
			for($i=0;$i<count($hid);$i++){
				if($i!=count($hid)-1)
					$passsql.=$hid[$i][hid].',';
				else $passsql.=$hid[$i][hid]."))";
			}
			}
		
		}
		else if(!empty($str2) && !empty($str1)){
			if(count($hid)==0) $passsql="select h.shid,h.shname,h.cyz,h.kssj from studenthd h,student s where s.snum='$str1' and h.sid=s.sid and h.shname like '%$str2%' and h.xf=0 and (hid=-$_SESSION[aid])";
			else{
			$passsql="select h.shid,h.shname,h.cyz,h.kssj from studenthd h,student s where s.snum='$str1' and h.sid=s.sid and h.shname like '%$str2%' and h.xf=0 and (hid=-$_SESSION[aid] or hid in(";
			for($i=0;$i<count($hid);$i++){
				if($i!=count($hid)-1)
					$passsql.=$hid[$i][hid].',';
				else $passsql.=$hid[$i][hid]."))";
			}
			}
		}
		//echo $passsql;
		$passStu=$sq->execute_dql2 ($passsql);
		return json_encode($passStu);
	}
	function passmark($str,$shid){
		$sq=new SqlHelper;
		$PerOr="select hid from studenthd where shid in ($shid)";
		$marksql="update studenthd set xf='$str' where shid in ($shid)";
		$passM=$sq->execute_dml ($marksql);
		$judge=$sq->execute_dql ($PerOr);
		//echo $PerOr."<br>".$marksql;
		if($judge[hid]<0 && $passM){
			return 1;
		}else 
			return 2;
	}
	function nopass($shid){
		$sq=new SqlHelper;
		$inglb="insert into glb(sid,hid,tag) select sid,hid,1 from studenthd where shid in (";
		if(is_array($shid)){
			$marksql="delete from studenthd  where shid in ( ";
			for($i=0;$i<count($shid);$i++)
			{	$marksql.="$shid[$i])";
			    $inglb.="$shid[$i])";
			}
		}else 
		{
			$marksql="delete from studenthd  where shid in ($shid)";
			$inglb.="$shid)";
		}
		//echo $marksql."<br>".$inglb;
		if($passN=$sq->execute_dml ($inglb) && $shid>=0)
			return $sq->execute_dml ($marksql);
		else return $sq->execute_dml ($marksql);
		//return $passN;
	}
	function finish($shid,$mt){
			$sq=new SqlHelper;
			if($mt==2){
			$finsql="select count(shid) as num from studenthd where hid in (select hid from studenthd where shid in ($shid)) and xf!=0";
			$sum="select cyrs from adminhd where hid in (select hid from studenthd where shid in ($shid))";
			$number1=$sq->execute_dql ($finsql);
			$number2=$sq->execute_dql ($sum);
			if($number1[num]==$number2[cyrs]){
				$finact="update adminhd set tag=1 where hid in (select hid from studenthd where shid in ($shid))";
				if($sq->execute_dml ($finact))
					return true;
			}else if($number1[num]>$number2[cyrs]){
				$marksql="update studenthd set xf=0 where shid in ($shid)";
				$passM=$sq->execute_dml ($marksql);
				return false;
			}else if($number1[num]<$number2[cyrs]) 
				return true;
		}else return true;
	}
}

if($_SERVER['REQUEST_METHOD']=="POST"){
	$pass=new Pass();
	$passStu=$pass->passstu($_POST['username'],$_POST['acname']);
	$smarty->assign("passStu",$passStu);
	$smarty->display("acpass.html");
}else if(isset($_GET['score'])){
	$xf=floatval($_GET['score']);
	$sid=$_GET['sid'];
	$pass=new Pass();
	$cf=new comfunc();
	$passMark=$pass->passmark($xf,$sid);    //评分
	$passAct=$pass->finish($sid,$passMark);  //判断是否超出人数
	$cf->protectG("Admin_approveact.php",$passAct);
	
}else if(isset($_GET['nshid'])){
	$shid=$_GET['nshid'];
	$pass=new Pass();
	$cf=new comfunc();
	$passNo=$pass->nopass($shid);
	$cf->protectG("Admin_approveact.php",$passNo);
}else {
	$pass=new Pass();
	$passStu=$pass->passstu();
	$smarty->assign("passStu",$passStu);
	$smarty->display("acpass.html");
}
?>