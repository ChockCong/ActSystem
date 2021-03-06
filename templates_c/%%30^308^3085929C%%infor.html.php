<?php /* Smarty version 2.6.30, created on 2017-03-15 05:53:43
         compiled from infor.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'Menu', 'infor.html', 17, false),)), $this); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>社会实践管理系统</title>
		<link rel="stylesheet" type="text/css" href="../css/reset.css"/>
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css"/>
		<link rel="stylesheet" type="text/css" href="../css/infor.css"/>
	</head>
	<body>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-sm-2 col-md-2"></div>
				<div class="col-xs-12 col-sm-8 col-md-8">
					<div id="main">
						<div id="nav">
<?php echo smarty_function_Menu(array(), $this);?>

						</div>
						<div id="left"></div>
						<div id="right">
							<div id="bubble">
								<p>My Information</p>
							</div>
							<form action="Personinfocontroller.php" method="post">
							<div id="panel">
								<div id="box">
									<div class="line">
										<label for="username">学号：<p id="username"><?php echo $this->_tpl_vars['stumsg']['snum']; ?>
</p></label>
										<label for="nation">民族：<p id="nation"><?php echo $this->_tpl_vars['stumsg']['smz']; ?>
</p></label>
										<label for="idnum">身份证：<p id="idnum"><?php echo $this->_tpl_vars['stumsg']['ssfj']; ?>
</p></label>
										<label for="source">生源地：<p id="source"><?php echo $this->_tpl_vars['stumsg']['ssyd']; ?>
</p></label>
										<label for="longtell">长号：<span  id="longtell"><?php echo $this->_tpl_vars['stumsg']['sdh']; ?>
</span><p class="vital">	*</p></label>
										<label for="mail">邮箱：<span id="mail"><?php echo $this->_tpl_vars['stumsg']['smail']; ?>
</span><p class="vital"> *</p></label>
										<label for="grade">年级：<p id="grade"><?php echo $this->_tpl_vars['stumsg']['snj']; ?>
</p></label>
										<label for="subject">专业：<p id="subject"><?php echo $this->_tpl_vars['stumsg']['szy']; ?>
</p></label>
										<label for="scsys">学制：<p id="scsys"><?php echo $this->_tpl_vars['stumsg']['sxz']; ?>
</p></label>
									</div>
									<div class="line">
										<label for="stuname">姓名：<span  id="stuname"><?php echo $this->_tpl_vars['stumsg']['sname']; ?>
</span><p class="vital">	*</p></label>
										<label for="sex">性别：<p id="sex"><?php echo $this->_tpl_vars['stumsg']['sxb']; ?>
</p></label>
										<label for="polistatus">政治面貌：<span  id="polistatus"><?php echo $this->_tpl_vars['stumsg']['szjmm']; ?>
</span></label>
										<label for="stupassword">密码：<span id="stupassword"></span><p class="vital"> *</p></label>
										<label for="shorttell">短号：<span  id="shorttell"><?php echo $this->_tpl_vars['stumsg']['sdh2']; ?>
</span></label>
										<label for="institute">学院：<p id="institute"><?php echo $this->_tpl_vars['stumsg']['sxy']; ?>
</p></label>
										<label for="class">班号：<p id="class"><?php echo $this->_tpl_vars['stumsg']['sbh']; ?>
</p></label>
										<label for="level">层次：<p id="level"><?php echo $this->_tpl_vars['stumsg']['scc']; ?>
</p></label>										
									</div>
								</div>
								<input type="hidden" name="originator" value="<?php echo $_SESSION['code']; ?>
">
									<p class="tip">温馨提示：填写<邮箱>以便管理员可以给你发送重要信息。</p>
									<input type="button" id="alter" value="修改"/>
									<input type="submit" id="finish" value="完成" name="submit"/>
									<input type="button" id="cancel" value="取消" />
							</div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-2 col-md-2"></div>
				
			</div>
		</div>
		<script src="../js/jquery-1.12.3.min.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript">
		$(function(){
			var $abtn = $("#alter");
			var $finish = $("#finish");
			var $can = $("#cancel");
			var $al = $("span");
			var cnc=[];
			$al.each(function(index,element){
				cnc[index] = 	$(this).html();
			});
			$abtn.click(function(){
				$(this).hide();
				$finish.show();
				$can.show();
				$al.each(function(index,element){
					var cnt = $(this).html();
					$(this).html("<input type='text' id='"+$(this).attr("id")+"' class='revive' placeholder='"+cnt+"' value='"+cnt+"' name='arr[]'/>");
				});
			});
			$can.click(function(){
				$(this).hide();
				$finish.hide();
				$abtn.show();
				$al.each(function(index,element){
					$(this).html(cnc[index]);
				});
			});
			$finish.click(function(){
				$(this).hide();
				$can.hide();
				$abtn.show();
				/*$al.each(function(index,element){
					var cnt = $(this).find("input").val();
					$(this).html(cnt);
				});*/
			});
			
		});
		</script>
	</body>
</html>