<?php /* Smarty version Smarty-3.1.7, created on 2013-03-20 14:57:10
         compiled from "/var/www/html/webenv/schedule/lib/Common/../../tpl/Admin/manage_blackouts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:594624136514a22a67e37d0-62153310%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf7edd05320bb06d521af2b93fbe85ff09f3e135' => 
    array (
      0 => '/var/www/html/webenv/schedule/lib/Common/../../tpl/Admin/manage_blackouts.tpl',
      1 => 1363802528,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '594624136514a22a67e37d0-62153310',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'AddStartDate' => 0,
    'AddEndDate' => 0,
    'Resources' => 0,
    'ResourceId' => 0,
    'Schedules' => 0,
    'ScheduleId' => 0,
    'RepeatTerminationDate' => 0,
    'StartDate' => 0,
    'EndDate' => 0,
    'blackouts' => 0,
    'rowCss' => 0,
    'blackout' => 0,
    'Timezone' => 0,
    'PageInfo' => 0,
    'Path' => 0,
    'RepeatType' => 0,
    'RepeatInterval' => 0,
    'RepeatMonthlyType' => 0,
    'RepeatWeekdays' => 0,
    'day' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_514a22a6a6146',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_514a22a6a6146')) {function content_514a22a6a6146($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/var/www/html/webenv/schedule/lib/Common/../../lib/external/Smarty/plugins/function.cycle.php';
?>
<?php echo $_smarty_tpl->getSubTemplate ('globalheader.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('cssFiles'=>'scripts/css/colorbox.css,css/admin.css,css/jquery.qtip.min.css,scripts/css/timePicker.css'), 0);?>


<h1><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ManageBlackouts'),$_smarty_tpl);?>
</h1>

<div class="admin">
	<div class="title">
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AddBlackout'),$_smarty_tpl);?>

	</div>
	<div>
		<form id="addBlackoutForm" method="post">
			<ul>
				<li>
					<label for="addStartDate" class="wideLabel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'BeginDate'),$_smarty_tpl);?>
</label>
					<input type="text" id="addStartDate" class="textbox" size="10" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['AddStartDate']->value),$_smarty_tpl);?>
"/>
					<input <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'BEGIN_DATE'),$_smarty_tpl);?>
 id="formattedAddStartDate" type="hidden" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['AddStartDate']->value,'key'=>'system'),$_smarty_tpl);?>
"/>
					<input <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'BEGIN_TIME'),$_smarty_tpl);?>
 type="text" id="addStartTime" class="textbox" size="7" value="12:00 AM" />
				</li>
				<li>
					<label for="addEndDate" class="wideLabel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'EndDate'),$_smarty_tpl);?>
</label>
					<input type="text" id="addEndDate" class="textbox" size="10" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['AddEndDate']->value),$_smarty_tpl);?>
"/>
					<input <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'END_DATE'),$_smarty_tpl);?>
 type="hidden" id="formattedAddEndDate" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['AddEndDate']->value,'key'=>'system'),$_smarty_tpl);?>
"/>
					<input <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'END_TIME'),$_smarty_tpl);?>
 type="text" id="addEndTime" class="textbox" size="7"  value="12:00 AM" />
				</li>
				<li>
					<label for="addResourceId" class="wideLabel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Resource'),$_smarty_tpl);?>
</label>
					<select <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'RESOURCE_ID'),$_smarty_tpl);?>
 class="textbox" id="addResourceId">
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['object_html_options'][0][0]->ObjectHtmlOptions(array('options'=>$_smarty_tpl->tpl_vars['Resources']->value,'key'=>'GetId','label'=>"GetName",'selected'=>$_smarty_tpl->tpl_vars['ResourceId']->value),$_smarty_tpl);?>

					</select>
					<?php if (count($_smarty_tpl->tpl_vars['Schedules']->value)>0){?>
					|
					<label for="allResources" style=""><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AllResourcesOn'),$_smarty_tpl);?>
 </label> <input <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'BLACKOUT_APPLY_TO_SCHEDULE'),$_smarty_tpl);?>
 type="checkbox" id="allResources" />
					<select <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'SCHEDULE_ID'),$_smarty_tpl);?>
 id="addScheduleId" class="textbox" disabled="disabled">
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['object_html_options'][0][0]->ObjectHtmlOptions(array('options'=>$_smarty_tpl->tpl_vars['Schedules']->value,'key'=>'GetId','label'=>"GetName",'selected'=>$_smarty_tpl->tpl_vars['ScheduleId']->value),$_smarty_tpl);?>

					</select>
					<?php }?>
				</li>
				<li>
					<label for="blackoutReason" class="wideLabel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Reason'),$_smarty_tpl);?>
</label>
					<input <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'SUMMARY'),$_smarty_tpl);?>
 type="text" id="blackoutReason" class="textbox required" size="100" maxlength="85"/>
				</li>
				<li>
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['control'][0][0]->DisplayControl(array('type'=>"RecurrenceControl",'RepeatTerminationDate'=>$_smarty_tpl->tpl_vars['RepeatTerminationDate']->value),$_smarty_tpl);?>

				</li>
				<li>
					<input <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'CONFLICT_ACTION'),$_smarty_tpl);?>
 type="radio" id="notifyExisting" name="existingReservations" checked="checked" value="<?php echo ReservationConflictResolution::Notify;?>
" />
					<label for="notifyExisting"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'BlackoutShowMe'),$_smarty_tpl);?>
</label>

					<input <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'CONFLICT_ACTION'),$_smarty_tpl);?>
 type="radio" id="deleteExisting" name="existingReservations" value="<?php echo ReservationConflictResolution::Delete;?>
" />
					<label for="deleteExisting"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'BlackoutDeleteConflicts'),$_smarty_tpl);?>
</label>
				</li>
				<li style="margin-top:15px; padding-top:15px; border-top: solid 1px #ededed;">
					<button type="button" class="button save create">
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"tick-circle.png"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Create'),$_smarty_tpl);?>

					</button>
					<input type="reset" value="Cancel" class="button" style="border: 0;background: transparent;color: blue;cursor:pointer; font-size: 60%" />
				</li>
			</ul>
		</form>
	</div>
</div>

<fieldset>
	<legend><h3><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Filter'),$_smarty_tpl);?>
</h3></legend>
	<table style="display:inline;">
		<tr>
			<td><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Between'),$_smarty_tpl);?>
</td>
			<td><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Schedule'),$_smarty_tpl);?>
</td>
			<td><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Resource'),$_smarty_tpl);?>
</td>
		</tr>
		<tr>
			<td>
				<input id="startDate" type="text" class="textbox" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['StartDate']->value),$_smarty_tpl);?>
"/>
				<input id="formattedStartDate" type="hidden" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['StartDate']->value,'key'=>'system'),$_smarty_tpl);?>
"/>
				-
				<input id="endDate" type="text" class="textbox" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['EndDate']->value),$_smarty_tpl);?>
"/>
				<input id="formattedEndDate" type="hidden" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['EndDate']->value,'key'=>'system'),$_smarty_tpl);?>
"/>
			</td>
			<td>
				<select id="scheduleId" class="textbox">
					<option value=""><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AllSchedules'),$_smarty_tpl);?>
</option>
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['object_html_options'][0][0]->ObjectHtmlOptions(array('options'=>$_smarty_tpl->tpl_vars['Schedules']->value,'key'=>'GetId','label'=>"GetName",'selected'=>$_smarty_tpl->tpl_vars['ScheduleId']->value),$_smarty_tpl);?>

				</select>
			</td>
			<td>
				<select id="resourceId" class="textbox">
					<option value=""><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AllResources'),$_smarty_tpl);?>
</option>
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['object_html_options'][0][0]->ObjectHtmlOptions(array('options'=>$_smarty_tpl->tpl_vars['Resources']->value,'key'=>'GetId','label'=>"GetName",'selected'=>$_smarty_tpl->tpl_vars['ResourceId']->value),$_smarty_tpl);?>

				</select>
			</td>
			<td rowspan="2">
				<button id="filter" class="button"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"search.png"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Filter'),$_smarty_tpl);?>
</button>
			</td>
		</tr>
	</table>
</fieldset>

<div>&nbsp;</div>

<table class="list" id="blackoutTable">
	<tr>
		<th class="id">&nbsp;</th>
		<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Resource'),$_smarty_tpl);?>
</th>
		<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'BeginDate'),$_smarty_tpl);?>
</th>
		<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'EndDate'),$_smarty_tpl);?>
</th>
		<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Reason'),$_smarty_tpl);?>
</th>
		<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'CreatedBy'),$_smarty_tpl);?>
</th>
		<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Delete'),$_smarty_tpl);?>
</th>
	</tr>
	<?php  $_smarty_tpl->tpl_vars['blackout'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['blackout']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['blackouts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['blackout']->key => $_smarty_tpl->tpl_vars['blackout']->value){
$_smarty_tpl->tpl_vars['blackout']->_loop = true;
?>
	<?php echo smarty_function_cycle(array('values'=>'row0,row1','assign'=>'rowCss'),$_smarty_tpl);?>

	<tr class="<?php echo $_smarty_tpl->tpl_vars['rowCss']->value;?>
 editable">
		<td class="id"><?php echo $_smarty_tpl->tpl_vars['blackout']->value->InstanceId;?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['blackout']->value->ResourceName;?>
</td>
		<td style="width:150px;"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['blackout']->value->StartDate,'timezone'=>$_smarty_tpl->tpl_vars['Timezone']->value,'key'=>'res_popup'),$_smarty_tpl);?>
</td>
		<td style="width:150px;"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['blackout']->value->EndDate,'timezone'=>$_smarty_tpl->tpl_vars['Timezone']->value,'key'=>'res_popup'),$_smarty_tpl);?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['blackout']->value->Title;?>
</td>
		<td><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fullname'][0][0]->DisplayFullName(array('first'=>$_smarty_tpl->tpl_vars['blackout']->value->FirstName,'last'=>$_smarty_tpl->tpl_vars['blackout']->value->LastName),$_smarty_tpl);?>
</td>
		<td align="center" style="width: 65px;"><a href="#" class="update delete"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>'cross-button.png'),$_smarty_tpl);?>
</a></td>
	</tr>
	<?php } ?>
</table>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['pagination'][0][0]->CreatePagination(array('pageInfo'=>$_smarty_tpl->tpl_vars['PageInfo']->value),$_smarty_tpl);?>


<div id="deleteDialog" class="dialog" style="display:none;" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Delete'),$_smarty_tpl);?>
">
	<form id="deleteForm" method="post">
		<div class="error" style="margin-bottom: 25px;">
			<h3><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'DeleteWarning'),$_smarty_tpl);?>
</h3>
		</div>
		<button type="button" class="button save"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"cross-button.png"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Delete'),$_smarty_tpl);?>
</button>
		<button type="button" class="button cancel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"slash.png"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Cancel'),$_smarty_tpl);?>
</button>
	</form>
</div>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"admin-ajax-indicator.gif",'class'=>"indicator",'style'=>"display:none;"),$_smarty_tpl);?>


<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
scripts/js/jquery.qtip.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
scripts/js/jquery.colorbox-min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
scripts/js/jquery.form-3.09.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
scripts/js/jquery.timePicker.min.js"></script>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
scripts/reservationPopup.js"></script>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
scripts/admin/edit.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
scripts/admin/blackouts.js"></script>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
scripts/date-helper.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
scripts/recurrence.js"></script>

<script type="text/javascript">

$(document).ready(function() {

	var updateScope = {};
	updateScope['btnUpdateThisInstance'] = '<?php echo SeriesUpdateScope::ThisInstance;?>
';
	updateScope['btnUpdateAllInstances'] = '<?php echo SeriesUpdateScope::FullSeries;?>
';
	updateScope['btnUpdateFutureInstances'] = '<?php echo SeriesUpdateScope::FutureInstances;?>
';

	var actions = {};
		
	var blackoutOpts = {
		updateScope: updateScope,
		actions: actions,
		deleteUrl: '<?php echo $_SERVER['SCRIPT_NAME'];?>
?action=<?php echo ManageBlackoutsActions::DELETE;?>
&<?php echo QueryStringKeys::BLACKOUT_ID;?>
=',
		addUrl: '<?php echo $_SERVER['SCRIPT_NAME'];?>
?action=<?php echo ManageBlackoutsActions::ADD;?>
',
        reservationUrlTemplate: "<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
reservation.php?<?php echo QueryStringKeys::REFERENCE_NUMBER;?>
=[refnum]",
		popupUrl: "<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
ajax/respopup.php"
	};

	var recurOpts = {
		repeatType:'<?php echo $_smarty_tpl->tpl_vars['RepeatType']->value;?>
',
		repeatInterval:'<?php echo $_smarty_tpl->tpl_vars['RepeatInterval']->value;?>
',
		repeatMonthlyType:'<?php echo $_smarty_tpl->tpl_vars['RepeatMonthlyType']->value;?>
',
		repeatWeekdays:[<?php  $_smarty_tpl->tpl_vars['day'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['day']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['RepeatWeekdays']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['day']->key => $_smarty_tpl->tpl_vars['day']->value){
$_smarty_tpl->tpl_vars['day']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['day']->value;?>
,<?php } ?>]
	};

	var recurElements = {
		beginDate: $('#formattedAddStartDate'),
		endDate: $('#formattedAddEndDate'),
		beginTime: $('#addStartTime'),
		endTime: $('#addEndTime')
	};

	var recurrence = new Recurrence(recurOpts, recurElements);
	recurrence.init();

	var blackoutManagement = new BlackoutManagement(blackoutOpts);
	blackoutManagement.init();
	
});
</script>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['control'][0][0]->DisplayControl(array('type'=>"DatePickerSetupControl",'ControlId'=>"startDate",'AltId'=>"formattedStartDate"),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['control'][0][0]->DisplayControl(array('type'=>"DatePickerSetupControl",'ControlId'=>"endDate",'AltId'=>"formattedEndDate"),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['control'][0][0]->DisplayControl(array('type'=>"DatePickerSetupControl",'ControlId'=>"addStartDate",'AltId'=>"formattedAddStartDate"),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['control'][0][0]->DisplayControl(array('type'=>"DatePickerSetupControl",'ControlId'=>"addEndDate",'AltId'=>"formattedAddEndDate"),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['control'][0][0]->DisplayControl(array('type'=>"DatePickerSetupControl",'ControlId'=>"EndRepeat",'AltId'=>"formattedEndRepeat"),$_smarty_tpl);?>


<div id="createDiv" style="display:none;text-align:center; top:15%;position:relative;">
	<div id="creating">
		<h3><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Working'),$_smarty_tpl);?>
...</h3>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"reservation_submitting.gif"),$_smarty_tpl);?>

	</div>
	<div id="result" style="display:none;"></div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('globalfooter.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>