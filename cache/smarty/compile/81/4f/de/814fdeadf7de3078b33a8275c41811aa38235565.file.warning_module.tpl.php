<?php /* Smarty version Smarty-3.1.19, created on 2015-04-09 22:23:01
         compiled from "C:\xampp\htdocs\claudiasaer\admin\themes\default\template\controllers\modules\warning_module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:231825526dfa5d72de0-72429140%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '814fdeadf7de3078b33a8275c41811aa38235565' => 
    array (
      0 => 'C:\\xampp\\htdocs\\claudiasaer\\admin\\themes\\default\\template\\controllers\\modules\\warning_module.tpl',
      1 => 1428439048,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '231825526dfa5d72de0-72429140',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_link' => 0,
    'text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5526dfa5da20e9_31229556',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5526dfa5da20e9_31229556')) {function content_5526dfa5da20e9_31229556($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_link']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a><?php }} ?>
