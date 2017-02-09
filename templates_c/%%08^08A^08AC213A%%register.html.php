<?php /* Smarty version 2.6.30, created on 2017-02-08 14:34:06
         compiled from register.html */ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css"/>
		<link rel="stylesheet" type="text/css" href="../css/datedropper.css"/>
		<link rel="stylesheet" type="text/css" href="../css/timedropper.min.css"/>
		<link rel="stylesheet" type="text/css" href="../css/reset.css"/>
		<link rel="stylesheet" type="text/css" href="../css/register.css"/>
	</head>
	<body>
		<!--<div id="all">			
			<div class="menuHolder">
				<div class="menuWindow">
					<ul class="p1">
						<li class="s1"><a href="#url"><div>活动申报</div></a>
							<ul class="p2">
								<li class="s2"><a href="information.html" target="change"><span>登记</span></a></li>
								<li class="s2"><a href="alter.html"><span>修改</span></a></li>
								<li class="s2"><a href="#url"><span>审批</span></a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
			<iframe src="alter.html" width="100%" height="100%" frameborder="0" name="change"></iframe>
		</div>-->
		<div id="main">
			<div id="nav">
				<ul>
					<li><a href="#">公告通知</a></li>
					<li><a href="#">活动申报</a></li>
					<li><a href="#">个人活动</a></li>
					<li><a href="#">个人信息</a></li>
				</ul>
			</div>
			<!--左边修饰图片-->
			<div id="add">
				<p>点点滴滴</p>
				<p>从我做起</p>
				<div></div>
				<div></div>
				<div id="help"></div>
			</div>
			<!--登记卡面-->
			<div id="register-card">
				<div id="wrap">
					<p id="ribbon">活动登记</p>
				</div>
				<form action="perac" class="pac" method="post">
					<div class="form-group-sm">
						<label for="acname">活动名称</label>
						<input type="text" class="form-control" name="acname" id="acname" />
					</div>
					<div class="form-group-sm">
						<label for="acaddr">活动地点</label>	
						<input type="text" class="form-control" name="acaddr" id="acaddr"  />
					</div>					
					<div class="form-group-sm">
						<label>活动时间<p><input type="text" class="input" id="pickdate" />-<input type="text" class="input" id="pickdate2" /></p></label>						
					</div>
					<div class="form-group-sm">
						<label>活动时长<p><input type="text" class="input" id="picktime" />-<input type="text" class="input" id="picktime2" /></label>
					</div>
					<div class="form-group-sm">
						<label>活动类型
							<select class="input radius">
								<option value="sc" selected="selected">社会实践</option>
								<option value="vs">志愿服务</option>
							</select>
						</label>
					</div>
					<div class="form-group-sm">
						<label id="actype">活动内容</label><br />
						<textarea class="form-control" rows="4" cols="40"></textarea>
					</div>
					<input type="submit" value="登记"/>
				</form>
			</div>
		</div>
		<script src="js/jquery-1.12.3.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="js/timedropper.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="js/datedropper.min.js" type="text/javascript" charset="utf-8"></script>
		<script>
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