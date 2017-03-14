<?php /* Smarty version 2.6.30, created on 2017-03-14 12:05:53
         compiled from acissue.html */ ?>
<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<title>表单</title>
		<meta name="renderer" content="webkit">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="format-detection" content="telephone=no">

		<link rel="stylesheet" href="../plugins/layui/css/layui.css" media="all" />
		<link rel="stylesheet" href="../plugins/font-awesome/css/font-awesome.min.css">
	</head>

	<body>
		<div style="margin: 15px;">
			<fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;">
				<legend>活动内容发布</legend>
			</fieldset>

			<form class="layui-form" action="" method="post">
				<div class="layui-form-item">
					<label class="layui-form-label">活动名称</label>
					<div class="layui-input-block">
						<input type="text" name="title" lay-verify="required" autocomplete="off" placeholder="请输入标题" class="layui-input" style="width: 50%;">
					</div>
				</div>
				<div class="layui-form-item">
					<label class="layui-form-label">发布单位</label>
					<label class="layui-form-label" style="width: 200px;text-align: left;color: #999999;"><?php echo $_SESSION['xym']; ?>
</label>
				</div>
				<!--<div class="layui-form-item">
					<label class="layui-form-label">验证必填项</label>
					<div class="layui-input-block">
						<input type="text" name="username" lay-verify="required" placeholder="请输入" autocomplete="off" class="layui-input">
					</div>
				</div>-->
				<div class="layui-form-item">
					<label class="layui-form-label">负责人</label>
					<div class="layui-input-inline">
						<input type="text" name="respon" lay-verify="required" autocomplete="off" class="layui-input">
					</div>
				</div>
				<div class="layui-form-item">
					<label class="layui-form-label">联系方式</label>
					<div class="layui-input-inline">
						<label class="layui-form-label">长号</label>
						<input type="tel" name="longtell" lay-verify="phone" autocomplete="off" class="layui-input">	
					</div>
					<div class="layui-input-inline">
						<label class="layui-form-label">短号</label>
						<input type="tel" name="shorttell"  autocomplete="off" class="layui-input">	
					</div>
				</div>

				<div class="layui-form-item">
					<!--<div class="layui-inline">						
						<label class="layui-form-label">参与对象</label>
						<div class="layui-input-block">
							<input type="radio" name="stobject" value="myst" title="本院学生" checked="">
							<input type="radio" name="stobject" value="all" title="全校学生" disabled="">
						</div>
					</div>-->
					<div class="layui-inline">
						<label class="layui-form-label">参与人数</label>
						<div class="layui-input-inline">
							<input type="number" name="acnumber" lay-verify="number" autocomplete="off" class="layui-input">
						</div>
					</div>
				</div>
								
				<div class="layui-form-item">
					<div class="layui-inline">						
						<label class="layui-form-label">服务类型</label>
						<div class="layui-input-inline">
							<select name="actype" lay-filter="aihao">
								<option value="vs">志愿服务</option>
								<option value="sc" selected="">社会实践</option>
								<option value="os">校外调研</option>
							</select>
						</div>
					</div>
					<div class="layui-inline">
						<label class="layui-form-label">学分</label>
						<div class="layui-inline">							
						<input type="text" name="score" lay-verify="required" autocomplete="off" class="layui-input">
						</div>
					</div>
				</div>
				
				<div class="layui-form-item">
					<div class="layui-inline">
						<label class="layui-form-label">服务单位</label>
						<div class="layui-inline">						
						<input type="text" name="company" lay-verify="required" autocomplete="off" class="layui-input">
						</div>
					</div>
				</div>
				
				<div class="layui-form-item">
					<label class="layui-form-label">服务地址</label>
					<div class="layui-input-block">						
						<input type="text" name="acaddr" lay-verify="required" autocomplete="off" class="layui-input" style="width: 50%;">
					</div>
				</div>
				
				<div class="layui-form-item">
					<div class="layui-inline">
						<label class="layui-form-label">实践时间</label>
						<div class="layui-inline">
							<input type="text" name="date1" id="date" lay-verify="date" placeholder="yyyy-mm-dd" autocomplete="off" class="layui-input" onclick="layui.laydate({elem: this})">
						</div>
						<div class="layui-form-mid" style="display: inline;float: none;">-</div>
						<div class="layui-inline">
							<input type="text" name="date2" id="date" lay-verify="date" placeholder="yyyy-mm-dd" autocomplete="off" class="layui-input" onclick="layui.laydate({elem: this})">
						</div>
					</div>
					<div class="layui-inline">
						<label class="layui-form-label">共</label>
						<div class="layui-input-inline" style="width: 60px;">
							<input type="number" name="acduration" lay-verify="number" autocomplete="off" class="layui-input" style="width: 60px;">
						</div>
						<label class="layui-form-label" style="text-align: left;">小时</label>
					</div>
				</div>
				
				<!--<div class="layui-form-item">
					<div class="layui-inline">
						<label class="layui-form-label">验证数字</label>
						<div class="layui-input-inline">
							<input type="number" name="number" lay-verify="number" autocomplete="off" class="layui-input">
						</div>
					</div>
					<div class="layui-inline">
						<label class="layui-form-label">验证日期</label>
						<div class="layui-input-block">
							<input type="text" name="date" id="date" lay-verify="date" placeholder="yyyy-mm-dd" autocomplete="off" class="layui-input" onclick="layui.laydate({elem: this})">
						</div>
					</div>

				</div>
				<div class="layui-form-item">
					<label class="layui-form-label">验证身份证</label>
					<div class="layui-input-block">
						<input type="text" name="identity" lay-verify="identity" placeholder="" autocomplete="off" class="layui-input">
					</div>
				</div>
				<div class="layui-form-item">
					<label class="layui-form-label">自定义验证</label>
					<div class="layui-input-inline">
						<input type="password" name="password" lay-verify="pass" placeholder="请输入密码" autocomplete="off" class="layui-input">
					</div>
					<div class="layui-form-mid layui-word-aux">请填写6到12位密码</div>
				</div>

				<div class="layui-form-item">
					<div class="layui-inline">
						<label class="layui-form-label">范围</label>
						<div class="layui-input-inline" style="width: 100px;">
							<input type="text" name="price_min" placeholder="￥" autocomplete="off" class="layui-input">
						</div>
						<div class="layui-form-mid">-</div>
						<div class="layui-input-inline" style="width: 100px;">
							<input type="text" name="price_max" placeholder="￥" autocomplete="off" class="layui-input">
						</div>
					</div>
				</div>-->


				<div class="layui-form-item layui-form-text">
					<label class="layui-form-label">实践内容</label>
					<div class="layui-input-block">
						<textarea name="cont" placeholder="请输入内容" lay-verify="required" class="layui-textarea"></textarea>
					</div>
				</div>

				<div class="layui-form-item">
					<div class="layui-input-block">
						<button type="submit" class="layui-btn" lay-submit="" lay-filter="">立即发布</button>
						<input type="reset" class="layui-btn layui-btn-primary" value="重填">
					</div>
				</div>
			</form>
		</div>
		<script type="text/javascript" src="../plugins/layui/layui.js"></script>
		<script>
			layui.use(['form', 'layedit', 'laydate'], function() {
				var form = layui.form(),
					layer = layui.layer,
					layedit = layui.layedit,
					laydate = layui.laydate;

				//创建一个编辑器
				var editIndex = layedit.build('LAY_demo_editor');
				//自定义验证规则
				form.verify({
					title: function(value) {
						if(value.length < 5) {
							return '标题至少得5个字符啊';
						}
					},
					pass: [/(.+){6,12}$/, '密码必须6到12位'],
					content: function(value) {
						layedit.sync(editIndex);
					}
				});

				//监听提交
				form.on('submit(demo1)', function(data) {
					layer.alert(JSON.stringify(data.field), {
						title: '最终的提交信息'
					})
					return false;
				});
			});
		</script>
	</body>

</html>