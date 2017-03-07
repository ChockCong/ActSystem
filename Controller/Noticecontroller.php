<?php 
require_once '../common/global.php';
require_once 'client_cookie.php';
class NotAct{
	function showAct(){
		$sh=new SqlHelper();
		$sa="select hid,hname,kssj,fwdw,lb from adminhd where lb!=0 limit 0,6";
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
		$si="select hid,hname from adminhd where lb=0 limit 0,3";
		$show=$sh->execute_dql2 ($si);
		return $show;
	}
	function showinfor2(){
		$sh=new SqlHelper();
		$si="select nid,bt from news limit 0,3";
		$show=$sh->execute_dql2 ($si);
		return $show;
	}
}
class Allac{
	function showallx(){
		$sh=new SqlHelper();
		$sa="select hid,hname,kssj,fwlx from adminhd where lb!=0 order by kssj";
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
		$si="select hid,hname,fwlx,kssj from adminhd where lb=0 order by kssj";
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
		$si="select nid,bt,time from news";
		$show=$sh->execute_dql2 ($si);
		return $show;
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