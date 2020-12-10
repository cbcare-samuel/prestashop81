<?php /* Smarty version Smarty-3.1.19, created on 2020-12-09 11:55:31
         compiled from "/var/www/html/modules/ps_checkout//views/templates/hook/adminAfterHeader/promotionBlock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2701587115fd0ad23559a60-10082687%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6fdfac1de9898255491293e556f88f0a8f7cc8e0' => 
    array (
      0 => '/var/www/html/modules/ps_checkout//views/templates/hook/adminAfterHeader/promotionBlock.tpl',
      1 => 1607452272,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2701587115fd0ad23559a60-10082687',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'imgPath' => 0,
    'configureLink' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5fd0ad235724f9_76116423',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fd0ad235724f9_76116423')) {function content_5fd0ad235724f9_76116423($_smarty_tpl) {?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <h3 class="card-header">
                    <i class="material-icons">extension</i> <?php echo smartyTranslate(array('s'=>'One module, all payments methods.','mod'=>'ps_checkout'),$_smarty_tpl);?>

                </h3>
                <div class="card-block">
                    <div class="module-item-list">
                        <div class="row module-item-wrapper-list py-3">
                            <div class="col-12 col-sm-2 col-md-2 col-lg-3">
                                <div class="img m-auto">
                                </div>
                            </div>
                            <div class="row col-12 col-sm-6 col-md-7 col-lg-7 pl-0">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-8 pl-0">
                                    <ul class="text-muted">
                                        <li class="mb-1"><?php echo smartyTranslate(array('s'=>'Offer the widest range of payment methods: cards, PayPal, etc.','mod'=>'ps_checkout'),$_smarty_tpl);?>
</li>
                                        <li class="mb-1"><?php echo smartyTranslate(array('s'=>'Benefit from all PayPal expertise and advantages','mod'=>'ps_checkout'),$_smarty_tpl);?>
</li>
                                        <li><?php echo smartyTranslate(array('s'=>'Give access to relevant local payment methods for customers around the globe','mod'=>'ps_checkout'),$_smarty_tpl);?>
</li>
                                    </ul>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-4 pl-0">
                                    <label class="text-muted">
                                        <?php echo smartyTranslate(array('s'=>'Including:','mod'=>'ps_checkout'),$_smarty_tpl);?>

                                    </label>
                                    <div>
                                        <img class="payment-icon" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['imgPath']->value,'htmlall','UTF-8');?>
paypal.jpg" alt="">
                                        <img class="payment-icon" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['imgPath']->value,'htmlall','UTF-8');?>
visa.jpg" alt="">
                                        <img class="payment-icon" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['imgPath']->value,'htmlall','UTF-8');?>
mastercard.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-4 col-md-3 col-lg-2 mb-3 m-auto">
                                <div class="text-center">
                                    <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['configureLink']->value,'htmlall','UTF-8');?>
" class="btn btn-primary-reverse btn-outline-primary light-button">
                                        <?php echo smartyTranslate(array('s'=>'Configure','mod'=>'ps_checkout'),$_smarty_tpl);?>

                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }} ?>
