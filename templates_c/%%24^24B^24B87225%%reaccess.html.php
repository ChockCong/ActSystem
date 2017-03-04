<?php /* Smarty version 2.6.30, created on 2017-03-04 06:05:00
         compiled from reaccess.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'Menu', 'reaccess.html', 18, false),)), $this); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>社会实践管理系统</title>
		<link rel="stylesheet" type="text/css" href="../css/reset.css"/>
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css"/>
		<link rel="stylesheet" type="text/css" href="../css/notice.css"/>
	</head>
	<body>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-sm-2 col-md-2"></div>
				<div class="col-xs-12 col-sm-8 col-md-8">
					<div id="main">
						<!--导航-->
							<div id="nav">
							<?php echo smarty_function_Menu(array(), $this);?>

							</div>
						<!--返回-->
						<div id="back">
							<ul>
								<li><i class="glyphicon glyphicon-home"></i></li>
								<li><a href="#">首页</a></li>
								<li><i class="glyphicon glyphicon-menu-right"></i></li>
								<li><a href="#">活动概览</a></li>
							</ul>
						</div>
						<!--选项卡-->
						<div id="actab">
							<div id="container">
							<div  id="tabs">								
								<ul>
									<!--<li class="non">/</li>-->
									<li class="tab active" id="tab-1">校级活动</li>
									<li class="tab" id="tab-2">学院特色</li>
								</ul>
							</div>
							<div id="show">
								<!--校级活动-->
								<div class="showed active" id="show1">
									<div class="perac">
										<ul>
										<?php $_from = $this->_tpl_vars['Showallx']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['val']):
?>
											<li>
												<span>[<p class="actype"><?php echo $this->_tpl_vars['val']['lb']; ?>
</p>]</span>
												<a href="#"><?php echo $this->_tpl_vars['val']['hname']; ?>
</a>
												<p><?php echo $this->_tpl_vars['val']['kssj']; ?>
</p>
											</li>
										<?php endforeach; endif; unset($_from); ?>
											<li>
												<span>[<p class="actype">志愿服务</p>]</span>
												<a href="#">电脑义务维修</a>
												<p>2017/3/4 9:00</p>
											</li>
											<li>
												<span>[<p class="actype">志愿服务</p>]</span>
												<a href="#">电脑义务维修</a>
												<p>2017/3/4 9:00</p>
											</li>
										</ul>
									</div>
								</div>
								<!--学院特色-->
								<div class="showed" id="show2">
									<div class="perac">
										<ul>
										<?php $_from = $this->_tpl_vars['Showally']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['val']):
?>
											<li>
												<span>[<p class="actype"><?php echo $this->_tpl_vars['val']['fwlx']; ?>
</p>]</span>
												<a href="#"><?php echo $this->_tpl_vars['val']['hname']; ?>
</a>
												<p><?php echo $this->_tpl_vars['val']['kssj']; ?>
</p>
											</li>
										<?php endforeach; endif; unset($_from); ?>
											<li>
												<span>[<p class="actype">社会实践</p>]</span>
												<a href="#">三下乡社会实践活动</a>
												<p>2017/7/10 8:00</p>
											</li>
											<li>
												<span>[<p class="actype">社会实践</p>]</span>
												<a href="#">三下乡社会实践活动</a>
												<p>2017/7/10 8:00</p>
											</li>
										</ul>
									</div>
								</div>
							</div>
							</div>						
							<!--图片-->
							<div id="pic">
								<div id="pic1"></div>
								<div id="pic2"></div>
								<div id="pic3"></div>
							</div>
						</div>								
					</div>
				</div>
				<div class="col-xs-12 col-sm-2 col-md-2"></div>
			</div>
		</div>
			<script src="../js/jquery-1.12.3.min.js"  type="text/javascript"></script>
	<script src="../js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
			
		<script type="text/javascript">
			
			//切换功能
		$(function(){
			var $tab = $(".tab");
			var $show1 = $("#show1");
			var $show2 = $("#show2");
			$tab.eq(0).click(function(){
				$tab.eq(1).removeClass("active");
				$show2.removeClass("active");
				$(this).addClass("active");
				$show1.addClass("active");
			});
			$tab.eq(1).click(function(){
				$tab.eq(0).removeClass("active");
				$show1.removeClass("active");
				$(this).addClass("active");
				$show2.addClass("active");
			});
			});
		</script>
	</body>
</html>