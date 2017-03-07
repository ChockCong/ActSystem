<?php /* Smarty version 2.6.30, created on 2017-03-07 06:04:23
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
									<li class="tab" id="tab-3">通知公告</li>
								</ul>
							</div>
							<div id="show">
								<!--校级活动-->
								<div class="showed active" id="show1">
									<div class="scroll">
									<div class="perac">
										<ul>
										<?php $_from = $this->_tpl_vars['Showallx']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['val']):
?>
											<li>
												<span>[<p class="actype"><?php echo $this->_tpl_vars['val']['lb']; ?>
</p>]</span>
												<a href="#" class="todetele"><?php echo $this->_tpl_vars['val']['hname']; ?>
</a>
												<p><?php echo $this->_tpl_vars['val']['kssj']; ?>
</p>
											</li>
										<?php endforeach; endif; unset($_from); ?>
											<li>
												<span>[<p class="actype">志愿服务</p>]</span>
												<a href="#" class="todetele">电脑义务维修</a>
												<p>2017/3/4 9:00</p>
											</li>
											<li>
												<span>[<p class="actype">志愿服务</p>]</span>
												<a href="#" class="todetele">电脑义务维修</a>
												<p>2017/3/4 9:00</p>
											</li>
																						<li>
												<span>[<p class="actype">志愿服务</p>]</span>
												<a href="#" class="todetele">电脑义务维修</a>
												<p>2017/3/4 9:00</p>
											</li>											<li>
												<span>[<p class="actype">志愿服务</p>]</span>
												<a href="#" class="todetele">电脑义务维修</a>
												<p>2017/3/4 9:00</p>
											</li>											<li>
												<span>[<p class="actype">志愿服务</p>]</span>
												<a href="#" class="todetele">电脑义务维修</a>
												<p>2017/3/4 9:00</p>
											</li>											<li>
												<span>[<p class="actype">志愿服务</p>]</span>
												<a href="#" class="todetele">电脑义务维修</a>
												<p>2017/3/4 9:00</p>
											</li>											<li>
												<span>[<p class="actype">志愿服务</p>]</span>
												<a href="#" class="todetele">电脑义务维修</a>
												<p>2017/3/4 9:00</p>
											</li>
										</ul>
									</div>
									</div>
								</div>
								<!--学院特色-->
								<div class="showed" id="show2">
									<div class="scroll">
									<div class="perac">
										<ul>
										<?php $_from = $this->_tpl_vars['Showally']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['val']):
?>
											<li>
												<span>[<p class="actype"><?php echo $this->_tpl_vars['val']['fwlx']; ?>
</p>]</span>
												<a href="#" class="todetele"><?php echo $this->_tpl_vars['val']['hname']; ?>
</a>
												<p><?php echo $this->_tpl_vars['val']['kssj']; ?>
</p>
											</li>
										<?php endforeach; endif; unset($_from); ?>
											<li>
												<span>[<p class="actype">社会实践</p>]</span>
												<a href="#" class="todetele">三下乡社会实践活动</a>
												<p>2017/7/10 8:00</p>
											</li>
											<li>
												<span>[<p class="actype">社会实践</p>]</span>
												<a href="#" class="todetele">三下乡社会实践活动</a>
												<p>2017/7/10 8:00</p>
											</li>
										</ul>
									</div>
									</div>
								</div>
								<!--活动详情-->
								<div class="showed" id="deshow">
									<form action="#" method="post">
										<label>活动名称：<p name="acname">三下乡社会实践活动</p></label>
										<label>活动地点：<p name="acaddr">肇庆端州区养老福利院</p></label>
										<label>活动时间：<p>2014/7/20-2014/7/30</p></label>
										<label>活动时长：<p>9:00-17:00</p></label>
										<label>参与人数：<p>20</p>人</label>					
										<label>活动类型：<p name="actype">社会实践</p></label>
										<label>活动内容：<p class="cont">把老人当作朋友一样聊天，听老人们过去的事迹是如此得着迷，主动跑到外面小卖部买东西给老人。来的时候准备了水果，点心和一些日用品，用自己平时的零花钱给老人们买吃的。从早上到中午12点，走了部分老人的房间并且慰问了老人们。到了老人吃饭的时间，就跟着那里负责分饭的管理员一起帮助老人们进行就餐。有的老人就餐很不方便，需要一边喂才行。</p></label>										
										<input type="submit" value="立即报名"/>
										<!--<input type="button" id="return" value="返回"/>-->										
									</form>										
								</div>
								<!--通知公告-->
								<div class="showed" id="show3">
									<div class="scroll">
									<div class="perac">
										<ul>
									<?php $_from = $this->_tpl_vars['Showalln']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['val']):
?>
											<li>
												<a href="#"><?php echo $this->_tpl_vars['val']['bt']; ?>
</a>
												<p><?php echo $this->_tpl_vars['val']['nid']; ?>
</p>
											</li>
										<?php endforeach; endif; unset($_from); ?>		
											<li>
												<a href="#">大三实践分未修满名单</a>
												<p>2016/7/10 18:00</p>
											</li>
											<li>
												<a href="#">3月2日收社会实践登记表</a>
												<p>2017/3/1 8:00</p>
											</li>											
											<li>
												<a href="#">关于环保活动车费报销</a>
												<p>2017/4/3 10:00</p>
											</li>
										</ul>
									</div>
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
			var $show3 = $("#show3");
			var $td = $(".todetele");
			var $de = $("#deshow");
			var $turn = $("#return");
			($td).click(function(){
					($de).show();
					$show1.removeClass("active");				
					$show2.removeClass("active");				
					$show3.removeClass("active");					
				});
			$tab.eq(0).click(function(){
				$tab.eq(1).removeClass("active");
				$show2.removeClass("active");				
				$tab.eq(2).removeClass("active");
				$show3.removeClass("active");
				$(this).addClass("active");
				$show1.addClass("active");
				$de.hide();
			});
			$tab.eq(1).click(function(){
				$tab.eq(0).removeClass("active");
				$show1.removeClass("active");				
				$tab.eq(2).removeClass("active");
				$show3.removeClass("active");
				$(this).addClass("active");
				$show2.addClass("active");
				$de.hide();
			});
			$tab.eq(2).click(function(){
				$tab.eq(0).removeClass("active");
				$show1.removeClass("active");				
				$tab.eq(1).removeClass("active");
				$show2.removeClass("active");
				$(this).addClass("active");
				$show3.addClass("active");
				$de.hide();
			});
			});
		</script>
	</body>
</html>