<?php /* Smarty version Smarty-3.1.7, created on 2013-03-21 16:05:42
         compiled from "/var/www/html/webenv/schedule/lib/Common/../../tpl/Ajax/resourcedetails.tpl" */ ?>
<?php /*%%SmartyHeaderCode:379037542514b84366ce9e7-50533354%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1db8394734d0eee7a5e8097f2e03e350a2058cda' => 
    array (
      0 => '/var/www/html/webenv/schedule/lib/Common/../../tpl/Ajax/resourcedetails.tpl',
      1 => 1363802528,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '379037542514b84366ce9e7-50533354',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'resourceName' => 0,
    'imageUrl' => 0,
    'description' => 0,
    'notes' => 0,
    'contactInformation' => 0,
    'locationInformation' => 0,
    'minimumDuration' => 0,
    'maximumDuration' => 0,
    'requiresApproval' => 0,
    'minimumNotice' => 0,
    'maximumNotice' => 0,
    'allowMultiday' => 0,
    'maxParticipants' => 0,
    'Attributes' => 0,
    'attribute' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_514b843682807',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_514b843682807')) {function content_514b843682807($_smarty_tpl) {?>
<div id="resourceDetailsPopup">
    <h4><?php echo $_smarty_tpl->tpl_vars['resourceName']->value;?>
</h4>

    <div style="clear"></div>
<?php if ($_smarty_tpl->tpl_vars['imageUrl']->value!=''){?>
    <div class="resourceImage">
        <img style="max-height:200px; max-width:200px;" src="<?php echo $_smarty_tpl->tpl_vars['imageUrl']->value;?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['resourceName']->value, ENT_QUOTES, 'UTF-8', true);?>
"/>
    </div>
<?php }?>
    <div class="description">
        <span class="bold"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Description'),$_smarty_tpl);?>
</span>
	<?php if ($_smarty_tpl->tpl_vars['description']->value!=''){?>
		<?php echo nl2br($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['url2link'][0][0]->CreateUrl(html_entity_decode($_smarty_tpl->tpl_vars['description']->value)));?>

		<?php }else{ ?>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'NoDescriptionLabel'),$_smarty_tpl);?>

	<?php }?>
        <br/>
        <span class="bold"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Notes'),$_smarty_tpl);?>
</span>
	<?php if ($_smarty_tpl->tpl_vars['notes']->value!=''){?>
		<?php echo nl2br($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['url2link'][0][0]->CreateUrl(html_entity_decode($_smarty_tpl->tpl_vars['notes']->value)));?>

		<?php }else{ ?>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'NoNotesLabel'),$_smarty_tpl);?>

	<?php }?>
        <br/>
        <span class="bold"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Contact'),$_smarty_tpl);?>
</span>
	<?php if ($_smarty_tpl->tpl_vars['contactInformation']->value!=''){?>
		<?php echo $_smarty_tpl->tpl_vars['contactInformation']->value;?>

		<?php }else{ ?>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'NoContactLabel'),$_smarty_tpl);?>

	<?php }?>
        <br/>
        <span class="bold"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Location'),$_smarty_tpl);?>
</span>
	<?php if ($_smarty_tpl->tpl_vars['locationInformation']->value!=''){?>
		<?php echo $_smarty_tpl->tpl_vars['locationInformation']->value;?>

		<?php }else{ ?>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'NoLocationLabel'),$_smarty_tpl);?>

	<?php }?>
    </div>
    <div class="attributes">
        <ul>
            <li>
			<?php if ($_smarty_tpl->tpl_vars['minimumDuration']->value!=''){?>
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceMinLength','args'=>$_smarty_tpl->tpl_vars['minimumDuration']->value),$_smarty_tpl);?>

				<?php }else{ ?>
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceMinLengthNone'),$_smarty_tpl);?>

				<?php }?>
            </li>
            <li>
			<?php if ($_smarty_tpl->tpl_vars['maximumDuration']->value!=''){?>
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceMaxLength','args'=>$_smarty_tpl->tpl_vars['maximumDuration']->value),$_smarty_tpl);?>

				<?php }else{ ?>
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceMaxLengthNone'),$_smarty_tpl);?>

				<?php }?>
            </li>
            <li>
			<?php if ($_smarty_tpl->tpl_vars['requiresApproval']->value){?>
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceRequiresApproval'),$_smarty_tpl);?>

				<?php }else{ ?>
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceRequiresApprovalNone'),$_smarty_tpl);?>

				<?php }?>
            </li>
            <li>
			<?php if ($_smarty_tpl->tpl_vars['minimumNotice']->value!=''){?>
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceMinNotice','args'=>$_smarty_tpl->tpl_vars['minimumNotice']->value),$_smarty_tpl);?>

				<?php }else{ ?>
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceMinNoticeNone'),$_smarty_tpl);?>

				<?php }?>
            </li>
            <li>
			<?php if ($_smarty_tpl->tpl_vars['maximumNotice']->value!=''){?>
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceMaxNotice','args'=>$_smarty_tpl->tpl_vars['maximumNotice']->value),$_smarty_tpl);?>

				<?php }else{ ?>
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceMaxNoticeNone'),$_smarty_tpl);?>

				<?php }?>
            </li>
            <li>
			<?php if ($_smarty_tpl->tpl_vars['allowMultiday']->value){?>
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceAllowMultiDay'),$_smarty_tpl);?>

				<?php }else{ ?>
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceNotAllowMultiDay'),$_smarty_tpl);?>

				<?php }?>
            </li>
            <li>
			<?php if ($_smarty_tpl->tpl_vars['maxParticipants']->value!=''){?>
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceCapacity','args'=>$_smarty_tpl->tpl_vars['maxParticipants']->value),$_smarty_tpl);?>

				<?php }else{ ?>
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceCapacityNone'),$_smarty_tpl);?>

				<?php }?>
            </li>
		<?php if (count($_smarty_tpl->tpl_vars['Attributes']->value)>0){?>
			<?php  $_smarty_tpl->tpl_vars['attribute'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['attribute']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Attributes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['attribute']->key => $_smarty_tpl->tpl_vars['attribute']->value){
$_smarty_tpl->tpl_vars['attribute']->_loop = true;
?>
                <li>
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['control'][0][0]->DisplayControl(array('type'=>"AttributeControl",'attribute'=>$_smarty_tpl->tpl_vars['attribute']->value,'readonly'=>true),$_smarty_tpl);?>

                </li>
			<?php } ?>
		<?php }?>
        </ul>
    </div>
    <div style="clear"></div>
</div><?php }} ?>