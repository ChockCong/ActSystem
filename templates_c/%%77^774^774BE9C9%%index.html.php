<?php /* Smarty version 2.6.30, created on 2017-02-09 03:54:05
         compiled from index.html */ ?>
<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8" />
		<title>社会实践管理系统</title>
		<link rel="stylesheet" type="text/css" href="../css/index.css"/>
		<link rel="stylesheet" type="text/css" href="../css/reset.css"/>
	</head>
	<body>
		<header>
			<div id="left">
				<div class="logo"></div>
				<div class="title">
					<p>社会实践</p>
					<a href="#"><?php echo $_COOKIE['student']; ?>
</a>
					<a href="<?php echo $this->_tpl_vars['logoff']; ?>
">注销</a>
				</div>
			</div>
			<div id="nav">
				<ul>
					<li><a href="UIcontroller.php?title=1">公告通知</a></li>
					<li><a href="UIcontroller.php?title=2">活动申报</a></li>
					<li><a href="UIcontroller.php?title=3">个人活动</a></li>
					<li><a href="UIcontroller.php?title=4">个人信息</a></li>
				</ul>
			</div>
		</header>
		<div id="main">
			<div id="img">					
				<div class="pic"></div>
				<div class="pic"></div>
				<div class="pic"></div>
				<div class="pic"></div>
			</div>
			<div id="center">				
				<div id="circle">
					<div id="shsjc"></div>
					<span>一日一善</span>	
				</div>
				<p>服务在我心		实践看我行</p>
				<a href="#">活动公告查看</a>
			</div>
		</div>
	</body>
</html>