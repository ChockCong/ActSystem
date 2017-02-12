<?php 
require '../common/global.php';
 class Peract{
	var $time="";
	var $actname="";
	var $mark=0;
	function __set($time,$actname,$mark){
		
		$this->time=$time;
		$this->actname=$actname;
		$this->mark=$actname;
	}
	function get(){
		echo $this->actname;
		//return $this;
	}
	
} 
if(isset($_COOKIE['sid'])){
	$sid=$_COOKIE['sid'];
	$sh=new SqlHelper();
	$peract=new Peract();
	$hdsql="select * from studenthd where sid=$sid";
	
	$acts=$sh->execute_dql2 ($hdsql);
	$actrow=$sh->execute_dml ($hdsql);
	
	echo $acts[0]['fwsj'].$acts[0]['shname'].$acts[0]['xf'];
	for($i=0;$i<$actrow;$i++){
		$peract->set($acts[i]['fwsj'],$acts[i]['shname'],$acts[i]['xf']);
		$peract->get();
	}
	echo $$peract->actname;
}
?>