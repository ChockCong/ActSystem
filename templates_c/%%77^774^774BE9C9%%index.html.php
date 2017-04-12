<?php /* Smarty version 2.6.30, created on 2017-04-12 03:27:59
         compiled from index.html */ ?>
<!DOCTYPE html>

<html>

	<head>
		<meta charset="utf-8">
		<title>社会实践管理系统</title>
		<meta name="renderer" content="webkit">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="format-detection" content="telephone=no">

		<link rel="stylesheet" href="../plugins/layui/css/layui.css" media="all" />
		<link rel="stylesheet" href="../css/global.css" media="all">
		<link rel="stylesheet" href="../plugins/font-awesome/css/font-awesome.min.css">

	</head>

	<body>
		<div class="layui-layout layui-layout-admin">
			<div class="layui-header header header-demo">
				<div class="layui-main">
					<div class="admin-login-box">
						<a class="logo" style="left: 0;" href="#">
							<span style="font-size: 22px;">社会实践管理系统</span>
						</a>
						<div class="admin-side-toggle">
							<i class="fa fa-bars" aria-hidden="true"></i>
						</div>
					</div>
					<ul class="layui-nav admin-header-item">
						<li class="layui-nav-item">
							<a href="../Controller/Logincontroller.php"><i class="fa fa-sign-out" aria-hidden="true"></i> 注销</a>
						</li>
						<!--<li class="layui-nav-item">
							<a href="javascript:;">浏览网站</a>
						</li>
						<li class="layui-nav-item" id="video1">
							<a href="javascript:;">信息</a>
						</li>-->
						<li class="layui-nav-item">
							<a href="javascript:;" class="admin-header-user">
								<img src="../img/manager.jpg" />
								<span><?php echo $_SESSION['aname']; ?>
</span>
							</a>
							<!--<dl class="layui-nav-child">
								<dd>
									<a href="javascript:;"><i class="fa fa-user-circle" aria-hidden="true"></i> 个人信息</a>
								</dd>
								<dd>
									<a href="javascript:;"><i class="fa fa-gear" aria-hidden="true"></i> 设置</a>
								</dd>
								<dd id="lock">
									<a href="javascript:;">
										<i class="fa fa-lock" aria-hidden="true" style="padding-right: 3px;padding-left: 1px;"></i> 锁屏 (Alt+L)
									</a>
								</dd>
								<dd>
									<a href="login.html"><i class="fa fa-sign-out" aria-hidden="true"></i> 注销</a>
								</dd>
							</dl>-->
						</li>
					</ul>
					<!--<ul class="layui-nav admin-header-item-mobile">
						<li class="layui-nav-item">
							<a href="login.html"><i class="fa fa-sign-out" aria-hidden="true"></i> 注销</a>
						</li>
					</ul>-->
				</div>
			</div>
			<div class="layui-side layui-bg-black" id="admin-side">
				<div class="layui-side-scroll" id="admin-navbar-side" lay-filter="side"></div>
			</div>
			<div class="layui-body" style="bottom: 0;border-left: solid 2px #1AA094;" id="admin-body">
				<div class="layui-tab admin-nav-card layui-tab-brief" lay-filter="admin-tab">
					<ul class="layui-tab-title">
						<li class="layui-this">
							<i class="fa fa-dashboard" aria-hidden="true"></i>
							<cite>控制面板</cite>
						</li>
					</ul>
					<div class="layui-tab-content" style="min-height: 150px; padding: 5px 0 0 0;">
						<div class="layui-tab-item layui-show" style="height:100%;background: url(../img/bg1.jpg);filter:alpha(opacity=80);-moz-opacity:0.8;background-size: 100% 615px;">
							<p style="font-size: 5em;font-weight:600;text-align: center;letter-spacing:5px;padding-top: 150px;text-shadow: 4px 4px 6px rgba(0,0,0,.3);">社会实践活动管理系统<br />管理员平台</p>
						</div>
						<!--<div class="layui-tab-item layui-show">
							<iframe src="main.html"></iframe>
						</div>-->
					</div>
					<!--<div class="layui-tab-content" style="min-height: 150px; padding: 5px 0 0 0;">
					</div>-->
				</div>
			</div>
			<div class="layui-footer footer footer-demo" id="admin-footer" style="z-index: 1000;">
				<div class="layui-main">
					<p>2017 &copy;
						<a href="http://www.zqu.edu.cn/">肇庆学院</a> Social Activity  Management System
					</p>
				</div>
			</div>
			<div class="site-tree-mobile layui-hide">
				<i class="layui-icon">&#xe602;</i>
			</div>
			<div class="site-mobile-shade"></div>
			
			<!--锁屏模板 start-->
			<script type="text/template" id="lock-temp">
				<div class="admin-header-lock" id="lock-box">
					<div class="admin-header-lock-img">
						<img src="../img/0.jpg"/>
					</div>
					<div class="admin-header-lock-name" id="lockUserName">beginner</div>
					<input type="text" class="admin-header-lock-input" value="输入密码解锁.." name="lockPwd" id="lockPwd" />
					<button class="layui-btn layui-btn-small" id="unlock">解锁</button>
				</div>
			</script>
			<!--锁屏模板 end -->
			
			<script type="text/javascript" src="../plugins/layui/layui.js"></script>
			<script type="text/javascript" src="../datas/nav.js"></script>
			<script type="text/javascript" src="../js/index.js"></script>
			<script>

			//配置自己的js加载路径

				layui.use('layer', function() {
					var $ = layui.jquery,
						layer = layui.layer;

//					$('#video1').on('click', function() {
//						layer.open({
//							title: 'YouTube',
//							maxmin: true,
//							type: 2,
//							content: 'video.html',
//							area: ['800px', '500px']
//						});
//					});

				});
			</script>
		</div>
	</body>

</html>