<?php 
require_once '../common/global.php';
echo number_format(1234567890);
$sq=new SqlHelper();
$sql="DESCRIBE admin";
// print_r($sq->execute_dql2 ($sql));
var_dump($_ENV);
// print_r(pathinfo("/www/htdocs/index.html.php?id=2"));
// print_r(parse_url("/www/htdocs/index.html.php?id=2"));

// echo stripos($_SERVER['PHP_SELF'],__DIR__);
echo stripos("am php too!","PHP");

$smarty->display("acall.html");
?>