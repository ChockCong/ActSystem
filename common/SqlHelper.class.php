
 <?php
 /**
  * @author Dzx
  *
  */
 class Sqlhelper
 {
     var $dbname = "rsql";
     var $host = "localhost";
     var $username = "root";
     var $userpass = "";
     var $conn;
     function __construct ()
     {
         $this->conn = mysql_connect($this->host,
         $this->username, $this->userpass);
         if (! $this->conn) {
             die(
             "数据库连接失败" . mysql_error());
         }
         mysql_query("set names utf8");
         mysql_query("use $this->dbname",
         $this->conn) or die("选择数据出错");
     }
     //提供查询语句
     function execute_dql ($sql)
     {
         $res = mysql_query($sql) or die(
         "SQL查询语句有误");
         $rs = mysql_fetch_assoc($res);
         return $rs;
     }
 	function execute_dql2 ($sql)
	{
		$res = mysql_query($sql) or die(
				"SQL查询语句有误".$sql);
		//$rs_arr = array();
		while ($rs = mysql_fetch_assoc($res)) {
			$rs_arr[] = $rs;
		}
		return $rs_arr;
	}
     //添加，删除，修改
     function execute_dml ($sql)
     {
         $res = mysql_query($sql) or die(
         "dml语句有误");
         if ($res) {
             $rows = mysql_affected_rows(
             $this->conn);
             if ($rows > 0) {
                 return true;
             } else {
                 return 0;
             }
         } else {
             return 0;
         }
         $this->my_close ();
     }
    
    
     //分页的查询调用
 //因为分页功能是一个通用的功能.所有也一个函数来处理   
        function execute_dql_page($sqls,$fenyepage){
        	$res=$this->execute_dql2 ($sqls[0]);
           //执行SQL语句，查出有多少条记录 
             //$fenyepage->rowcount = mysql_num_rows ( mysql_query ( $sqls[0] ) );
           //echo $fenyepage->rowcount; exit();
           //执行SQL语句，查出要查看的记录
           $fenyepage->pageCount= ceil($res[0]['count(*)']/($fenyepage->pageSize));
           $fenyepage->rowCount=$res[0]['count(*)'];
           $fenyepage->res=$this->execute_dql2 ($sqls[1]);
 
           
           //显示上一页
           if($fenyepage->pageNow>1){
           	 $pre_page=$fenyepage->pageNow-1;
           	 $fenyepage->navigator.="<a 
           	 href='<{$fenyepage->Url}?pageNow=<{$pre_page}><{$fenyepage->condition}>'>上一页</a>
           	 &nbsp;&nbsp;";
           }
           
           //显示下一页
           if($fenyepage->pageNow<$fenyepage->pageCount){
           	$next_page=$fenyepage->pageNow+1;
           	$fenyepage->navigator.="<a
           	href='<{$fenyepage->Url}?pageNow=<{$next_page}><{$fenyepage->condition}>'>下一页</a>
           	&nbsp;&nbsp;";
           }
        }
       
    
     //关掉连接
     function my_close ()
     {
         if (! empty($this->conn)) {
             mysql_close($this->conn);
         }
     }
     
     
 
       
/*     Function Runtime($mode=0){
    Static $s;
    IF(!$mode){
        $s=microtime();
        Return;
    }
    $e=microtime();
    $s=Explode(" ", $s);
    $e=Explode(" ", $e);
    Return Sprintf("%.2f ms",($e[1]+$e[0]-$s[1]-$s[0])*1000);
} */
       
       
 } 
?>