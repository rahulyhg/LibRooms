<?php /* Smarty version Smarty-3.1.7, created on 2013-03-20 15:21:55
         compiled from "/var/www/html/webenv/schedule/lib/Common/../../tpl/Admin/manage_groups.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1472300399514a2873460a92-53097691%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '85341ae8460c09c2a4eb001ad3e087b1f0d7a160' => 
    array (
      0 => '/var/www/html/webenv/schedule/lib/Common/../../tpl/Admin/manage_groups.tpl',
      1 => 1363802528,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1472300399514a2873460a92-53097691',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CanChangeRoles' => 0,
    'groups' => 0,
    'rowCss' => 0,
    'group' => 0,
    'chooseText' => 0,
    'PageInfo' => 0,
    'resources' => 0,
    'resource' => 0,
    'Roles' => 0,
    'role' => 0,
    'AdminGroups' => 0,
    'adminGroup' => 0,
    'Path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_514a287369aeb',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_514a287369aeb')) {function content_514a287369aeb($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/var/www/html/webenv/schedule/lib/Common/../../lib/external/Smarty/plugins/function.cycle.php';
?>
<?php echo $_smarty_tpl->getSubTemplate ('globalheader.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('cssFiles'=>'css/admin.css'), 0);?>


<h1><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ManageGroups'),$_smarty_tpl);?>
</h1>

<div style="padding: 10px 0px;">
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'FindGroup'),$_smarty_tpl);?>
:<br/>
	<input type="text" id="groupSearch" class="textbox" size="40"/> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_link'][0][0]->PrintLink(array('href'=>$_SERVER['SCRIPT_NAME'],'key'=>'AllGroups'),$_smarty_tpl);?>

</div>
<table class="list">
	<tr>
		<th class="id">&nbsp;</th>
		<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'GroupName'),$_smarty_tpl);?>
</th>
		<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Actions'),$_smarty_tpl);?>
</th>
		<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'GroupMembers'),$_smarty_tpl);?>
</th>
		<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Permissions'),$_smarty_tpl);?>
</th>
		<?php if ($_smarty_tpl->tpl_vars['CanChangeRoles']->value){?>
		<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'GroupRoles'),$_smarty_tpl);?>
</th>
		<?php }?>
		<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'GroupAdmin'),$_smarty_tpl);?>
</th>
	</tr>
<?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value){
$_smarty_tpl->tpl_vars['group']->_loop = true;
?>
	<?php echo smarty_function_cycle(array('values'=>'row0,row1','assign'=>'rowCss'),$_smarty_tpl);?>

	<tr class="<?php echo $_smarty_tpl->tpl_vars['rowCss']->value;?>
">
		<td class="id"><input type="hidden" class="id" value="<?php echo $_smarty_tpl->tpl_vars['group']->value->Id;?>
"/></td>
		<td ><?php echo $_smarty_tpl->tpl_vars['group']->value->Name;?>
</td>
		<td align="center"><a href="#" class="update rename"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Rename'),$_smarty_tpl);?>
</a> | <a href="#" class="update delete"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Delete'),$_smarty_tpl);?>
</a></td>
		<td align="center"><a href="#" class="update members"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Manage'),$_smarty_tpl);?>
</a></td>
		<td align="center"><a href="#" class="update permissions"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Change'),$_smarty_tpl);?>
</a></td>
		<?php if ($_smarty_tpl->tpl_vars['CanChangeRoles']->value){?>
		<td align="center"><a href="#" class="update roles"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Change'),$_smarty_tpl);?>
</a></td>
		<?php }?>
		<td align="center"><a href="#" class="update groupAdmin"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['group']->value->AdminGroupName)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['chooseText']->value : $tmp);?>
</a></td>
	</tr>
<?php } ?>
</table>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['pagination'][0][0]->CreatePagination(array('pageInfo'=>$_smarty_tpl->tpl_vars['PageInfo']->value),$_smarty_tpl);?>


<input type="hidden" id="activeId" />

<div id="membersDialog" class="dialog" style="display:none;" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'GroupMembers'),$_smarty_tpl);?>
">
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AddUser'),$_smarty_tpl);?>
: <input type="text" id="userSearch" class="textbox" size="40" /> <a href="#" id="browseUsers"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Browse'),$_smarty_tpl);?>
</a>
	<div id="allUsers" style="display:none;" class="dialog" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AllUsers'),$_smarty_tpl);?>
"></div>
	<h4><span id="totalUsers"></span> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'UsersInGroup'),$_smarty_tpl);?>
</h4>
	<div id="groupUserList"></div>
</div>

<div id="permissionsDialog" class="dialog" style="display:none;" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Permissions'),$_smarty_tpl);?>
">
	<form id="permissionsForm" method="post">
		<?php  $_smarty_tpl->tpl_vars['resource'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['resource']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['resources']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['resource']->key => $_smarty_tpl->tpl_vars['resource']->value){
$_smarty_tpl->tpl_vars['resource']->_loop = true;
?>
			<label><input <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'RESOURCE_ID','multi'=>true),$_smarty_tpl);?>
 class="resourceId" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetResourceId();?>
"> <?php echo $_smarty_tpl->tpl_vars['resource']->value->GetName();?>
</label><br/>
		<?php } ?>
		<button type="button" class="button save"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"tick-circle.png"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Update'),$_smarty_tpl);?>
</button>
		<button type="button" class="button cancel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"slash.png"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Cancel'),$_smarty_tpl);?>
</button>
	</form>
</div>

<form id="removeUserForm" method="post">
	<input type="hidden" id="removeUserId" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'USER_ID'),$_smarty_tpl);?>
 />
</form>

<form id="addUserForm" method="post">
	<input type="hidden" id="addUserId" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'USER_ID'),$_smarty_tpl);?>
 />
</form>

<div id="deleteDialog" class="dialog" style="display:none;" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Delete'),$_smarty_tpl);?>
">
	<form id="deleteGroupForm" method="post">
		<div class="error" style="margin-bottom: 25px;">
			<h3><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'DeleteWarning'),$_smarty_tpl);?>
</h3>
			<div><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'DeleteGroupWarning'),$_smarty_tpl);?>
</div>
		</div>
		<button type="button" class="button save"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"cross-button.png"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Delete'),$_smarty_tpl);?>
</button>
		<button type="button" class="button cancel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"slash.png"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Cancel'),$_smarty_tpl);?>
</button>
	</form>
</div>

<div id="renameDialog" class="dialog" style="display:none;" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Rename'),$_smarty_tpl);?>
">
	<form id="renameGroupForm" method="post">
		<label><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Name'),$_smarty_tpl);?>
<br/> <input type="text" class="textbox required" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'GROUP_NAME'),$_smarty_tpl);?>
 /></label>
		<button type="button" class="button save"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"disk-black.png"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Rename'),$_smarty_tpl);?>
</button>
		<button type="button" class="button cancel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"slash.png"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Cancel'),$_smarty_tpl);?>
</button>
	</form>
</div>

<?php if ($_smarty_tpl->tpl_vars['CanChangeRoles']->value){?>
<div id="rolesDialog" class="dialog" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'WhatRolesApplyToThisGroup'),$_smarty_tpl);?>
">
	<form id="rolesForm" method="post">
		<ul>
		<?php  $_smarty_tpl->tpl_vars['role'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['role']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Roles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['role']->key => $_smarty_tpl->tpl_vars['role']->value){
$_smarty_tpl->tpl_vars['role']->_loop = true;
?>
			<li><label><input type="checkbox" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'ROLE_ID','multi'=>true),$_smarty_tpl);?>
" value="<?php echo $_smarty_tpl->tpl_vars['role']->value->Id;?>
" /> <?php echo $_smarty_tpl->tpl_vars['role']->value->Name;?>
</label></li>
		<?php } ?>
		</ul>

		<button type="button" class="button save"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"tick-circle.png"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Update'),$_smarty_tpl);?>
</button>
		<button type="button" class="button cancel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"slash.png"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Cancel'),$_smarty_tpl);?>
</button>
	</form>
</div>
<?php }?>

<div id="groupAdminDialog" class="dialog" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'WhoCanManageThisGroup'),$_smarty_tpl);?>
">
	<form method="post" id="groupAdminForm">
		<select <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'GROUP_ADMIN'),$_smarty_tpl);?>
 class="textbox">
			<option value="">-- <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'None'),$_smarty_tpl);?>
 --</option>
			<?php  $_smarty_tpl->tpl_vars['adminGroup'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['adminGroup']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['AdminGroups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['adminGroup']->key => $_smarty_tpl->tpl_vars['adminGroup']->value){
$_smarty_tpl->tpl_vars['adminGroup']->_loop = true;
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['adminGroup']->value->Id;?>
"><?php echo $_smarty_tpl->tpl_vars['adminGroup']->value->Name;?>
</option>
			<?php } ?>
		</select>

		<button type="button" class="button save"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"tick-circle.png"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Update'),$_smarty_tpl);?>
</button>
		<button type="button" class="button cancel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"slash.png"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Cancel'),$_smarty_tpl);?>
</button>
	</form>
</div>

<div class="admin" style="margin-top:30px">
	<div class="title">
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AddGroup'),$_smarty_tpl);?>

	</div>
	<div>
		<div id="addGroupResults" class="error" style="display:none;"></div>
		<form id="addGroupForm" method="post">
			Name<br/> <input type="text" class="textbox required" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'GROUP_NAME'),$_smarty_tpl);?>
 />
			<button type="button" class="button save"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"plus-button.png"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AddGroup'),$_smarty_tpl);?>
</button>
		</form>
	</div>
</div>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"admin-ajax-indicator.gif",'class'=>"indicator",'style'=>"display:none;"),$_smarty_tpl);?>


<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
scripts/admin/edit.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
scripts/autocomplete.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
scripts/admin/group.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
scripts/js/jquery.form-3.09.min.js"></script>

<script type="text/javascript">
	$(document).ready(function() {

	var actions = {
		activate: '<?php echo ManageGroupsActions::Activate;?>
',
		deactivate: '<?php echo ManageGroupsActions::Deactivate;?>
',
		permissions: '<?php echo ManageGroupsActions::Permissions;?>
',
		password: '<?php echo ManageGroupsActions::Password;?>
',
		removeUser: '<?php echo ManageGroupsActions::RemoveUser;?>
',
		addUser: '<?php echo ManageGroupsActions::AddUser;?>
',
		addGroup: '<?php echo ManageGroupsActions::AddGroup;?>
',
		renameGroup: '<?php echo ManageGroupsActions::RenameGroup;?>
',
		deleteGroup: '<?php echo ManageGroupsActions::DeleteGroup;?>
',
		roles: '<?php echo ManageGroupsActions::Roles;?>
',
		groupAdmin: '<?php echo ManageGroupsActions::GroupAdmin;?>
'
	};

	var dataRequests = {
		permissions: 'permissions',
		roles: 'roles',
		groupMembers: 'groupMembers'
	};
			
	var groupOptions = {
		userAutocompleteUrl: "../ajax/autocomplete.php?type=<?php echo AutoCompleteType::User;?>
",
		groupAutocompleteUrl: "../ajax/autocomplete.php?type=<?php echo AutoCompleteType::Group;?>
",
		groupsUrl:  "<?php echo $_SERVER['SCRIPT_NAME'];?>
",
		permissionsUrl:  '<?php echo $_SERVER['SCRIPT_NAME'];?>
',
		rolesUrl:  '<?php echo $_SERVER['SCRIPT_NAME'];?>
',
		submitUrl: '<?php echo $_SERVER['SCRIPT_NAME'];?>
',
		saveRedirect: '<?php echo $_SERVER['SCRIPT_NAME'];?>
',
		selectGroupUrl: '<?php echo $_SERVER['SCRIPT_NAME'];?>
?gid=',
		actions: actions,
		dataRequests: dataRequests
	};

	var groupManagement = new GroupManagement(groupOptions);
	groupManagement.init();
	});
</script>
<?php echo $_smarty_tpl->getSubTemplate ('globalfooter.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>