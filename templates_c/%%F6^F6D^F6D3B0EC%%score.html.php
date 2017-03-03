<?php /* Smarty version 2.6.30, created on 2017-03-03 16:33:09
         compiled from score.html */ ?>
<!DOCTYPE html>
<html>                 <!--angular-->
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">   
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>审核</title>
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css"/>
		<link rel="stylesheet" href="../plugins/layui/css/layui.css" media="all" />
		<link rel="stylesheet" href="../css/global.css" media="all">
		<link rel="stylesheet" href="../plugins/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="../css/table.css" />
	</head>

	<body ng-app="myApp" ng-controller="myCtrl">

		<div class="admin-main" >
			<fieldset class="layui-elem-field">
				<legend>活动搜索</legend>
				<form class="layui-form" action="" method="post">
					<div class="layui-form-item">
						<label class="layui-form-label">活动名称</label>
						<div class="layui-input-inline">
							<input type="text" name="acname" autocomplete="off" class="layui-input">
						</div>
						<div class="layui-input-inline">
							<input type="submit" class="layui-btn" lay-submit="" lay-filter="demo1"><i ng-click="sslist(x)"  class="fa fa-search" aria-hidden="true"></i>
						</div>
					</div>
				</form>
			</fieldset>
			
			<fieldset class="layui-elem-field">
				<legend>待评分活动</legend>

				<div class="layui-field-box">
					<table class="site-table table-hover">
						<thead>
							<tr>
								<!--<th style="width: 15%;"><input type="checkbox" id="selected-all" ng-model="ischeckAll" ng-click="selectAll(datas)"> 全选</th>-->
								<th style="width: 20%;">活动名称</th>
								<th style="width: 20%;">活动时间</th>
								<th style="width: 15%;">报名人数</th>
								<th style="width: 15%;">通过人数</th>
								<th style="width: 15%;">名额上限</th>
								<th style="width: 15%;">查看未审</th>
							</tr>
						</thead>
						<tbody>
							<tr ng-repeat="x in records | orderBy:col:desc">
								<!--<td><input type="checkbox" ng-model="x.ck"></td>-->
								<td>
									<a href="#" data-toggle="modal" data-target="#acblock">{{x.hname}}</a>
								</td>
								<td>{{x.kssj}}</td>
								<td>{{x.bmman}}</td>
								<td>{{x.passman}}</td>
								<td>{{x.cyrs}}</td>
								
								<td>
									<a href="#" class="tolist" class="layui-btn layui-btn-small layui-btn-radius"><i  class="fa fa-angle-double-right aa" style="font-size: 1.2em;"><p id="mark" hidden>{{x.hid}}</p></i></a>
									<!--<a href="#scoring" class="layui-btn layui-btn-normal layui-btn-mini">通过</a>
									<a href="#" data-id="1" data-opt="del" class="layui-btn layui-btn-danger layui-btn-mini">不通过</a>-->
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
		
				<!--评分框-->
		<!--<div  id="scoring">
			<form action="score.html">
				<label class="stitle">评分</label>
				<select class="ss" name="score">
					<option value="1">0.2</option>
					<option value="2" selected="">0.3</option>
					<option value="3">0.5</option>
					<option value="4">0.8</option>
				</select>
				<input type="submit" id="surescore" value="确定" />
			</form>
		
	<!--报名名单弹窗-->
		<div id="list" ng-click="ssslist()" >
			<label><p name="acname">社会实践活动</p>报名未审名单</label>
			<button id="close"><i class="fa fa-remove" lay-submit=""></i></button>
			<table class="site-table table-hover">
				<thead>
					<tr>
						<th style="width: 20%;">学号</th>
						<th style="width: 15%;">姓名</th>
						<th style="width: 25%;">班级</th>
						<th style="width: 20%;">长号</th>
						<th style="width: 20%;">审核</th>
					</tr>
				</thead>
				<tbody>
					<tr ng-repeat="y in slist | orderBy:col:desc">
						<td>{{y.snum}}</td>
						<td>{{y.sname}}</td>
						<td>{{y.szy}}</td>
						<td>{{y.sdh}}</td>
						<td>
							<a href="#scoring" class="layui-btn layui-btn-normal layui-btn-mini" style="background: #555151; text-decoration: none;">通过</a>
							<a href="#" data-id="1" data-opt="del" class="layui-btn layui-btn-danger layui-btn-mini" style="background: #c33b3b; text-decoration: none;">不通过</a>
						</td>
					</tr>
		
				</tbody>
			</table>
		</div>
	<div class="modal fade" id="acblock" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog passb1" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">活动详情</h4>
				</div>
				<div class="modal-body passb2">
					<label>登记人：<p name="stuname">张黑黑</p></label>
					<label>学号：<p name="username">201323131156</p></label>
					<label>班级：<p>2013级计算机科学与技术1班</p></label>
					<label>邮箱：<p name="mail">392719382@qq.com</p></label>					
					<label>活动名称：<p name="acname">三下乡社会实践活动</p></label>
					<label>活动地点：<p name="acaddr">肇庆端州区养老福利院</p></label>
					<label>活动时间：<p>2014/7/20-2014/7/30</p></label>
					<label>活动时长：<p>9:00-17:00</p></label>
					<label>活动类型：<p name="actype">社会实践</p></label>
					<label>活动内容：<p>把老人当作朋友一样聊天，听老人们过去的事迹是如此得着迷，主动跑到外面小卖部买东西给老人。来的时候准备了水果，点心和一些日用品，用自己平时的零花钱给老人们买吃的。从早上到中午12点，走了部分老人的房间并且慰问了老人们。到了老人吃饭的时间，就跟着那里负责分饭的管理员一起帮助老人们进行就餐。有的老人就餐很不方便，需要一边喂才行。</p></label>
				</div>
			</div>
		</div>

		
		<script src="../tjs/angular.js" type="text/javascript" charset="utf-8"></script>
		<script src="../js/jquery-1.12.3.min.js"  type="text/javascript"></script>
		<script src="../tjs/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
		<!--<script type="text/javascript" src="plugins/layui/layui.js"></script>-->
		<script type="text/javascript">
		var share=[
					{snum:"201323131156",stuname:"张黑黑",classname:"计算机科学与技术1班",longtell:"18898834720"},
					{snum:"201424143242",stuname:"李白",classname:"通信工程",longtell:"18898883718"},
					{snum:"201614161156",stuname:"季建伟",classname:"生物科学",longtell:"13684732947"},
					{snum:"201525154362",stuname:"陈海生",classname:"食品与安全",longtell:"15837261930"},
					{snum:"201342133104",stuname:"梁宝健",classname:"音乐表演",longtell:"13872639471"},
					{snum:"201513152217",stuname:"李旭花",classname:"室内设计",longtell:"18327163823"},
					{snum:"201622162333",stuname:"张佳佳",classname:"人力资源与管理",longtell:"18869937264"},
					{snum:"201431143328",stuname:"邵凤星",classname:"会计",longtell:"13547736289"},
				];
			$(function(){
				$sa =$("#selected-all");
				$ck =$("checkbox");
				$cl = $("#close");
				$li = $("#list");
				$tl = $(".tolist");
				($tl).click(function(){
					($li).show();
				});
				($cl).click(function(){
					($li).hide();
				});

				
			});
			
			var app = angular.module("myApp", []);
			app.controller("myCtrl", function($scope) {
				<?php echo '$scope.records = '; ?>
<?php echo $this->_tpl_vars['Passnum']; ?>
<?php echo ';'; ?>

				$scope.sslist = function(x){
					//alert(records.hid);
		            $.ajax({
		                type: "GET",
		                url: "Detailcontroller.php",
		                data: "hid="+x.hid,
		                dataType: 'json',
		                success: function(data){
		                	$scope.list=data;
		                  },
		                error: function(){
		                	alert("查询错误！");
		             	  },
		                beforeSend:function(){
		                	//$("#modal-body").html("<h2 style='text-align:center;'>请稍后...<h2>");
		             	  },
		                complete:function(){
		                  }
		             });
				};
				$scope.ssslist = function(){
					$scope.slist=$scope.list;
					alert($scope.slist);
				}
				
			$scope.ischeckAll = false;
				$scope.selectAll = function(records) {
					if($scope.ischeckAll) {
						for(var i = 0; i < $scope.records.length; i++) {
							$scope.records[i].ck = true;
						}
					} else {
						for(var i = 0; i < $scope.records.length; i++) {
							$scope.records[i].ck = false;
						}
					}
				};
			});
			$(function(){

			})


