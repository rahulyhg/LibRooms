<?php /* Smarty version Smarty-3.1.7, created on 2013-03-20 12:36:34
         compiled from "/var/www/html/webenv/schedule/lib/Common/../../tpl/Controls/Attributes/SingleLineTextbox.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1626652169514a01b2a9d091-98133659%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '31f4bb7088017fbdcc808e3c315e5e770d8133ae' => 
    array (
      0 => '/var/www/html/webenv/schedule/lib/Common/../../tpl/Controls/Attributes/SingleLineTextbox.tpl',
      1 => 1363802528,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1626652169514a01b2a9d091-98133659',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'attributeName' => 0,
    'attribute' => 0,
    'align' => 0,
    'readonly' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_514a01b2ad687',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_514a01b2ad687')) {function content_514a01b2ad687($_smarty_tpl) {?>
<label class="customAttribute" for="<?php echo $_smarty_tpl->tpl_vars['attributeName']->value;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['attribute']->value->Label(), ENT_QUOTES, 'UTF-8', true);?>
</label>
<?php if ($_smarty_tpl->tpl_vars['align']->value=='vertical'){?>
<br/>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['readonly']->value){?>
<span class="attributeValue"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['attribute']->value->Value(), ENT_QUOTES, 'UTF-8', true);?>
</span>
<?php }else{ ?>
<input type="text" id="<?php echo $_smarty_tpl->tpl_vars['attributeName']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['attributeName']->value;?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['attribute']->value->Value(), ENT_QUOTES, 'UTF-8', true);?>
" class="customAttribute textbox" />
<?php }?><?php }} ?>