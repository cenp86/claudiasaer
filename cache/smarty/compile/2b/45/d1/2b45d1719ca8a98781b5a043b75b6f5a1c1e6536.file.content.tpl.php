<?php /* Smarty version Smarty-3.1.19, created on 2015-04-09 22:23:06
         compiled from "C:\xampp\htdocs\claudiasaer\admin\themes\default\template\controllers\shop\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:318515526dfaa213565-56110973%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b45d1719ca8a98781b5a043b75b6f5a1c1e6536' => 
    array (
      0 => 'C:\\xampp\\htdocs\\claudiasaer\\admin\\themes\\default\\template\\controllers\\shop\\content.tpl',
      1 => 1428439046,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '318515526dfaa213565-56110973',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'shops_tree' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5526dfaa2359e0_63388546',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5526dfaa2359e0_63388546')) {function content_5526dfaa2359e0_63388546($_smarty_tpl) {?>

<div class="row">
	<div class="col-lg-4">
		<?php echo $_smarty_tpl->tpl_vars['shops_tree']->value;?>

	</div>
	<div class="col-lg-8"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</div>
</div><?php }} ?>
