<?php
require_once '../common/global.php';
class Peract {
	public function Showperact($i, $tag) {
		$sh = new SqlHelper ();
		if ($tag == 1)
			$hdsql = "select * from studenthd where shid=$i";
		else
			$hdsql = "select * from studenthd where shid=$i and xf=0";
		$acts = $sh->execute_dql ( $hdsql );
		return $acts;
	}
	public function Showallact($text) {
		$sh = new SqlHelper ();
		$s = $_COOKIE ['sid'];
		if ($text == "")
			$hdsql = "select * from studenthd where sid=$s and xf=0";
		else
			$hdsql = "select * from studenthd where sid=$s and xf=0 and shname like '%$text%'";
		$acts = $sh->execute_dql2 ( $hdsql );
		return $acts;
	}
	public function permsg($id) {
		$sh = new SqlHelper ();
		$msgsql = "select * from student where sid=$id";
		$Man = $sh->execute_dql ( $msgsql );
		return $Man;
	}
} // 个人&活动信息
class Nopass {
	function nopass($hid) {
		$sq = new SqlHelper ();
		$Nosql = "select g.gid,s.sid,s.snum,s.sname,s.szy,s.sdh from glb g,student s where g.hid='$hid' and g.sid=s.sid and g.tag=0";
		$passMan = $sq->execute_dql2 ( $Nosql );
		return $passMan;
	}
} // 没有通过审核个人信息名单
class Pass {
	function seeact($hid) {
		$sh = new SqlHelper ();
		$hdsql = "select sid,snum,sname,szy,sdh from student where sid in (select sid from studenthd where hid=$hid and xf!=0)";
		$acts = $sh->execute_dql2 ( $hdsql );
		return $acts;
	}
} // 通过审核个人信息
class Actmsg {
	function getam($hid) {
		$sh = new SqlHelper ();
		$amsql = "select hid,hname,fwdw,kssj,jssj,xs,cyrs,fwlx,nr from adminhd where hid=$hid";
		$AM = $sh->execute_dql ( $amsql );
		return $AM;
	}
	function getnw($nid){
		$sh = new SqlHelper ();
		$amsql = "select n.bt,n.nr,n.time,a.xym from news n,admin a where nid=$nid and n.hnid=a.aid";
		$AM = $sh->execute_dql ( $amsql );
		return $AM;
	}
}//acnote活动详情

// --------------------------------查看历史活动程序
if (! empty ( $_GET ['shid'] )) {
	$i = $_GET ['shid'];
	$peract = new Peract ();
	$Acts = $peract->Showperact ( $i, 1 ); // 选择历史活动
	if ($Acts [fwlx] == 'vs')
		$Acts [fwlx] = "志愿服务";
	else
		$Acts [fwlx] = "社会实践";
	$str = "<ul><li>活动名称：<p>" . $Acts [shname] . "</p></li><li>活动时间：<p>" . $Acts [kssj] . "-" . $Acts [jssj] . "</p></li>" . "<li>活动时长：<p>" . $Acts [time1] . "-" . $Acts [time2] . "</p></li><li>活动类型：<p>$Acts[fwlx]</p></li>" . "<li>活动内容：<span>" . $Acts [nr] . "</span></li><li>实践得分：<p>" . $Acts [xf] . "</p></li></ul>";
	echo $str;
	// echo json_encode(array('jsonObj'=>$Acts));
}

// --------------------------------修改申报活动程序
if (! empty ( $_GET ['chid'] )) {
	$i = $_GET ['chid'];
	$peract = new Peract ();
	$Acts = $peract->Showperact ( $i, 0 ); // 选择历史活动
	echo json_encode ( array (
			'jsonObj' => $Acts 
	) );
}

// //--------------------------------查看未通过审核人信息
// if(!empty($_GET['hid'])){
// $id=$_GET['hid'];
// $np=new Nopass();
// $npMsg=$np->nopass($id);
// echo json_encode($npMsg);
// }

