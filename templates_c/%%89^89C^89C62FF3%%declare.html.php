<?php /* Smarty version 2.6.30, created on 2017-04-12 03:31:56
         compiled from declare.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'Menu', 'declare.html', 15, false),)), $this); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<title>社会实践管理系统</title>
		<link rel="stylesheet" type="text/css" href="../css/datedropper.css"/>
		<link rel="stylesheet" type="text/css" href="../css/timedropper.min.css"/>
		<link rel="stylesheet" type="text/css" href="../css/reset.css"/>
		<link rel="stylesheet" type="text/css" href="../css/declare.css"/>
	</head>
	<body>
		<div id="all">			
			<div id="nav">
			 <?php echo smarty_function_Menu(array(), $this);?>

			</div>
			<div class="menuHolder">
				<div class="menuWindow">
					<ul class="p1">
						<li class="s1"><a href="#url"><div>活动申报</div></a>
							<ul class="p2">
								<li class="s2"><a href="Declarecontroller.php?declare_title=1" target="change"><span>登记</span></a></li>
								<li class="s2"><a href="Declarecontroller.php?declare_title=2" target="change"><span>修改</span></a></li>
								<!--<li class="s2"><a href="reaccess.html"><span>审批</span></a></li>-->
								</ul>
							</li>
						</ul>
					</div>
				</div>
		<iframe src="Declarecontroller.php?declare_title=1" width="100%" height="100%" frameborder="0" name="change"></iframe>
		</div>
		<script src="../js/jquery-1.12.3.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="../js/timedropper.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="../js/datedropper.min.js" type="text/javascript" charset="utf-8"></script>
		<script>
		$("#pickdate").dateDropper({
			animate: false,
			format: 'Y-m-d',
			maxYear: '2020'
		});
		$("#picktime").timeDropper({
			meridians: false,
			format: 'HH:mm',
		});
		$("#pickdate2").dateDropper({
			animate: false,
			format: 'Y-m-d',
			maxYear: '2020'
		});
		$("#picktime2").timeDropper({
			meridians: false,
			format: 'HH:mm',
		});
		</script>
	</body>
</html>