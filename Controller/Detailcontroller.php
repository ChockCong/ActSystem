<?php 
require_once '../common/global.php';

class Peract{
	public function Showperact($i){
		$sh=new SqlHelper();
		$hdsql="select * from studenthd where shid=$i and xf!=0";
		$acts=$sh->execute_dql ($hdsql);
		return $acts;
	}

} //活动信息model

if(!empty($_GET['hid'])){
	$i=$_GET['hid'];
	$peract=new Peract();
	$Acts=$peract->Showperact($i);     //选择历史活动
	if($Acts[fwlx]=='vs') $Acts[fwlx]="志愿服务";
	else $Acts[fwlx]="社会实践";
	echo "<ul><li>活动名称：<p>".$Acts[shname]."</p></li><li>活动时间：<p>".$Acts[kssj]."-".$Acts[jssj]."</p></li>"
		."<li>活动时长：<p>".$Acts[time1]."-".$Acts[time2]."</p></li><li>活动类型：<p>$Acts[fwlx]</p></li>"
		."<li>活动内容：<span>".$Acts[nr]."</span></li><li>实践得分：<p>".$Acts[xf]."</p></li></ul>";
}


?>