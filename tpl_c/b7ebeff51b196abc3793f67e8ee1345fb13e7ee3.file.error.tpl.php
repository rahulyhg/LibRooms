<?php /* Smarty version Smarty-3.1.7, created on 2013-03-22 12:02:01
         compiled from "/var/www/html/webenv/schedule/lib/Common/../../tpl/error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2120503027514c9c997403a9-65298723%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7ebeff51b196abc3793f67e8ee1345fb13e7ee3' => 
    array (
      0 => '/var/www/html/webenv/schedule/lib/Common/../../tpl/error.tpl',
      1 => 1363802528,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2120503027514c9c997403a9-65298723',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ErrorMessage' => 0,
    'ReturnUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_514c9c9978c52',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_514c9c9978c52')) {function content_514c9c9978c52($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('globalheader.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="error">
    <h3><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>$_smarty_tpl->tpl_vars['ErrorMessage']->value),$_smarty_tpl);?>
</h3>
    <h5><a href="<?php echo $_smarty_tpl->tpl_vars['ReturnUrl']->value;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ReturnToPreviousPage'),$_smarty_tpl);?>
</a></h5>
</div>


<?php echo $_smarty_tpl->getSubTemplate ('globalfooter.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>