<?php /* Smarty version 2.6.30, created on 2017-03-17 04:44:42
         compiled from acpass.html */ ?>
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
		<link rel="stylesheet" type="text/css" href="../css/table.css">
	</head>
	<body ng-app="myApp" ng-controller="myCtrl">
		<div class="admin-main" >
			<fieldset class="layui-elem-field">
				<legend>未审搜索</legend>
				<form class="layui-form" action="" method="post">
					<div class="layui-form-item">
						<label class="layui-form-label">学号</label>
						<div class="layui-input-inline">
							<input type="text" name="username" autocomplete="off" class="layui-input">
						</div>
						<label class="layui-form-label">活动名称</label>
						<div class="layui-input-inline">
							<input type="text" name="acname" autocomplete="off" class="layui-input">
						</div>
						<div class="layui-input-inline">
							<button type="submit" class="layui-btn" lay-submit="" lay-filter="demo1"><i class="fa fa-search" aria-hidden="true"></i></button>
						</div>
					</div>
				</form>
			</fieldset>
			
			<fieldset class="layui-elem-field">
				<legend>待审核活动</legend>
				<a href="#scoring"><button class="dele">通过</button></a>
				<button class="dele" style="margin-left: 15px;" onclick="nps()">不通过</button>
				<button ng-click="col='time';desc=!desc" type="button" class="btntime">时间</button>
				<div class="layui-field-box">
					<table class="site-table table-hover">
						<thead>
							<tr>
								<th style="width: 15%;"><input type="checkbox" id="selected-all" ng-model="ischeckAll" ng-click="selectAll()"> 全选</th>
								<th style="width: 25%;">活动名称</th>
								<th style="width: 15%;">参与着</th>
								<th style="width: 25%;">活动时间</th>
								<th style="width: 20%;">操作</th>
							</tr>
						</thead>
						<tbody>
							<tr ng-repeat="x in records | orderBy:col:desc">
								<td><input type="checkbox" ng-model="x.ck" name="chk[]"  value="{{x.shid}}"></td>
								<td>{{x.shname}}</td>
								<td>
								  <a href="#" data-toggle="modal" data-target="#acblock">{{x.cyz}}</a>
								</td>
								<td>{{x.kssj}}</td>
								<td id=""  hidden>{{x.shid}}</td>
								<td>
									<a href="#scoring" class="layui-btn layui-btn-normal layui-btn-mini">通过<p name="sid[]" hidden>{{x.shid}}</p></a>
									<a href="?nshid={{x.shid}}" data-id="1" data-opt="del" class="layui-btn layui-btn-danger layui-btn-mini">不通过</a>
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
		<div  id="scoring">
			<form action="" method="get">
				<label class="stitle">评分</label>
				<select class="ss" name="score">
					<option value="0.2" selected="">0.2</option>
					<option value="0.3">0.3</option>
					<option value="0.5">0.5</option>
					<option value="0.8">0.8</option>
				</select>
				<input id="sid" name="sid" type="text" value="abc" hidden>
				<input type="submit" id="surescore" value="确定" />
			</form>
		</div>
		
		<!--详情框-->
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
			var app = angular.module("myApp", []);
			app.controller("myCtrl", function($scope) {
				<?php echo '$scope.records = '; ?>
<?php echo $this->_tpl_vars['passStu']; ?>
<?php echo ';'; ?>

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
			
			$(document).ready(function(){
				$("[href='#scoring']").click(function(){
					var $getchk=[];
					var $sid=$(this).find("p").text();
					$("input[name='chk[]']:checked").each(function(i){
						$getchk[i]=$(this).val();
					});
					if($getchk=="" && $sid==""){
						alert("请选择评分项目,逐条评分或多选评分!");
					}else if($sid!=""){
						$("#sid").attr("value",$sid);
					}else{
						$("#sid").attr("value",$getchk);
					}
				    
				})
			});
			function nps(){
				var $ngetchk=[];
				$("input[name='chk[]']:checked").each(function(i){
					$ngetchk[i]=$(this).val();
				});
				location.href="Admin_approveact.php?nshid[]="+$ngetchk;
			}
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