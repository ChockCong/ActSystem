<?php /* Smarty version 2.6.30, created on 2017-02-08 03:06:40
         compiled from index.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'print_r', 'index.html', 9, false),)), $this); ?>
<meta charset="utf8">
<html>
Hello,my Activity System
<!-- <?php $_from = $this->_tpl_vars['row']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['contact']):
?>
 <?php $_from = $this->_tpl_vars['contact']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
 <?php echo $this->_tpl_vars['item']; ?>
<br>
 <?php endforeach; endif; unset($_from); ?>
<?php endforeach; endif; unset($_from); ?> 
<?php echo print_r($this->_tpl_vars['row']); ?>
-->
<form name="form1" method="post" action="Controller/personcontroller.php">
姓名：<input type="text" value="<?php echo $this->_tpl_vars['admin']; ?>
"><br>
密码：<input type="text"><br>
<input type="submit" value="修改" style="align:center">
</form>

<iframe src="../Controller/test.php" style="width:100% height:100%"></iframe>
</html>