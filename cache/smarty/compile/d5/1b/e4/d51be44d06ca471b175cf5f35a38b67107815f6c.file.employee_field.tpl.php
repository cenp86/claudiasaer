<?php /* Smarty version Smarty-3.1.19, created on 2015-04-09 22:23:01
         compiled from "C:\xampp\htdocs\claudiasaer\admin\themes\default\template\controllers\logs\employee_field.tpl" */ ?>
<?php /*%%SmartyHeaderCode:109515526dfa50f95d3-33482004%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd51be44d06ca471b175cf5f35a38b67107815f6c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\claudiasaer\\admin\\themes\\default\\template\\controllers\\logs\\employee_field.tpl',
      1 => 1428439048,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '109515526dfa50f95d3-33482004',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'employee_image' => 0,
    'employee_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5526dfa51234a9_51019151',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5526dfa51234a9_51019151')) {function content_5526dfa51234a9_51019151($_smarty_tpl) {?>
<span class="employee_avatar_small">
	<img class="imgm img-thumbnail" alt="" src="<?php echo $_smarty_tpl->tpl_vars['employee_image']->value;?>
" width="32" height="32" />
</span>
<?php echo $_smarty_tpl->tpl_vars['employee_name']->value;?>
<?php }} ?>
