<?php /* Smarty version 2.6.30, created on 2017-03-15 06:13:03
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
			<form method="post" action="?declare_title=2">
				<input type="text" id="scon" value="" placeholder="请输入活动名称" name="text"/>
				<input type="submit" id="sbtn" value="搜索" />
				<p>查看全部请直接点击搜索</p>
				</form>
			</div>
			<div id="query">
				<div id="scroll">
				<ul>
				 <?php $_from = $this->_tpl_vars['Acts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['acts']):
?>
					<li onclick="showact(<?php echo $this->_tpl_vars['acts']['shid']; ?>
)"><?php echo $this->_tpl_vars['acts']['shname']; ?>
</li>
				 <?php endforeach; endif; unset($_from); ?>
				</ul>
				</div>
				<span class="more"><b></b></span>
				<p>tips:向下滚动显示更多</p>
			</div>
			<div id="acal">
				<form action="?declare_title=2" class="pac" method="post" id="pac">
					<div class="form-group-sm">
						<label for="acname">活动名称</label>			
						<input type="text" class="form-control" name="acname" id="acname" value=""/>
						<input name="actid" id="actid" type="text" hidden/>
					</div>
					<div class="form-group-sm">
						<label for="acaddr">活动地点</label>	
						<input type="text" class="form-control" name="acaddr" id="acaddr" value="" />
					</div>					
					<div class="form-group-sm">
						<label>活动时间<p><input type="text" class="input" id="pickdate" name="pickdate" value=""/>-<input type="text" class="input" id="pickdate2" name="pickdate2" value=""/></p></label>						
					</div>
					<div class="form-group-sm">
						<label>活动时长<p><input type="text" class="input" id="picktime" name="picktime" value=""/>-<input type="text" class="input" id="picktime2" name="picktime2" value=""/></label>
					</div>
					<div class="form-group-sm">
						<label>活动类型
							<select class="input radius" name="astype" id="astype">
								<option value="sc" selected="selected">社会实践</option>
								<option value="vs" >志愿服务</option>
							</select>
						</label>
					</div>
					<div class="form-group-sm">
						<label>活动内容</label><br />
						<textarea class="form-control" rows="5" cols="30" name="actype" id="actype"></textarea>
					</div>
					<div id="btn-sub2">
						<div class="icon">
						<input type="submit" name="acalter" value="修改"/>
						<i class=" glyphicon glyphicon-saved"></i>							
						</div>
						<div class="icon">							
						<input type="submit" id="acdele" name="acdele" value="删除" />
						<i class="glyphicon glyphicon-trash"></i>
						</div>
					</div>
				</form>
			</div>
		</div>
		<script src="../js/jquery-1.12.3.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="../js/timedropper.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="../js/datedropper.min.js" type="text/javascript" charset="utf-8"></script>

		<script>
			//点击显示
			$(function(){
				//var $sea = $("#sbtn");
				var $que = $("#query");
				var $ch = $("#acal");
				var $li = $("li");
				//($sea).click(function(){
				$que.show();
				//});
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
		<script>
		function showact(hid){
            $.ajax({
	               type: "get",
	               url: "Detailcontroller.php",
	               dataType: 'json',
	               data: "chid="+hid,
	               complete: function(){ $("#acal").show(); },
	               success: function(response){
	            	   //var dataObj = eval("("+response+")");//就当是json语法，只能死记硬背了
	            	   $.each(response,function(idx,item){   
	            	    //输出  
	            	    $("#actid").val(item.shid);
	            	    $("#acname").val(item.shname);
	            	    $("#acaddr").val(item.fwdw);
	            	    $("#pickdate").val(item.kssj);$("#pickdate2").val(item.jssj);
	            	    $("#picktime").val(item.time1);$("#picktime2").val(item.time2);
	            	    if(item.fwlx=="vs"){
	            	    	$("#astype").get(0).selectedIndex=1;   	    	
	            	    }else
	            	    	$("#astype").get(0).selectedIndex=0; 
	            	    
	            	    $("#actype").text(item.nr);
	            		   
	            	   }) 
	                  },
	               error: function(data){
	            	        $("#acal").html("查询异常!");
	            	  },
//		           beforeSend: function(){
//	            	        $("#acal").html("<h2>正在获取数据...</h2>");
//	            	  },
	            });
	 }
		</script>
	</body>
</html>