// --------------------------------查看学生个人信息
if (! empty ( $_GET ['sid'] )) {
	$id = $_GET ['sid'];
	$per = new Peract ();
	$perMsg = $per->permsg ( $id );
	$str = "<div class='line'>
						<label for='username'>学号：<p id='username'>" . $perMsg [snum] . "</p></label>
						<label for='nation'>民族：<p id='nation'>" . $perMsg [smz] . "</p></label>
						<label for='idnum'>身份证：<p id='idnum'>" . $perMsg [ssfj] . "</p></label>
						<label for='source'>生源地：<p id='source'>" . $perMsg [ssyd] . "</p></label>
						<label for='mail'>邮箱：<p id='mail'>" . $perMsg [smail] . "</p><p class='vital'></p></label>
						<label for='grade'>年级：<p id='grade'>" . $perMsg [snj] . "</p></label>
						<label for='subject'>专业：<p id='subject'>" . $perMsg [szy] . "</p></label>
						<label for='scsys'>学制：<p id='scsys'>" . $perMsg [sxz] . "</p></label>
					</div>
					<div class='line'>
						<label for='stuname'>姓名：<p  id='stuname'>" . $perMsg [sname] . "</p><p class='vital'></p></label>
						<label for='sex'>性别：<p id='sex'>" . $perMsg [sxb] . "</p></label>
						<label for='polistatus'>政治面貌：<p  id='polistatus'>" . $perMsg [zjmm] . "</p></label>
						<label for='longtell'>长号：<p  id='longtell'>" . $perMsg [sdh] . "</p><p class='vital'></p></label>
						<label for='shorttell'>短号：<p  id='shorttell'>" . $perMsg [sdh2] . "</p></label>
						<label for='institute'>学院：<p id='institute'>" . $perMsg [sxy] . "</p></label>
						<label for='class'>班号：<p id='class'>" . $perMsg [sbh] . "</p></label>
						<label for='level'>层次：<p id='level'>" . $perMsg [scc] . "</p></label>
					</div>";
	echo $str;
	// echo json_encode($perMsg);
}

// --------------------------------查看通过审核已评分个人信息acall.html
if (! empty ( $_GET ['nhid'] )) {
	$hid = $_GET ['nhid'];
	$actMsg = new Pass ();
	$AM = $actMsg->seeact ( $hid );
	echo json_encode ( array (
			'jsonObj' => $AM 
	) );
}

// --------------------------------查看未通过审核人信息score.html
if (! empty ( $_GET ['yhid'] )) {
	$hid = $_GET ['yhid'];
	$actMsg = new Nopass ();
	$NM = $actMsg->nopass ( $hid );
	echo json_encode ( array (
			'jsonObj' => $NM 
	) );
	// print_r($NM);
}

// --------------------------------查看活动详细信息reaccess.html
if (! empty ( $_GET ['rhid'] )) {
	$hid = $_GET ['rhid'];
	$ActMsg = new Actmsg ();
	$AM = $ActMsg->getam ( $hid );
	if ($AM[fwlx] == 'vs')
		$AM[fwlx] = "志愿服务";
	else if ($AM[fwlx] == 'sc')
		$AM[fwlx] = "社会实践";
	else
		$AM[fwlx] = "校外调研";
	$str = "<form action='Noticecontroller.php' method='post' id='myform'>
				<label>活动名称：<p name='acname'>".$AM[hname]."</p></label>
				<label>活动地点：<p name='acaddr'>".$AM[fwdw]."</p></label>
				<label>活动时间：<p>".$AM[kssj].'-'.$AM[jssj]."</p></label>
				<label>活动时长：<p>".$AM[xs]."</p>小时</label>
				<label>参与人数：<p>".$AM[cyrs]."</p>人</label>					
				<label>活动类型：<p name='actype'>".$AM[fwlx]."</p></label>
				<label>活动内容：</label>  
				<p class='cont'>".$AM[nr]."</p> 	
				<input type='text' name='hid' value='$AM[hid]' hidden/>								
				<input type='submit' value='立即报名'/>
				<!--<input type='button' id='return' value='返回'/>-->										
			</form>";
	echo $str;
}

if (! empty ( $_GET ['news'] )) {
	$nid = $_GET ['news'];
	$ActMsg = new Actmsg ();
	$NM = $ActMsg->getnw ( $nid );
	$str="<form action='#' method='post'>
			 <label class='notetitle'>".$NM[bt]."</label>
			 <label class='cont'>".$NM[nr]."</label>										
			 <p class='right'>".$NM[xym]."</p>
			 <p class='right'>".$NM[time]."</p>									
		  </form>";
	echo $str;
}
?>