//			layui.config({
//				base: 'plugins/layui/modules/'
//			});
//
//			layui.use(['icheck', 'laypage','layer'], function() {
//				var $ = layui.jquery,
//					laypage = layui.laypage,
//					layer = parent.layer === undefined ? layui.layer : parent.layer;
//				$('input').iCheck({
//					checkboxClass: 'icheckbox_flat-green'
//				});
//
//				//page
//				laypage({
//					cont: 'page',
//					pages: 25 //总页数
//						,
//					groups: 5 //连续显示分页数
//						,
//					jump: function(obj, first) {
//						//得到了当前页，用于向服务端请求对应数据
//						var curr = obj.curr;
//						if(!first) {
//							//layer.msg('第 '+ obj.curr +' 页');
//						}
//					}
//				});
//
//				$('#search').on('click', function() {
//					parent.layer.alert('你点击了搜索按钮')
//				});
//
//				$('#add').on('click', function() {
//					$.get('temp/edit-form.html', null, function(form) {
//						layer.open({
//							type: 1,
//							title: '添加表单',
//							content: form,
//							btn: ['保存', '取消'],
//							area: ['600px', '400px'],
//							maxmin: true,
//							yes: function(index) {
//								console.log(index);
//							},
//							full: function(elem) {
//								var win = window.top === window.self ? window : parent.window;
//								$(win).on('resize', function() {
//									var $this = $(this);
//									elem.width($this.width()).height($this.height()).css({
//										top: 0,
//										left: 0
//									});
//									elem.children('div.layui-layer-content').height($this.height() - 95);
//								});
//							}
//						});
//					});
//				});
//
//				$('#import').on('click', function() {
//					var that = this;
//					var index = layer.tips('只想提示地精准些', that,{tips: [1, 'white']});
//					$('#layui-layer'+index).children('div.layui-layer-content').css('color','#000000');
//				});
//
//				$('.site-table tbody tr').on('click', function(event) {
//					var $this = $(this);
//					var $input = $this.children('td').eq(0).find('input');
//					$input.on('ifChecked', function(e) {
//						$this.css('background-color', '#EEEEEE');
//					});
//					$input.on('ifUnchecked', function(e) {
//						$this.removeAttr('style');
//					});
//					$input.iCheck('toggle');
//				}).find('input').each(function() {
//					var $this = $(this);
//					$this.on('ifChecked', function(e) {
//						$this.parents('tr').css('background-color', '#EEEEEE');
//					});
//					$this.on('ifUnchecked', function(e) {
//						$this.parents('tr').removeAttr('style');
//					});
//				});
//				$('#selected-all').on('ifChanged', function(event) {
//					var $input = $('.site-table tbody tr td').find('input');
//					$input.iCheck(event.currentTarget.checked ? 'check' : 'uncheck');
//				});
//			});
		</script>
	</body>
</html>
