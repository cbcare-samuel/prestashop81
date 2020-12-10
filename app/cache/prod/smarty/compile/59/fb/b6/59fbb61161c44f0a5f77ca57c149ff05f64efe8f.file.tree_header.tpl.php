<?php /* Smarty version Smarty-3.1.19, created on 2020-12-09 15:52:02
         compiled from "/var/www/html/admin0115fdt7y/themes/default/template/helpers/tree/tree_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5049488195fd0e492d02484-94761554%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '59fbb61161c44f0a5f77ca57c149ff05f64efe8f' => 
    array (
      0 => '/var/www/html/admin0115fdt7y/themes/default/template/helpers/tree/tree_header.tpl',
      1 => 1607452004,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5049488195fd0e492d02484-94761554',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'toolbar' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5fd0e492d0a0e1_85891378',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fd0e492d0a0e1_85891378')) {function content_5fd0e492d0a0e1_85891378($_smarty_tpl) {?>
<div class="tree-panel-heading-controls clearfix">
	<?php if (isset($_smarty_tpl->tpl_vars['title']->value)) {?><i class="icon-tag"></i>&nbsp;<?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl);?>
<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['toolbar']->value)) {?><?php echo $_smarty_tpl->tpl_vars['toolbar']->value;?>
<?php }?>
</div>
<?php }} ?>
