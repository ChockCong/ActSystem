<?php /* Smarty version 2.6.30, created on 2017-03-06 09:30:33
         compiled from acnote.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'Menu', 'acnote.html', 18, false),)), $this); ?>
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
						<div id="univers">
							<p>校级活动</p>
						</div>
						<!--校级活动-->
						<div id="banner">
						    <a href="javascript:void(0);" id="left" class="btn">&lt;</a>
						    <ul class="pic">
						      <?php $_from = $this->_tpl_vars['Showact']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['val']):
?>
						       <li class="<?php echo $this->_tpl_vars['val']['lb']; ?>
"><p><?php echo $this->_tpl_vars['val']['hname']; ?>
</p><span><?php echo $this->_tpl_vars['val']['kssj']; ?>
<br /><?php echo $this->_tpl_vars['val']['fwdw']; ?>
</span></li>  
						      <?php endforeach; endif; unset($_from); ?>
						   <!--<li class="survice"><p>aaa义务维修</p><span>2017年3月1日<br />端州黄岗</span></li>
						      <li class="survice"><p>雷锋月摆摊活动</p><span>2017年3月4日<br />紫荆校道学生活动中心前</span></li>
						      <li class="survey"><p>走访高新区企业</p><span>2017年3月18日<br />大旺高新区</span></li>
						      <li class="survey"><p>南国中英文小学朝阳行动</p><span>2014年5月15日<br />南国中英文小学</span></li>
						      <li class="ssac"><p>社区环保行动</p><span>2013年11月23日<br />牌坊广场</span></li>
						      <li class="survice"><p>“美丽肇庆”城市清洁</p><span>2013年10月15日<br />东门广场</span></li>-->
						    </ul>
						    <a href="javascript:void(0);" id="right" class="btn">&gt;</a>
						</div>
						<div id="beside">
							<!--学院特色-->
							<div id="insitem">
								<p class="title">学<br />院<br />特<br />色</p>
								<ul class="con">
								  <?php $_from = $this->_tpl_vars['Showinfo1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['val1']):
?>
								    <li><a href="#"><?php echo $this->_tpl_vars['val1']['hname']; ?>
</a></li>
								  <?php endforeach; endif; unset($_from); ?>
								<!--<li><a href="#">外国语小学朝阳行动</a></li>
									<li><a href="#">川仪小学义教</a></li>
									<li><a href="#">社区环保活动</a></li>  -->
								</ul>
								<a href="Noticecontroller.php?note_title=yes" class="seemore">查看更多..</a>
							</div>
							<!--最新通知-->
							<div id="inform">
								<p class="title">最<br />新<br />通<br />知</p>
								<ul class="con">
								  <?php $_from = $this->_tpl_vars['Showinfo2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['val2']):
?>
								    <li><a href="#"><?php echo $this->_tpl_vars['val2']['bt']; ?>
</a></li>
								  <?php endforeach; endif; unset($_from); ?>
								<!--<li><a href="#">大三实践分未修满名单</a><!--<input type="button" id="more" value="查看" /></li>-->
								<!--<li><a href="#">3月2日收社会实践登记表</a><!--<input type="button" id="more" value="查看" /></li>-->
								<!--<li><a href="#">关于环保活动车费报销</a><!--<input type="button" id="more" value="查看" /></li>-->
								</ul>
								<a href="Noticecontroller.php?note_title=yes" class="seemore">查看更多..</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-2 col-md-2"></div>				
			</div>
		</div>
		<script src="../js/jquery-1.12.3.min.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript">
			var $btn = $("#banner .btn");
			var $pic = $("#banner .pic");
			var $list = $("#banner .pic li");
			
			var i = 0; //轮播框里第一张选项卡的索引值
			var at_i; //中间放大的选项卡索引值
			var n = $list.length; //选项卡个数
			
			$list.eq(1).addClass("active");
			// 左按钮
			$btn.eq(0).click(function() {
				i++;
				if(i > n - 3) {
					i = n - 3;
				};
				at_i = i + 1;
				$list.eq(i).removeClass("active");
				$pic.animate({
					left: -i * 230 + "px"
				}, 500);
				$list.eq(at_i).addClass("active");
			})
		
			// 右按钮
			$btn.eq(1).click(function() {
				$list.eq(at_i).removeClass("active");
				i--;
				if(i < 0) {
					i = 0;
				};
				at_i = i + 1;
				$pic.animate({
					left: -i * 230 + "px"
				}, 500)
				$list.eq(at_i).addClass("active");
			})
		</script>
	</body>
</html>