<?php 
require_once '../common/global.php';
require_once 'client_cookie.php';
class NotAct{
	function showAct(){
		$sh=new SqlHelper();
		$sa="select hid,hname,kssj,fwdw,lb from adminhd where lb=0  and tag=2 order by kssj desc limit 0,6 ";
		$show=$sh->execute_dql2 ($sa);
		for($i=0;$i<count($show);$i++){
			if($show[$i][lb]==1) $show[$i][lb]="survice";
			else if($show[$i][lb]==2) $show[$i][lb]="survey";
			else $show[$i][lb]="ssac";
		}
		return $show;
	}
	function showinfor1(){
		$sh=new SqlHelper();
		$si="select hid,hname from adminhd where lb=(select aid from admin where xym=(select sxy from student where sid='$_COOKIE[sid]')) and tag=2 order by kssj desc  limit 0,3 ";
		$show=$sh->execute_dql2 ($si);
		return $show;
	}
	function showinfor2(){
		$sh=new SqlHelper();
		$si="select nid,bt from news where hnid in ((select a.aid from student s,admin a where a.xym=s.sxy and s.sid=$_COOKIE[sid]),0) order by time desc limit 0,3 ";
		$show=$sh->execute_dql2 ($si);
		return $show;
	}
}
class Allac{
	function showallx(){
		$sh=new SqlHelper();
		$sa="select hid,hname,kssj,fwlx from adminhd where lb=0 and tag=2 order by kssj desc";
		$show=$sh->execute_dql2 ($sa);
		for($i=0;$i<count($show);$i++){
			if($show[$i][lb]==1) $show[$i][lb]="志愿服务";
			else if($show[$i][lb]==2) $show[$i][lb]="校外调研";
			else $show[$i][lb]="社会实践";
		}
		return $show;
	}
	function showally(){
		$sh=new SqlHelper();
		$si="select hid,hname,fwlx,kssj from adminhd where lb!=0 and fbdw=(select sxy from student where sid=$_COOKIE[sid]) and tag=2 order by kssj desc";
		$show=$sh->execute_dql2 ($si);
		for($i=0;$i<count($show);$i++){
			if($show[$i][lb]==1) $show[$i][fwlx]="志愿服务";
			else if($show[$i][lb]==2) $show[$i][fwlx]="校外调研";
			else $show[$i][fwlx]="社会实践";
		}
		return $show;
	}
	function showalln(){
		$sh=new SqlHelper();
		$si="select nid,bt,time from news where hnid in ((select a.aid from student s,admin a where a.xym=s.sxy and s.sid=$_COOKIE[sid]),0) order by time desc";
		$show=$sh->execute_dql2 ($si);
		return $show;
	}
}
class BM{
	function bmact($hid,$sid){
		$sq=new SqlHelper();
		$ck="select gid from glb where hid=$hid and sid=$sid and tag=0";
		$bm="insert into glb(sid,hid) values ('$sid','$hid')";
		if(!$sq->execute_dml ($ck)){
			$sq->execute_dml ($bm);
			echo "<script>alert('报名成功！');history.go(-1);</script>";
			
		}else{
			echo "<script>alert('已报名此活动！');history.go(-1);</script>";
		}
	}
}
if(isset($_GET[note_title])){
	$All=new Allac();
	$Showallx=$All->showallx();
	$Showally=$All->showally();
	$Showalln=$All->showalln();
	$smarty->assign("Showallx",$Showallx);
	$smarty->assign("Showally",$Showally);
	$smarty->assign("Showalln",$Showalln);
	$smarty->display("reaccess.html");
}else if(isset($_POST['hid'])){
	$hid=$_POST['hid'];
	$sid=$_COOKIE['sid'];
	$Bmact=new BM();
	$Bmact->bmact($hid,$sid);
}else {
	$Act=new NotAct();
	$Showact=$Act->showAct();
	$Showinfo1=$Act->showinfor1();
	$Showinfo2=$Act->showinfor2();
	$smarty->assign("Showinfo1",$Showinfo1);
	$smarty->assign("Showinfo2",$Showinfo2);
	$smarty->assign("Showact",$Showact);
	$smarty->display("acnote.html");
}

?>