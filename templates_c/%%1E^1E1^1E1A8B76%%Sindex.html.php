<?php /* Smarty version 2.6.30, created on 2017-03-02 13:06:20
         compiled from Sindex.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'Menu', 'Sindex.html', 21, false),)), $this); ?>
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
					<a href="../Controller/Indexcontroller.php"><?php echo $_COOKIE['student']; ?>
</a>
					<a href="../Controller/Logincontroller.php">注销</a>
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
				<a href="#">活动公告查看</a>
			</div>
		</div>
	</body>
</html>