<?php /* Smarty version Smarty-3.1.19, created on 2015-04-10 17:00:44
         compiled from "C:\xampp\htdocs\claudiasaer\modules\blockcategories\views\blockcategories_admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5308552839fc0bb668-06576954%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e00ef281c13eda4e9bbfb15c2616bd5798e2610c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\claudiasaer\\modules\\blockcategories\\views\\blockcategories_admin.tpl',
      1 => 1428699358,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5308552839fc0bb668-06576954',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'helper' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_552839fc0c3804_40611439',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552839fc0c3804_40611439')) {function content_552839fc0c3804_40611439($_smarty_tpl) {?>
<div class="form-group">
	<label class="control-label col-lg-3">
		<span class="label-tooltip" data-toggle="tooltip" data-html="true" title="" data-original-title="<?php echo smartyTranslate(array('s'=>'You can upload a maximum of 3 images.','mod'=>'blockcategories'),$_smarty_tpl);?>
">
			<?php echo smartyTranslate(array('s'=>'Thumbnails','mod'=>'blockcategories'),$_smarty_tpl);?>

		</span>
	</label>
	<div class="col-lg-4">
		<?php echo $_smarty_tpl->tpl_vars['helper']->value;?>

	</div>
</div>
<?php }} ?>
