<?php /* Smarty version 2.6.30, created on 2017-02-16 02:34:22
         compiled from acalter.html */ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>社会实践管理系统</title>
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css"/>
		<link rel="stylesheet" type="text/css" href="../css/reset.css"/>
		<link rel="stylesheet" type="text/css" href="../css/datedropper.css"/>
		<link rel="stylesheet" type="text/css" href="../css/timedropper.min.css"/>
		<link rel="stylesheet" type="text/css" href="../css/register.css"/>
	</head>
	<body>
		<div id="main">
			<div id="search">
				<input type="text" id="scon" value="" placeholder="请输入活动名称"/>
				<input type="button" id="sbtn" value="搜索" />
				<p>查看全部请直接点击搜索</p>
			</div>
			<div id="query">
				<div id="scroll">
				<ul>
					<li>雷锋月电脑义务维修</li>
					<li>开学迎接新生</li>
					<li>暑期“三下乡”社会实践</li>
					<li>南国中英文小学朝阳行动</li>
					<li>社区环保行动</li>
					<li>“美丽肇庆”城市清洁</li>
					<li>川仪小学义教</li>
					<li>雷锋月电脑义务维修</li>
					<li>开学迎接新生</li>
					<li>暑期“三下乡”社会实践</li>
					<li>南国中英文小学朝阳行动</li>
					<li>社区环保行动</li>
					<li>“美丽肇庆”城市清洁</li>
					<li>川仪小学义教</li>
					<li>雷锋月电脑义务维修</li>
					<li>开学迎接新生</li>
					<li>暑期“三下乡”社会实践</li>
					<li>南国中英文小学朝阳行动</li>
					<li>社区环保行动</li>
					<li>“美丽肇庆”城市清洁</li>
					<li>川仪小学义教</li>
				</ul>
				</div>
				<span class="more"><b></b></span>
				<p>tips:向下滚动显示更多</p>
			</div>
			<div id="acal">
				<form action="perac" class="pac" method="post">
					<div class="form-group-sm">
						<label for="acname">活动名称</label>
						<input type="text" class="form-control" name="acname" id="acname" value="三下乡社会实践活动"/>
					</div>
					<div class="form-group-sm">
						<label for="acaddr">活动地点</label>	
						<input type="text" class="form-control" name="acaddr" id="acaddr" value="绿春县大兴镇" />
					</div>					
					<div class="form-group-sm">
						<label>活动时间<p><input type="text" class="input" id="pickdate" name="pickdate" value="2017.7.3"/>-<input type="text" class="input" id="pickdate2" name="pickdate2" value="2017.7.10"/></p></label>						
					</div>
					<div class="form-group-sm">
						<label>活动时长<p><input type="text" class="input" id="picktime" name="picktime" value="9:00"/>-<input type="text" class="input" id="picktime2" name="picktime2" value="17:00"/></label>
					</div>
					<div class="form-group-sm">
						<label>活动类型
							<select class="input radius" name="actype">
								<option value="sc" selected="selected">社会实践</option>
								<option value="vs">志愿服务</option>
							</select>
						</label>
					</div>
					<div class="form-group-sm">
						<label id="actype">活动内容</label><br />
						<textarea class="form-control" rows="5" cols="30" name="actype" id="actype">图书馆建设：具体根据前期调研情况，选择绿春县一乡村学校援建图书室。走访环节：走访绿春县大兴镇牛洪村及大寨村贫困生家庭，配送物资并填写调查问卷。总结交流会：和中学生展开面对面交流会。牵手帮扶计划：采取一对三帮扶，一名志愿者帮扶三名绿春学子，互留联系方式，长期联系。采访教师：组织采访三名在校代课老师
						</textarea>
					</div>
					<div id="btn-sub2">
						<div class="icon">
						<input type="submit" name="acalter" value="修改"/>
						<i class=" glyphicon glyphicon-saved"></i>							
						</div>
						<div class="icon">							
						<input type="button" id="acdele" name="acdele" value="删除" />
						<i class="glyphicon glyphicon-trash"></i>
						</div>
					</div>
					
			</div>
		</div>
		<script src="../js/jquery-1.12.3.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="../js/timedropper.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="../js/datedropper.min.js" type="text/javascript" charset="utf-8"></script>
		<script>
			//点击显示
			$(function(){
				var $sea = $("#sbtn");
				var $que = $("#query");
				var $ch = $("#acal");
				var $li = $("li");
				($sea).click(function(){
					$que.show();
				});
				($li).click(function(){
					$ch.show();
				});
			})
			//时间控制器
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