<?php /* Smarty version Smarty-3.1.19, created on 2015-04-10 16:57:34
         compiled from "C:\xampp\htdocs\claudiasaer\modules\blockspecials\views\templates\hook\blockspecials-home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:239415526ed1952ed52-55777162%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '29fed486ac07205f1f00ba35f89a165b6b907f8c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\claudiasaer\\modules\\blockspecials\\views\\templates\\hook\\blockspecials-home.tpl',
      1 => 1428699364,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '239415526ed1952ed52-55777162',
  'function' => 
  array (
  ),
  'cache_lifetime' => 31536000,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5526ed1953dd71_47301826',
  'variables' => 
  array (
    'specials' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5526ed1953dd71_47301826')) {function content_5526ed1953dd71_47301826($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['specials']->value)&&$_smarty_tpl->tpl_vars['specials']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('products'=>$_smarty_tpl->tpl_vars['specials']->value,'class'=>'blockspecials tab-pane','id'=>'blockspecials'), 0);?>

<?php } else { ?>
<ul id="blockspecials" class="blockspecials tab-pane">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No special products at this time.','mod'=>'blockspecials'),$_smarty_tpl);?>
</li>
</ul>
<?php }?>
<?php }} ?>
