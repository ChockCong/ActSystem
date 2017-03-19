<?php /* Smarty version 2.6.30, created on 2017-03-16 05:29:46
         compiled from myac.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'Menu', 'myac.html', 21, false),)), $this); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>社会实践管理系统</title>
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css"/>
		<link rel="stylesheet" type="text/css" href="../css/reset.css"/>
		<link rel="stylesheet" type="text/css" href="../css/myac.css"/>
		<link rel="stylesheet" type="text/css" href="../css/pagination.css"/>
		<link rel="stylesheet" type="text/css" href="../css/default.css"/>
	</head>
	<body>
		<div id="main">
			<div id="head">
				<div id="title">
					<p><span>“</span>挥洒实践汗水，书写无悔青春。</p>
					<p>一日一践<span>”</span></p>
				</div>
				<!--导航-->
				<div id="nav">
				  <?php echo smarty_function_Menu(array(), $this);?>

				</div>
			</div>
			<div id="actab">
				<ul id="tabs">
					<li class="tab active" id="tab-1">历史活动</li>
					<li class="non">/</li>
					<li class="tab" id="tab-2">报名结果</li>
				</ul>
				<div id="show">
					<!--历史活动-->
					<div class="showed active" id="show1">
						<ul id="actitle">
							<li>活动名称</li>
							<li>活动时间</li>
							<li>得分</li>
							<li>详情查看</li>
						</ul>
						<div class="acpage">
							<section>
								<div class="data-container"></div>
								<div id="pagination-demo1"></div>
							</section>	
						<!--<ul class="acinfor">
							<li>雷锋月电脑义务维修</li>
							<li>2015.3.5</li>
							<li>0.3</li>
							<li><i class="glyphicon glyphicon-menu-hamburger" class="btnacdetail" data-toggle="modal" data-target="#acdetail"></i></li>
						</ul>
						<ul class="acinfor">
							<li>开学迎接新生</li>
							<li>2014.9.1</li>
							<li>0.2</li>
							<li><i class="glyphicon glyphicon-menu-hamburger" class="btnacdetail" data-toggle="modal" data-target="#acdetail"></i></li>
						</ul>
						<ul class="acinfor">
							<li>暑期“三下乡”社会实践</li>
							<li>2014.7.13</li>
							<li>1.0</li>
							<li><i class="glyphicon glyphicon-menu-hamburger" class="btnacdetail" data-toggle="modal" data-target="#acdetail"></i></li>
						</ul>
						<ul class="acinfor">
							<li>南国中英文小学朝阳行动</li>
							<li>2014.5.15</li>
							<li>0.2</li>
							<li><i class="glyphicon glyphicon-menu-hamburger" class="btnacdetail" data-toggle="modal" data-target="#acdetail"></i></li>
						</ul>
						<ul class="acinfor">
							<li>社区环保行动</li>
							<li>2013.11.23</li>
							<li>0.2</li>
							<li><i class="glyphicon glyphicon-menu-hamburger" class="btnacdetail" data-toggle="modal" data-target="#acdetail"></i></li>
						</ul>
						<ul class="acinfor">
							<li>“美丽肇庆”城市清洁</li>
							<li>2013.10.15</li>
							<li>0.2</li>
							<li><i class="glyphicon glyphicon-menu-hamburger" class="btnacdetail" data-toggle="modal" data-target="#acdetail"></i></li>
						</ul>
						<ul class="acinfor">
							<li>川仪小学义教</li>
							<li>2013.10.10</li>
							<li>0.2</li>
							<li><i class="glyphicon glyphicon-menu-hamburger" class="btnacdetail" data-toggle="modal" data-target="#acdetail"></i></li>
						</ul>-->
						</div>
						<!--<button>查看全部</button>-->
						<!--↓输出excel表格-->
						<form method="get" action="../Controller/PDFcontroller.php">
						<button type="submit" value="1" name="sid">活动导出</button> 
						</form>
					</div>
					<!--审批结果-->
					<div class="showed" id="show2">
						<div id="acaccess">
						<ul id="actitle">
							<li>活动名称</li>
							<li>活动时间</li>
							<li>审批情况</li>
						</ul>
						<div class="acpage">
						<iframe src="Personactcontroller.php" id="result" width="100%" height="100%" frameborder="0" name="result"></iframe>
						<!--<ul class="acresult">
							<li>雷锋月电脑义务维修</li>
							<li>2015.3.5</li>
							<li>未审核</li>
						</ul>
						<ul class="acresult">
							<li>开学迎接新生</li>
							<li>2014.9.1</li>
							<li>已通过</li>
						</ul>
						<ul class="acresult">
							<li>南国中英文小学朝阳行动</li>
							<li>2014.5.15</li>
							<li>已通过</li>
						</ul>
						<ul class="acresult">
							<li>社区环保行动</li>
							<li>2013.11.23</li>
							<li>未通过</li>
						</ul>
						<ul class="acresult">
							<li>“美丽肇庆”城市清洁</li>
							<li>2013.10.15</li>
							<li>已通过</li>
						</ul>
						<ul class="acresult">
							<li>川仪小学义教</li>
							<li>2013.10.10</li>
							<li>未通过</li>
						</ul>-->
						</div>
					</div>
				</div>
			</div>
		</div>
		

		<!--活动详情弹出框-->
	<div class="modal fade" id="acdetail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">活动记录详情</h4>
				</div>
				<div class="modal-body" id="modal-body">
					<!-- <ul>
						<li>活动名称：
							<p>南国小学</p>
						</li>
						<li>活动时间：
							<p>2015.3.5-2015.3.6</p>
						</li>
						<li>活动时长：
							<p>9:00-17:00</p>
						</li>
						<li>活动类型：
							<p>社会实践</p>
						</li>
						<li>活动内容：<span>服务于全校师生，进行计算机的维修工作</span></li>
						<li>实践得分：
							<p>0.3</p>
						</li>
					</ul> -->
				</div>
			</div>
		</div>
	</div>

	<script src="../js/jquery-1.12.3.min.js"  type="text/javascript"></script>
	<script src="../js/pagination.js" type="text/javascript" charset="utf-8"></script>
	<script src="../js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
	<script>
	function showacd(hid){
        //$("#testAjax").click(function(){
              
              //Ajax调用处理
            $.ajax({
               type: "GET",
               url: "Detailcontroller.php",
               data: "shid="+hid,
               success: function(data){  
                        $("#modal-body").html(data);
                  },
               error: function(){
            	        $("#modal-body").html("查询异常!");
            	  },
               beforeSend:function(){
            	        $("#modal-body").html("<h2 style='text-align:center;'>请稍后...<h2>");
            	  },
               complete:function(){
            	        
            	        $("#modal-body").html(data);
                  }
            });
            
         //});
        }
	</script>
	<script type="text/javascript">
		$(function(){
			var $tab = $(".tab");
			var $show1 = $("#show1");
			var $show2 = $("#show2");
			$tab.eq(0).click(function(){
				$tab.eq(1).removeClass("active");
				$show2.removeClass("active");
				$(this).addClass("active");
				$show1.addClass("active");
			});
			$tab.eq(1).click(function(){
				$tab.eq(0).removeClass("active");
				$show1.removeClass("active");
				$(this).addClass("active");
				$show2.addClass("active");
			});
		
		//分页功能

		function createDemo(name){
			var container = $('#pagination-' + name);
			var sources = function(){
				var result = [];

				//for(var i = 0; i <= 10; i++){
				<?php unset($this->_sections['akey']);
$this->_sections['akey']['name'] = 'akey';
$this->_sections['akey']['loop'] = is_array($_loop=$this->_tpl_vars['acts']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['akey']['show'] = true;
$this->_sections['akey']['max'] = $this->_sections['akey']['loop'];
$this->_sections['akey']['step'] = 1;
$this->_sections['akey']['start'] = $this->_sections['akey']['step'] > 0 ? 0 : $this->_sections['akey']['loop']-1;
if ($this->_sections['akey']['show']) {
    $this->_sections['akey']['total'] = $this->_sections['akey']['loop'];
    if ($this->_sections['akey']['total'] == 0)
        $this->_sections['akey']['show'] = false;
} else
    $this->_sections['akey']['total'] = 0;
if ($this->_sections['akey']['show']):

            for ($this->_sections['akey']['index'] = $this->_sections['akey']['start'], $this->_sections['akey']['iteration'] = 1;
                 $this->_sections['akey']['iteration'] <= $this->_sections['akey']['total'];
                 $this->_sections['akey']['index'] += $this->_sections['akey']['step'], $this->_sections['akey']['iteration']++):
$this->_sections['akey']['rownum'] = $this->_sections['akey']['iteration'];
$this->_sections['akey']['index_prev'] = $this->_sections['akey']['index'] - $this->_sections['akey']['step'];
$this->_sections['akey']['index_next'] = $this->_sections['akey']['index'] + $this->_sections['akey']['step'];
$this->_sections['akey']['first']      = ($this->_sections['akey']['iteration'] == 1);
$this->_sections['akey']['last']       = ($this->_sections['akey']['iteration'] == $this->_sections['akey']['total']);
?>
					<?php echo 'result.push("<ul class=\'acinfor\'><li>'; ?>
<?php echo $this->_tpl_vars['acts'][$this->_sections['akey']['index']]['shname']; ?>
<?php echo '</li><li>'; ?>
<?php echo $this->_tpl_vars['acts'][$this->_sections['akey']['index']]['kssj']; ?>
<?php echo '</li><li>'; ?>
<?php echo $this->_tpl_vars['acts'][$this->_sections['akey']['index']]['xf']; ?>
<?php echo '</li><li><i class=\'glyphicon glyphicon-menu-hamburger\' class=\'btnacdetail\' data-toggle=\'modal\' data-target=\'#acdetail\' onclick=\'showacd('; ?>
<?php echo $this->_tpl_vars['acts'][$this->_sections['akey']['index']]['shid']; ?>
<?php echo ')\'></i></li></ul>");'; ?>

				
				<?php endfor; endif; ?>
				//}
				return result;
			}();

			var options = {
				dataSource: sources,
				className: 'paginationjs-theme-blue',
				callback: function(response, pagination){
					window.console && console.log(response, pagination);

					var dataHtml = '<ul>';

					$.each(response, function(index, item){
						dataHtml += '<li>'+ item +'</li>';
					});

					dataHtml += '</ul>';

					container.prev().html(dataHtml);
				}
			};

			//$.pagination(container, options);

			container.addHook('beforeInit', function(){
				window.console && console.log('beforeInit...');
			});
			container.pagination(options);

			container.addHook('beforePageOnClick', function(){
				window.console && console.log('beforePageOnClick...');
				//return false
			});

			return container;
		}

		createDemo('demo1');

	});
	</script>
	</body>
</html>