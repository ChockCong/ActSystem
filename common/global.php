<?php
header("Content-type:text/html;charset=utf-8");
error_reporting(0);
include_once '../configs/configs.php';
include_once '../smarty/Smarty.class.php';

// include_once 'SqlHelper.class.php';
//include_once 'action.class.php';




//$db=new action($mydbhost,$mydbuser,$mydbpw,$mydbname,ALL_PS,$mydbcharset);

//smarty

$smarty=new Smarty();
$smarty->template_dir=$smarty_template_dir;
$smarty->compile_dir=$smarty_compile_dir;
$smarty->config_dir=$smarty_config_dir;
$smarty->cache_dir=$smarty_cache_dir;
$smarty->caching=$smarty_caching;
$smarty->left_delimiter="<{";
$smarty->right_delimiter="}>";
session_start();
?>