<?php /* Smarty version 2.6.30, created on 2017-02-11 11:14:26
         compiled from result.html */ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css"/>
		<link rel="stylesheet" type="text/css" href="../css/reset.css"/>
		<link rel="stylesheet" type="text/css" href="../css/default.css"/>
		<link rel="stylesheet" type="text/css" href="../css/pagination.css"/>
		<link rel="stylesheet" type="text/css" href="../css/myac.css"/>
		<style type="text/css">
			#pagination-demo1{
				bottom: 45px;/*bottom: 9%;*/
			}
		</style>
	</head>
	<body>
		
		<section>
			<div class="data-container"></div>
			<div id="pagination-demo1"></div>
		</section>				
							
		<script src="../js/jquery-1.12.3.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="../js/pagination.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript">
			$(function(){

		function createDemo(name){
			var container = $('#pagination-' + name);
			var sources = function(){
				var result = [];

				for(var i = 1; i <= 20; i++){
					
					result.push("<ul class='acresult'><li>雷锋月电脑义务维修</li><li>2015.3.5</li><li>未审核</li></ul>");
				}

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