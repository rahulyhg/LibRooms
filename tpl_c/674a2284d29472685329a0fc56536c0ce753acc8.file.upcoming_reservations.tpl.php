<?php /* Smarty version Smarty-3.1.7, created on 2013-03-20 12:35:35
         compiled from "/var/www/html/webenv/schedule/lib/Common/../../tpl/Dashboard/upcoming_reservations.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1913824929514a0177074f45-27899590%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '674a2284d29472685329a0fc56536c0ce753acc8' => 
    array (
      0 => '/var/www/html/webenv/schedule/lib/Common/../../tpl/Dashboard/upcoming_reservations.tpl',
      1 => 1363802528,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1913824929514a0177074f45-27899590',
  'function' => 
  array (
    'displayReservation' => 
    array (
      'parameter' => 
      array (
      ),
      'compiled' => '',
    ),
  ),
  'variables' => 
  array (
    'reservation' => 0,
    'DefaultTitle' => 0,
    'Timezone' => 0,
    'Total' => 0,
    'colspan' => 0,
    'TodaysReservations' => 0,
    'TomorrowsReservations' => 0,
    'ThisWeeksReservations' => 0,
    'NextWeeksReservations' => 0,
  ),
  'has_nocache_code' => 0,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_514a01771661a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_514a01771661a')) {function content_514a01771661a($_smarty_tpl) {?>

<?php if (!function_exists('smarty_template_function_displayReservation')) {
    function smarty_template_function_displayReservation($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['displayReservation']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
<tr class="reservation" id="<?php echo $_smarty_tpl->tpl_vars['reservation']->value->ReferenceNumber;?>
">
	<td style="min-width: 250px;"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['reservation']->value->Title)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['DefaultTitle']->value : $tmp);?>
</td>
	<td style="min-width:150px;"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fullname'][0][0]->DisplayFullName(array('first'=>$_smarty_tpl->tpl_vars['reservation']->value->FirstName,'last'=>$_smarty_tpl->tpl_vars['reservation']->value->LastName),$_smarty_tpl);?>
</td>
	<td width="200px"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['reservation']->value->StartDate->ToTimezone($_smarty_tpl->tpl_vars['Timezone']->value),'key'=>'dashboard'),$_smarty_tpl);?>
</td>
	<td width="200px"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['reservation']->value->EndDate->ToTimezone($_smarty_tpl->tpl_vars['Timezone']->value),'key'=>'dashboard'),$_smarty_tpl);?>
</td>
	<td style="min-width: 150px; max-width: 250px;"><?php echo $_smarty_tpl->tpl_vars['reservation']->value->ResourceName;?>
</td>
</tr>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;}}?>



<div class="dashboard" id="upcomingReservationsDashboard">
	<div class="dashboardHeader">
		<a href="javascript:void(0);" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ShowHide'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"UpcomingReservations"),$_smarty_tpl);?>
</a> (<?php echo $_smarty_tpl->tpl_vars['Total']->value;?>
)
	</div>
	<div class="dashboardContents">
		<?php $_smarty_tpl->tpl_vars['colspan'] = new Smarty_variable("5", null, 0);?>
		<?php if ($_smarty_tpl->tpl_vars['Total']->value>0){?>
		<table>
			<tr class="timespan">
				<td colspan="<?php echo $_smarty_tpl->tpl_vars['colspan']->value;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"Today"),$_smarty_tpl);?>
 (<?php echo count($_smarty_tpl->tpl_vars['TodaysReservations']->value);?>
)</td>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['reservation'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['reservation']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['TodaysReservations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['reservation']->key => $_smarty_tpl->tpl_vars['reservation']->value){
$_smarty_tpl->tpl_vars['reservation']->_loop = true;
?>
                <?php smarty_template_function_displayReservation($_smarty_tpl,array('reservation'=>$_smarty_tpl->tpl_vars['reservation']->value));?>

			<?php } ?>
			
			<tr class="timespan">
				<td colspan="<?php echo $_smarty_tpl->tpl_vars['colspan']->value;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"Tomorrow"),$_smarty_tpl);?>
 (<?php echo count($_smarty_tpl->tpl_vars['TomorrowsReservations']->value);?>
)</td>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['reservation'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['reservation']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['TomorrowsReservations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['reservation']->key => $_smarty_tpl->tpl_vars['reservation']->value){
$_smarty_tpl->tpl_vars['reservation']->_loop = true;
?>
                <?php smarty_template_function_displayReservation($_smarty_tpl,array('reservation'=>$_smarty_tpl->tpl_vars['reservation']->value));?>

			<?php } ?>
			
			<tr class="timespan">
				<td colspan="<?php echo $_smarty_tpl->tpl_vars['colspan']->value;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"LaterThisWeek"),$_smarty_tpl);?>
 (<?php echo count($_smarty_tpl->tpl_vars['ThisWeeksReservations']->value);?>
)</td>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['reservation'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['reservation']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ThisWeeksReservations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['reservation']->key => $_smarty_tpl->tpl_vars['reservation']->value){
$_smarty_tpl->tpl_vars['reservation']->_loop = true;
?>
                <?php smarty_template_function_displayReservation($_smarty_tpl,array('reservation'=>$_smarty_tpl->tpl_vars['reservation']->value));?>

			<?php } ?>
			
			<tr class="timespan">
				<td colspan="<?php echo $_smarty_tpl->tpl_vars['colspan']->value;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"NextWeek"),$_smarty_tpl);?>
 (<?php echo count($_smarty_tpl->tpl_vars['NextWeeksReservations']->value);?>
)</td>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['reservation'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['reservation']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['NextWeeksReservations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['reservation']->key => $_smarty_tpl->tpl_vars['reservation']->value){
$_smarty_tpl->tpl_vars['reservation']->_loop = true;
?>
                <?php smarty_template_function_displayReservation($_smarty_tpl,array('reservation'=>$_smarty_tpl->tpl_vars['reservation']->value));?>

			<?php } ?>
		</table>
		<?php }else{ ?>
			<div class="noresults"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"NoUpcomingReservations"),$_smarty_tpl);?>
</div>
		<?php }?>
	</div>
</div><?php }} ?>