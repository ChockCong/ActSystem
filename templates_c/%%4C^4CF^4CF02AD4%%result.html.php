<?php /* Smarty version 2.6.30, created on 2017-03-16 07:25:17
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
			<div id="pagination-demo1" class="re"></div>
		</section>				
							
		<script src="../js/jquery-1.12.3.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="../js/pagination.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript">
	$(function(){

		function createDemo(name){
			var container = $('#pagination-' + name);
			var sources = function(){
				var result = [];

				//for(var i = 1; i <= 20; i++){
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
					<?php echo 'result.push("<ul class=\'acresult\'><li>'; ?>
<?php echo $this->_tpl_vars['acts'][$this->_sections['akey']['index']]['hname']; ?>
<?php echo '</li><li>'; ?>
<?php echo $this->_tpl_vars['acts'][$this->_sections['akey']['index']]['kssj']; ?>
<?php echo '</li><li>'; ?>
<?php echo $this->_tpl_vars['acts'][$this->_sections['akey']['index']]['tag']; ?>
<?php echo '</li></ul>");'; ?>

				<?php endfor; endif; ?>	
					//result.push(/"<ul class='acresult'><li>雷锋月电脑义务维修</li><li>2015.3.5</li><li>未审核</li></ul>");
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