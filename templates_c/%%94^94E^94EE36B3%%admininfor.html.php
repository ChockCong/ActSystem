<?php /* Smarty version 2.6.30, created on 2017-03-06 11:19:14
         compiled from admininfor.html */ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="renderer" content="webkit">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="format-detection" content="telephone=no">
		<title>学院信息管理</title>	
		<link rel="stylesheet" href="../plugins/layui/css/layui.css" media="all" />
		<link rel="stylesheet" href="../plugins/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="../css/adinfor.css"/>
	</head>
	<body>
		<!--学院信息管理-->
		<div style="margin: 15px;">
			<fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;">
				<legend>学院信息</legend>
			<form class="layui-form" action="" method="post">
				<div class="layui-form-item">
					<label class="layui-form-label" >学院名称</label>
					<label name="institute" id="insti"><?php echo $this->_tpl_vars['admMsg']['xym']; ?>
</label>
					<div class="layui-input-block inline">
						<input type="button" id="alter" value="编辑" />
						<input type="button" id="cancel" value="取消" />
					</div>				
				</div>

			</fieldset>
		</div>
		<!--管理员信息管理-->
		<div style="margin: 15px;">
			<fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;">
				<legend>管理员信息</legend>

				<div class="layui-form-item">
					<label class="layui-form-label">帐号</label>
					<label class="layui-form-label left" name="" value=""><?php echo $this->_tpl_vars['admMsg']['ausername']; ?>
</label>
				</div>
				<div class="layui-form-item">
					<label class="layui-form-label">密码</label>
					<div class="layui-inline">						
						<input type="text" name="password" autocomplete="off" class="layui-input" value="<?php echo $this->_tpl_vars['admMsg']['apassword']; ?>
">
					</div>		
				</div>
				<div class="layui-form-item">
					<label class="layui-form-label">名称</label>
					<div class="layui-inline">						
						<input type="text" name="admname" autocomplete="off" class="layui-input" value="<?php echo $this->_tpl_vars['admMsg']['aname']; ?>
">
					</div>		
				</div>
				<div class="layui-form-item">
					<label class="layui-form-label">身份</label>
					<label class="layui-form-label left" name="">管理员</label>
				</div>
				<button class="layui-btn center" lay-submit="" name="adminsub">修改</button>
			</form>
			</fieldset>
		</div>
		
		
		<script src="../js/jquery-1.12.3.min.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript">
			$(function(){
			var $abtn = $("#alter");
			var $finish = $("#finish");
			var $can = $("#cancel");
			var $al = $("#insti");
			var ins = $($al).html();
			
			$abtn.click(function(){
				$(this).hide();
				$finish.show();
				$can.show();
				$($al).html("<input type='text' id='institute' name='xym' value='"+ins+"' />");
			})
			$can.click(function(){
				$(this).hide();
				$finish.hide();
				$abtn.show();
				$($al).html(ins);
			});

			});

		</script>
	</body>
</html>