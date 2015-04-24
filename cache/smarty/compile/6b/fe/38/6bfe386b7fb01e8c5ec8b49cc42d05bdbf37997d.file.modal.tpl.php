<?php /* Smarty version Smarty-3.1.19, created on 2015-04-09 16:28:38
         compiled from "C:\xampp\htdocs\claudiasaer\admin714mcpgtu\themes\default\template\helpers\modules_list\modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:163055526e0f6ace246-17508541%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6bfe386b7fb01e8c5ec8b49cc42d05bdbf37997d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\claudiasaer\\admin714mcpgtu\\themes\\default\\template\\helpers\\modules_list\\modal.tpl',
      1 => 1428439044,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '163055526e0f6ace246-17508541',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5526e0f6ad32e9_65315137',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5526e0f6ad32e9_65315137')) {function content_5526e0f6ad32e9_65315137($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div><?php }} ?>
