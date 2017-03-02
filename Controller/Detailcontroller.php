<?php 
require_once '../common/global.php';


class Peract{
	public function Showperact($i,$tag){
		$sh=new SqlHelper();
		if($tag==1)
			$hdsql="select * from studenthd where shid=$i and xf!=0";
		else 
			$hdsql="select * from studenthd where shid=$i and xf=0";
		$acts=$sh->execute_dql ($hdsql);
		return $acts;
	}
	public function Showallact($text){
		$sh=new SqlHelper();
		$s=$_COOKIE['sid'];
		if($text=="")
			$hdsql="select * from studenthd where sid=$s and xf=0";
		else 
			$hdsql="select * from studenthd where sid=$s and xf=0 and shname like '%$text%'";
		$acts=$sh->execute_dql2 ($hdsql);
		return $acts;
	}
	public function permsg($id){
		$sh=new SqlHelper();
		$msgsql="select * from student where sid=$id";
	}
} //活动信息model

//查看历史活动程序
if(!empty($_GET['shid'])){
	$i=$_GET['shid'];
	$peract=new Peract();
	$Acts=$peract->Showperact($i,1);     //选择历史活动
	if($Acts[fwlx]=='vs') $Acts[fwlx]="志愿服务";
	else $Acts[fwlx]="社会实践";
 	$str= "<ul><li>活动名称：<p>".$Acts[shname]."</p></li><li>活动时间：<p>".$Acts[kssj]."-".$Acts[jssj]."</p></li>"
 		."<li>活动时长：<p>".$Acts[time1]."-".$Acts[time2]."</p></li><li>活动类型：<p>$Acts[fwlx]</p></li>"
 		."<li>活动内容：<span>".$Acts[nr]."</span></li><li>实践得分：<p>".$Acts[xf]."</p></li></ul>";
 	echo $str;
	//echo json_encode(array('jsonObj'=>$Acts));
}

//修改申报活动程序
if(!empty($_GET['chid'])){
	$i=$_GET['chid'];
	$peract=new Peract();
	$Acts=$peract->Showperact($i,0);     //选择历史活动
	echo json_encode(array('jsonObj'=>$Acts));
}

if(!empty($_GET['sid'])){
	$id=$_GET['sid'];
	echo $i;
// 	$peract=new Peract();
// 	$pMsg=$peract->permsg();
// 	echo json_encode(array('jsonObj'=>$pMsg));
}

?>