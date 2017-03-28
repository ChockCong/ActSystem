<?php /* Smarty version 2.6.30, created on 2017-03-28 01:13:04
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
								    <li><p><?php echo $this->_tpl_vars['val1']['hname']; ?>
</p></li>
								  <?php endforeach; endif; unset($_from); ?>
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
								    <li><p><?php echo $this->_tpl_vars['val2']['bt']; ?>
</p></li>
								  <?php endforeach; endif; unset($_from); ?>
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