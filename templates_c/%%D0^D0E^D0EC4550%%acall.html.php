<?php /* Smarty version 2.6.30, created on 2017-03-12 03:52:00
         compiled from acall.html */ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>活动总览</title>
	
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" />
		<link rel="stylesheet" href="../plugins/layui/css/layui.css" media="all" />
		<link rel="stylesheet" href="../css/global.css" media="all">
		<link rel="stylesheet" href="../plugins/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="../css/table.css" />
	</head>
	<body ng-app="myApp" ng-controller="myCtrl">
		<div class="admin-main" >
			<!--条件选择栏-->
			<fieldset class="layui-elem-field-title">
				<legend>请选择活动状态</legend>
				<form class="layui-form" action="" method="post">
					<div class="layui-form-item">
						<div class="layui-inline">						
							<label class="layui-form-label">状态</label>
							<div class="layui-input-block" style="float: left;margin-left: 0;">
								<select name="grade">
									<option value="0"selected="">全部</option>
									<option value="1">已完成</option>
									<option value="2">未完成</option>
									<option value="3">已发布</option>
								</select>
							</div>
							<button type="submit" id="sure" class="layui-btn" style="margin-left: 20px;"><i class="fa fa-search" aria-hidden="true"></i></button>
								<!--<button class="layui-btn" lay-submit="" >删除</button>-->
						</div>

						<!--<div class="layui-input-inline">
							<button class="layui-btn" lay-submit="">导出表格</button>
						</div>-->
					</div>
				</form>
			</fieldset>
			<!--查询结果区域-->
			<fieldset class="layui-elem-field">
				<legend>查询结果</legend>
				<button ng-click="col='time';desc=!desc" type="button" class="btntime">按时间</button>
				<div class="layui-field-box">
					<table class="site-table table-hover">
						<thead>
							<tr>
								<th style="width: 15%;"><input type="checkbox" id="selected-all" ng-model="ischeckAll" ng-click="selectAll(datas)"> 全选</th>
								<th style="width: 20%;">活动名称</th>
								<th style="width: 15%;">参与人数</th>
								<th style="width: 20%;">活动时间</th>
								<th style="width: 20%;">活动状态</th>
								<th style="width: 10%;">活动名单</th>
							</tr>
						</thead>
						<tbody>
							<tr ng-repeat="x in stus | orderBy:col:desc">
								<td><input type="checkbox" ng-model="x.ck" name="chk"></td>
								<td><a href="#"  data-toggle="modal" data-target="#sdblock">{{x.hname}}</a></td>
								<td>{{x.cyrs}}</td>
								<td>{{x.kssj}}</td>
								<td>{{x.tag}}</td>
								<td>
									<a href="#" class="tolist" class="layui-btn layui-btn-small layui-btn-radius"><i class="fa fa-angle-double-right"  style="font-size: 1.2em;"><p hidden>{{x.hid}}</p></i></a>
								</td>
							</tr>					
							
						</tbody>
					</table>
				</div>
			</fieldset>
			<div class="admin-table-page">
				<div id="page" class="page">
				</div>
			</div>
		</div>
		<!--活动名单弹窗-->
		<div id="list">
			<label><p name="acname">社会实践活动</p>人员名单</label>
			<button id="close"><i class="fa fa-remove" lay-submit=""></i></button>
			<table class="site-table table-hover">
				<thead>
					<tr>
						<th style="width: 20%;">学号</th>
						<th style="width: 15%;">姓名</th>
						<th style="width: 20%;">班级</th>
						<th style="width: 20%;">长号</th>
						<th style="width: 10%;">删除</th>
					</tr>
				</thead>
				<tbody  id="pman">
					<!--<tr>
						 ng-repeat="y in slist | orderBy:col:desc"
						<td>201323131156</td>
						<td>张黑黑</td>
						<td>计算机科学与技术1班</td>
						<td>18898834720</td>
						<td>
							<i class="fa fa-trash" aria-hidden="true" lay-submit=""></i>
						</td>
					</tr>-->
		
				</tbody>
			</table>
		</div>
		
		<!--活动详情弹出框-->
	<div class="modal fade" id="sdblock" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog sdblock" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">详细信息</h4>
				</div>
				<div class="modal-body blockleft">
					<label>活动名称：<p name="acname">三下乡社会实践活动</p></label>
					<label>活动地点：<p name="acaddr">肇庆端州区养老福利院</p></label>
					<label>活动时间：<p>2014/7/20-2014/7/30</p></label>
					<label>活动时长：<p>9:00-17:00</p></label>
					<label>参与人数：<p>20</p>人</label>					
					<label>活动类型：<p name="actype">社会实践</p></label>
					<label>活动内容：<p>把老人当作朋友一样聊天，听老人们过去的事迹是如此得着迷，主动跑到外面小卖部买东西给老人。来的时候准备了水果，点心和一些日用品，用自己平时的零花钱给老人们买吃的。从早上到中午12点，走了部分老人的房间并且慰问了老人们。到了老人吃饭的时间，就跟着那里负责分饭的管理员一起帮助老人们进行就餐。有的老人就餐很不方便，需要一边喂才行。</p></label>
				</div>
			</div>
		</div>

		
		
		<script src="../tjs/angular.js" type="text/javascript" charset="utf-8"></script>
		<script src="../js/jquery-1.12.3.min.js"  type="text/javascript"></script>
		<script src="../js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript" src="../plugins/layui/layui.js"></script>
		<script type="text/javascript">
			$(function(){
				$cl = $("#close");
				$li = $("#list");
				$tl = $(".tolist");
				($tl).click(function(){
					($li).show();
				});
				($cl).click(function(){
					($li).hide();
				});
				$(".fa-angle-double-right").click(function(){
					var hid=$(this).find("p").html();
					$.ajax({
			               type: "get",
			               url: "Detailcontroller.php",
			               dataType: 'json',
			               data: "nhid="+hid,
			               success:function(data){
			            	   $.each(data,function(i,result){ 
			            		   $.each(result,function(j,val){
				            		   item = "<tr><td>"+val.snum+"</td><td>"+val.sname+"</td><td>"+val.szy+"</td><td>"+val.sdh+"</td><td><i class='fa fa-trash'  aria-hidden='true' lay-submit='' onclick='faget("+val.sid+','+hid+")'></a></i></td></tr>"; 
				            		   $("#pman").append(item); 
			            		   }) 
			            		}); 
			            	   $("#close").click(function(){ $("#pman").html("");}) 
			               },
					})
				});
			});
			var app = angular.module("myApp", []);
			app.controller("myCtrl", function($scope) {
				<?php echo '$scope.stus ='; ?>
<?php echo $this->_tpl_vars['ActMsg']; ?>
<?php echo ';'; ?>

//			  $scope.stus = [
//				{ck: false,acname:"三下乡社会实践活动",count:"20",time:"2012/7/16 15:45",state:"已完成"},
//				{ck: false,acname:"南国中英文小学义教",count:"50",time:"2014/10/3 16:00",state:"已完成"},
//				{ck: false,acname:"社区环保活动",count:"30",time:"2015/5/3 14:30",state:"未完成"},
//				{ck: false,acname:"朝阳行动",count:"80",time:"2014/5/3 16:30",state:"未完成"},
//				{ck: false,acname:"雷锋月爱心义卖",count:"20",time:"2014/4/10 9:00",state:"已完成"},
//				{ck: false,acname:"电脑义务维修",count:"30",time:"2015/11/20 14:00",state:"已发布"},
//				{ck: false,acname:"迎接新生",count:"150",time:"2015/9/1 10:00",state:"已发布"},
//			  ]
//			$scope.slist = [
//				{username:"201323131156",stuname:"张黑黑",classname:"计算机科学与技术1班",longtell:"18898834720"},
//				{username:"201424143242",stuname:"李白",classname:"通信工程",longtell:"18898883718"},
//				{username:"201614161156",stuname:"季建伟",classname:"生物科学",longtell:"13684732947"},
//				{username:"201525154362",stuname:"陈海生",classname:"食品与安全",longtell:"15837261930"},
//				{username:"201342133104",stuname:"梁宝健",classname:"音乐表演",longtell:"13872639471"},
//				{username:"201513152217",stuname:"李旭花",classname:"室内设计",longtell:"18327163823"},
//				{username:"201622162333",stuname:"张佳佳",classname:"人力资源与管理",longtell:"18869937264"},
//				{username:"201431143328",stuname:"邵凤星",classname:"会计",longtell:"13547736289"},
//			];
				$scope.ischeckAll = false;
				$scope.selectAll = function(stus) {
					if($scope.ischeckAll) {
						for(var i = 0; i < $scope.stus.length; i++) {
							$scope.stus[i].ck = true;
						}
					} else {
						for(var i = 0; i < $scope.stus.length; i++) {
							$scope.stus[i].ck = false;
						}
					}
				};
			});
			layui.use(['form', 'laydate'], function() {
				var form = layui.form(),
					laydate = layui.laydate;
			});
			function faget(sid,hid){
					var ssid=sid;
					$.ajax({
			               type: "get",
			               url: "Admin_browseact.php",
			               dataType: 'json',
			               data: "ssid="+ssid+"&hhid="+hid,
			               success:function(data){
 			            	   $.each(data,function(i,result){ 
			            		   $.each(result,function(j,val){
				            		   item = "<tr><td>"+val.snum+"</td><td>"+val.sname+"</td><td>"+val.szy+"</td><td>"+val.sdh+"</td><td><i class='fa fa-trash'  aria-hidden='true' lay-submit='' onclick='faget("+val.sid+','+hid+")'></a></i></td></tr>"; 
				            		   $("#pman").append(item); 
			            		   }) 
			            		});  
			            	   $("#close").click(function(){ $("#pman").html("");}) 
			               },
			               beforeSend:function(){
			            	   $("#pman").html("");
			               },
					});
				}
			
		</script>
	</body>

</html>