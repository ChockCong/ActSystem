<?php /* Smarty version 2.6.30, created on 2017-01-17 12:52:50
         compiled from index.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'print_r', 'index.html', 4, false),)), $this); ?>
<meta charset="utf8">
<html>
Hello,my Activity System<br />
<?php echo print_r($this->_tpl_vars['row']); ?>

</html>