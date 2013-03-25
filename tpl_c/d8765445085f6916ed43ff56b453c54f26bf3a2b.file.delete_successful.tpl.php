<?php /* Smarty version Smarty-3.1.7, created on 2013-03-22 14:29:13
         compiled from "/var/www/html/webenv/schedule/lib/Common/../../tpl/Ajax/reservation/delete_successful.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2093052173514cbf19b672a3-82152198%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8765445085f6916ed43ff56b453c54f26bf3a2b' => 
    array (
      0 => '/var/www/html/webenv/schedule/lib/Common/../../tpl/Ajax/reservation/delete_successful.tpl',
      1 => 1363802528,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2093052173514cbf19b672a3-82152198',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_514cbf19ba2c1',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_514cbf19ba2c1')) {function content_514cbf19ba2c1($_smarty_tpl) {?>
<div>
	<div><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ReservationRemoved'),$_smarty_tpl);?>
</div>
	
	<input type="button" id="btnSaveSuccessful" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Close'),$_smarty_tpl);?>
" class="button" />

</div><?php }} ?>