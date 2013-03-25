<?php /* Smarty version Smarty-3.1.7, created on 2013-03-20 12:40:24
         compiled from "/var/www/html/webenv/schedule/lib/Common/../../tpl/Ajax/reservation/save_successful.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1560247706514a0298343258-71396483%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b096be3210021afd146fe9afbbf1451c101602a3' => 
    array (
      0 => '/var/www/html/webenv/schedule/lib/Common/../../tpl/Ajax/reservation/save_successful.tpl',
      1 => 1363802528,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1560247706514a0298343258-71396483',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ReferenceNumber' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_514a029838758',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_514a029838758')) {function content_514a029838758($_smarty_tpl) {?>
<div>
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"dialog-success.png"),$_smarty_tpl);?>
<br/>
	<div><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ReservationCreated'),$_smarty_tpl);?>
</div>
	<div><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'YourReferenceNumber','args'=>$_smarty_tpl->tpl_vars['ReferenceNumber']->value),$_smarty_tpl);?>
</div>
	
	<input type="button" id="btnSaveSuccessful" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Close'),$_smarty_tpl);?>
" class="button" />

</div><?php }} ?>