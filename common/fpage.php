<?php 
class fpage{
	
	var $pageNow=1;
	var $pageCount;
	var $pageSize=1;
	var $rowCount;
	var $navigator;
	var $res="";
	var $Url;
	var $condition="";
	
	public function getNavigator(){
		return $this->navigator;
	}
	
	public function getpageCount(){
		return $this->pageCount;
	}
	
	
}



/* 	public function showBypage($fpage,$content){
 $sqls[0]="select count(*) from glb where hid=$content";//数据量
 $sqls[1]="select snum,sname from glb as b,student as t where hid=$content and b.sid=t.sid limit ".//关联表查询数据
 ($fpage->pageNow-1)*$pageSize.",".$fpage->pageSize;
 $Sq= new Sqlhelper;
 $Sq->execute_dql_page ($sqls,$fpage);
 $Sq->my_close ();
 
 } */
?>