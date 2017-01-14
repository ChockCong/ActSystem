<?php

class action extends  Sqlhelper{
	public  function get_show_msg($url,$show ='操作已成功'){
		$msg='<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
        <html><head>
		<meta charset="utf-8" />
        <meta http-equiv="Content-Type" content="text/html; charset=GBK">
	    <link rel="stylesheet" href="Public/common.css" type="text/css"/>
		<meta http-equit="refresh" content="2; url='.$url.'"/>		
        <title>消息提示</title>
        </head>
        <body>
                                   提示信息
				<p>'.$show.'<br/>
			    2秒后返回指定界面！<br/>
				如果浏览器无法跳转，<a href="'.$url.'">请点击</a>.  <!--此处url需要跳转到另一控制器-->
				</p>
        </body>
        </html>';
		echo $msg;

		
		
	}
}  //end class
?>