<?php
require_once '../common/SqlHelper.class.php';
$sq=new Sqlhelper();
/*
$mydbhost = "localhost";
$mydbuser = "root";
$mydbpw = "";
$mydbname = "test";
$mydbchar="GBK"; */


//************Smarty**************
//define('REAL_PATH', dirname(__FILE__)); 新版

$smarty_template_dir = '../templates/';
$smarty_compile_dir ='../templates_c/';
$smarty_config_dir ='../configs/';
$smarty_cache_dir='../cache/';
$smarty_caching=false;
$smarty_delimiter=explode("<{","}>");    //模板左右符号

?>