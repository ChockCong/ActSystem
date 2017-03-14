<?php
require('../common/global.php');

mysqli_query($sq->conn,"set names utf8");
$sid=$_COOKIE['sid'];
$sq=new SqlHelper();
$sq->execute_dql ("set names gb2312");

$stusql="select s.sname,s.snum,s.sxy,sum(h.xf) as xf from student s,studenthd h where s.sid='$sid' and s.sid=h.sid";
$perinfo=$sq->execute_dql ($stusql);
$perinfo['xf']=round($perinfo['xf'],1);
if($perinfo['xf']>=2) array_push($perinfo,"2.0");
else array_push($perinfo,"0");
//个人信息

$actsql="select * from studenthd where sid=$sid and xf!=0";
$actinfo=$sq->execute_dql2 ($actsql);
//活动得分





?>