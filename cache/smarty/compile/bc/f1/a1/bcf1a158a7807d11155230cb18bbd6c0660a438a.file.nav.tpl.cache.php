<?php /* Smarty version Smarty-3.1.19, created on 2015-04-09 16:32:00
         compiled from "C:\xampp\htdocs\claudiasaer\themes\default-bootstrap\modules\blockcontact\nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:253265526e1c0daeef0-17451458%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bcf1a158a7807d11155230cb18bbd6c0660a438a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\claudiasaer\\themes\\default-bootstrap\\modules\\blockcontact\\nav.tpl',
      1 => 1428439036,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '253265526e1c0daeef0-17451458',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'telnumber' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5526e1c0dc06e7_32156715',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5526e1c0dc06e7_32156715')) {function content_5526e1c0dc06e7_32156715($_smarty_tpl) {?>
<div id="contact-link">
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('contact',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Contact us','mod'=>'blockcontact'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Contact us','mod'=>'blockcontact'),$_smarty_tpl);?>
</a>
</div>
<?php if ($_smarty_tpl->tpl_vars['telnumber']->value) {?>
	<span class="shop-phone">
		<i class="icon-phone"></i><?php echo smartyTranslate(array('s'=>'Call us now:','mod'=>'blockcontact'),$_smarty_tpl);?>
 <strong><?php echo $_smarty_tpl->tpl_vars['telnumber']->value;?>
</strong>
	</span>
<?php }?><?php }} ?>
