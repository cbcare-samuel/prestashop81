<?php /* Smarty version Smarty-3.1.19, created on 2020-12-08 19:48:20
         compiled from "/var/www/html/admin0115fdt7y/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1713999175fcfca74dd5b10-24131419%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '565511336abb7d4d0dcb67c6c5578f10173addb6' => 
    array (
      0 => '/var/www/html/admin0115fdt7y/themes/default/template/content.tpl',
      1 => 1607452003,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1713999175fcfca74dd5b10-24131419',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5fcfca74ddb134_16903895',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fcfca74ddb134_16903895')) {function content_5fcfca74ddb134_16903895($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }} ?>
