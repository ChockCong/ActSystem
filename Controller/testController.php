<?php 
/* header("Content-type:text/html;charset=utf8");
function showBypage($fpage,$content){
	$sqls[0]="select count(*) from  glb where hid=1";//数据量
	/*$sqls[1]="select snum,sname from glb as b,student as t where hid=1 and b.sid=t.sid limit ".//关联表查询数据
			($fpage->pageNow-1)*$fpage->pageSize.",".$fpage->pageSize;*/
/*	$sqls[1]="SELECT snum, sname FROM glb AS b, student AS t WHERE hid =1 AND b.sid = t.sid LIMIT ".
    ($fpage->pageNow-1)*$pageSize.",".$fpage->pageSize;
	$Sq= new Sqlhelper;
	$Sq->execute_dql_page ($sqls,$fpage);
	$Sq->my_close ();
} */


require_once '../common/global.php';
require_once '../common/fpage.php';

/*
$fp=new fpage();
showBypage($fp,"");
$smarty->assign("row",$fp->res);
$smarty->display("index.html"); 
*/


$A=array("name","Location","date","time","type","text");
$B=array("$_POST[]");
echo "name:"
?>