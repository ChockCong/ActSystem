<?php /* Smarty version 2.6.30, created on 2017-04-12 06:22:52
         compiled from Sindex.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'Menu', 'Sindex.html', 19, false),)), $this); ?>
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
				</div>
			</div>
			<div id="nav">
			  <?php echo smarty_function_Menu(array(), $this);?>

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
				<a href="../Controller/Noticecontroller.php">活动公告查看</a>
			</div>
		</div>
		<footer>
			<p>2017 &copy;
				<a href="http://www.zqu.edu.cn/">肇庆学院</a> Social Activity Management System
			</p>
		</footer>
	</body>
</html>