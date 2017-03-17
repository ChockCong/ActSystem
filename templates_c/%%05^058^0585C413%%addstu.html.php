<?php /* Smarty version 2.6.30, created on 2017-03-16 05:44:59
         compiled from addstu.html */ ?>
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
				<legend>录入学生信息</legend>
			</fieldset>

			<form class="layui-form" action="" method="post">
				<div class="layui-form-item">
					<div class="layui-inline">						
						<label class="layui-form-label">姓名</label>
						<div class="layui-input-inline">
							<input type="text" name="stuname" lay-verify="required" autocomplete="off" class="layui-input">
						</div>
					</div>
					<div class="layui-inline">						
						<label class="layui-form-label">学号</label>
						<div class="layui-input-inline">
							<input type="text" name="username" lay-verify="required" autocomplete="off" class="layui-input">
						</div>
					</div>
				</div>

				<div class="layui-form-item">
					<div class="layui-inline">						
						<label class="layui-form-label">民族</label>
						<div class="layui-input-inline">
							<input type="text" name="nation" lay-verify="required" autocomplete="off" class="layui-input">
						</div>
					</div>
					<div class="layui-inline">						
						<label class="layui-form-label">性别</label>
						<div class="layui-input-inline">
							<input type="radio" name="sex" value="男" title="男" checked="">
							<input type="radio" name="sex" value="女" title="女">
						</div>
					</div>
				</div>
				
				<div class="layui-form-item">
					<div class="layui-inline">	
						<label class="layui-form-label">政治面貌</label>
						<div class="layui-input-inline">
							<select name="actype" lay-filter="">
								<option value="1">群众</option>
								<option value="2" selected="">团员</option>
								<option value="3">预备党员</option>
								<option value="4">中共党员</option>
							</select>
						</div>
					</div>
					<div class="layui-inline">						
						<label class="layui-form-label">身份证</label>
						<div class="layui-input-inline">
							<input type="text" name="idnum" lay-verify="identity" autocomplete="off" class="layui-input">
						</div>
					</div>
				</div>
				
				<div class="layui-form-item">
					<div class="layui-inline">						
						<label class="layui-form-label">长号</label>
						<div class="layui-input-inline">
							<input type="text" name="longtell" lay-verify="phone" autocomplete="off" class="layui-input">
						</div>
					</div>
					<div class="layui-inline">						
						<label class="layui-form-label">短号</label>
						<div class="layui-input-inline">
							<input type="text" name="shorttell"  autocomplete="off" class="layui-input">
						</div>
					</div>
				</div>
				
				<div class="layui-form-item">
					<div class="layui-inline">						
						<label class="layui-form-label">密码</label>
						<div class="layui-input-inline">
							<input type="text" name="stupassword" lay-verify="password" autocomplete="off" class="layui-input" value="123456">
						</div>
					</div>
					<div class="layui-inline">						
						<label class="layui-form-label">电子邮件</label>
						<div class="layui-input-inline">
							<input type="text" name="qqnum"  autocomplete="off" class="layui-input">
						</div>
					</div>
				</div>
				
				<div class="layui-form-item">
					<div class="layui-inline">						
						<label class="layui-form-label">年级</label>
						<div class="layui-input-inline">
								<select name="grade">
									<option value="2013">2013</option>
									<option value="2014" selected="">2014</option>
									<option value="2015">2015</option>
									<option value="2016">2016</option>
								</select>
						</div>
					</div>
					<div class="layui-inline">						
						<label class="layui-form-label">学院</label>
						<div class="layui-input-inline">
								<select name="institute">
									<option value="经济与管理学院">经济与管理学院</option>
									<option value="文学院">文学院</option>
									<option value="政法学院">政法学院</option>
									<option value="外国语学院">外国语学院</option>
									<option value="体育与健康学院">体育与健康学院</option>
									<option value="生命科学学院">生命科学学院</option>
									<option value="化学化工学院学院">化学化工学院学院</option>
									<option value="音乐学院">音乐学院</option>
									<option value="美术学院">美术学院</option>
									<option value="数学与统计学院">数学与统计学院</option>
									<option value="计算机学院软件学院">计算机学院软件学院</option>
									<option value="旅游与历史文化学院">旅游与历史文化学院</option>
									<option value="教育科学学院">教育科学学院</option>
									<option value="电子信息与机电工程学院">电子信息与机电工程学院</option>
								</select>
							</div>
					</div>
				</div>
				
				<div class="layui-form-item">
					<div class="layui-inline">						
						<label class="layui-form-label">专业</label>
						<div class="layui-input-inline">
							<input type="text" name="subject" lay-verify="required" autocomplete="off" class="layui-input">
						</div>
					</div>
					<div class="layui-inline">						
						<label class="layui-form-label">班号</label>
						<div class="layui-input-inline">
							<input type="text" name="class" lay-verify="number" autocomplete="off" class="layui-input">
						</div>
					</div>
				</div>
				
				<div class="layui-form-item">
					<div class="layui-inline">						
						<label class="layui-form-label">层次</label>
						<div class="layui-input-inline">
								<select name="level">
									<option value="本科" selected="">本科</option>
									<option value="专科">专科</option>
								</select>
						</div>
					</div>
					<div class="layui-inline">						
						<label class="layui-form-label">学制</label>
						<div class="layui-input-inline">
							<input type="text" name="scsys" lay-verify="number" autocomplete="off" class="layui-input">
						</div>
					</div>
				</div>
				
				
								
				<div class="layui-form-item">
					<div class="layui-inline">
						<label class="layui-form-label">已修学分</label>
						<div class="layui-inline">							
						<input type="text" name="score" lay-verify="required" autocomplete="off" class="layui-input">
						</div>
					</div>
				</div>

				<div class="layui-form-item">
					<div class="layui-input-block">
						<button class="layui-btn" lay-submit="">添加</button>
						<button type="reset" class="layui-btn layui-btn-primary">重填</button>
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