{*
Copyright 2011-2013 Nick Korbel

This file is part of phpScheduleIt.

phpScheduleIt is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

phpScheduleIt is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with phpScheduleIt.  If not, see <http://www.gnu.org/licenses/>.
*}
{include file='globalheader.tpl' cssFiles='css/admin.css'}


<h1>{translate key=ManageUsers}</h1>

<div style="padding: 10px 0px;">
    <table>
        <tr>
            <td><label for="userSearch">{translate key=FindUser}:</label></td>
            <td><label for="filterStatusId">{translate key=Status}:</label></td>
        </tr>
        <tr>
            <td><input type="text" id="userSearch" class="textbox"
                       size="40"/> {html_link href=$smarty.server.SCRIPT_NAME key=AllUsers}</td>
            <td><select id="filterStatusId" class="textbox">
			{html_options selected=$FilterStatusId options=$statusDescriptions}
            </select></td>
        </tr>

    </table>
</div>

<table class="list userList">
    <tr>
        <th class="id">&nbsp;</th>
        <th>{translate key='Name'}</th>
        <th>{translate key='Username'}</th>
        <th>{translate key='Email'}</th>
        <th>{translate key='Phone'}</th>
        <th>{translate key='Organization'}</th>
        <th>{translate key='Position'}</th>
        <th>{translate key='Created'}</th>
        <th>{translate key='LastLogin'}</th>
        <th>{translate key='Timezone'}</th>
        <th>{translate key='Language'}</th>
        <th>{translate key='Status'}</th>
        <th>{translate key='Permissions'}</th>
        <th>{translate key='Groups'}</th>
        <th>{translate key='Reservations'}</th>
        <th>{translate key='Password'}</th>
        <th>{translate key='Delete'}</th>
    </tr>
{foreach from=$users item=user}
	{cycle values='row0,row1' assign=rowCss}
    <tr class="{$rowCss} editable">
        <td class="id"><input type="hidden" class="id" value="{$user->Id}"/></td>
        <td>{fullname first=$user->First last=$user->Last ignorePrivacy="true"}</td>
        <td>{$user->Username}</td>
        <td><a href="mailto:{$user->Email}">{$user->Email}</a></td>
        <td>{$user->Phone}</td>
        <td>{$user->Organization}</td>
        <td>{$user->Position}</td>
        <td>{$user->DateCreated}</td>
        <td>{$user->LastLogin}</td>
        <td>{$user->Timezone}</td>
        <td>{$user->Language}</td>
        <td align="center"><a href="#" class="update changeStatus">{$statusDescriptions[$user->StatusId]}</a></td>
        <td align="center"><a href="#" class="update changePermissions">{translate key='Edit'}</a></td>
        <td align="center"><a href="#" class="update changeGroups">{translate key='Edit'}</a></td>
        <td align="center"><a href="#" class="update viewReservations">{translate key='Search'}</a></td>
        <td align="center"><a href="#" class="update resetPassword">{translate key='Reset'}</a></td>
        <td align="center"><a href="#" class="update delete">{html_image src="cross-button.png"}</a></td>
    </tr>
	{if $Definitions|count > 0}
        <tr>
            <td class="id"><input type="hidden" class="id" value="{$user->Id}"/></td>
            <td colspan="15" class="{$rowCss} customAttributes" userId="{$user->Id}">
                <div class="customAttributes">
                    <p>{translate key=AdditionalAttributes} <a href="#"
                                                               class="update changeAttributes">{translate key=Edit}</a>
                    </p>
                    <ul>
						{foreach from=$AttributeList->GetAttributeValues($user->Id) item=attribute}
                            <li class="customAttribute" attributeId="{$attribute->Id()}">
								{control type="AttributeControl" attribute=$attribute readonly=true}
                            </li>
						{/foreach}
                    </ul>
                </div>

            </td>
        </tr>
	{/if}
{/foreach}
</table>

{pagination pageInfo=$PageInfo}

<div class="admin" style="margin-top:30px;">
    <div class="title">
	{translate key=AddUser}
    </div>
    <div>
        <ul>
		{async_validator id="addUserEmailformat" key="ValidEmailRequired"}
			{async_validator id="addUserUniqueemail" key="UniqueEmailRequired"}
			{async_validator id="addUserUsername" key="UniqueUsernameRequired"}
			{async_validator id="addAttributeValidator" key=""}
        </ul>
        <form id="addUserForm" method="post">
            <div style="display: table-row">
                <div style="display: table-cell;">
                    <ul>
                        <li>{translate key="Username"}</li>
                        <li>{textbox name="USERNAME" class="required textbox" size="40" id="addUsername"}</li>
                    </ul>
                </div>
                <div style="display: table-cell;">
                    <ul>
                        <li>{translate key="Email"}</li>
                        <li>{textbox name="EMAIL" class="required textbox" size="40" id="addEmail"}</li>
                    </ul>
                </div>
                <div style="display: table-cell;">
                    <ul>
                        <li>{translate key="FirstName"}</li>
                        <li>{textbox name="FIRST_NAME" class="required textbox" size="40" id="addFname"}</li>
                    </ul>
                </div>
                <div style="display: table-cell;">
                    <ul>
                        <li>{translate key="LastName"}</li>
                        <li>{textbox name="LAST_NAME" class="required textbox" size="40" id="addLname"}</li>
                    </ul>
                </div>
            </div>
            <div style="display: table-row">
                <div style="display: table-cell;">
                    <ul>
                        <li>{translate key="Timezone"}</li>
                        <li>
                            <select {formname key='TIMEZONE'} class="textbox">
							{html_options values=$Timezones output=$Timezones selected=$Timezone}
                            </select>
                        </li>
                    </ul>
                </div>
                <div style="display: table-cell;">
                    <ul>
                        <li>{translate key="Password"}</li>
                        <li>{textbox name="PASSWORD" class="required textbox" size="40" id="addPassword" type="password"}</li>
                    </ul>
                </div>
                <div style="display: table-cell;">
                    <ul>
                        <li>{translate key="Group"}</li>
                        <li>
                            <select {formname key='GROUP_ID'} class="textbox">
                                <option value="">{translate key=None}</option>
							{object_html_options options=$Groups label=Name key=Id}
                            </select>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="customAttributes">
                <ul>
				{foreach from=$Definitions item=attribute}
                    <li class="customAttribute">
						{control type="AttributeControl" attribute=$attribute algin=vertical}
                    </li>
				{/foreach}
                </ul>
                <div style="clear:both;"></div>
            </div>

            <button type="button" class="button save ldap">{html_image src="disk-black.png"} {translate key='AddNoNetIdUser'}</button>
            <button type="button" class="button ldapsearch">{html_image src="search.png"} {translate key='SearchNetId'}</button>
            <button type="button" class="button clear">{html_image src="slash.png"} {translate key='Cancel'}</button>
        </form>
    </div>
</div>

<input type="hidden" id="activeId"/>

<div id="permissionsDialog" class="dialog" style="display:none;" title="{translate key=Permissions}">
    <form id="permissionsForm" method="post">
        <div class="warning">{translate key=UserPermissionInfo}</div>
	{foreach from=$resources item=resource}
        <label><input {formname key=RESOURCE_ID  multi=true} class="resourceId" type="checkbox"
                                                             value="{$resource->GetResourceId()}"> {$resource->GetName()}
        </label><br/>
	{/foreach}
        <button type="button" class="button save">{html_image src="tick-circle.png"} {translate key='Update'}</button>
        <button type="button" class="button cancel">{html_image src="slash.png"} {translate key='Cancel'}</button>
    </form>
</div>

<div id="passwordDialog" class="dialog" style="display:none;" title="{translate key=Password}">
    <form id="passwordForm" method="post">
	{translate key=Password}<br/>
	{textbox type="password" name="PASSWORD" class="required textbox" value=""}
        <button type="button" class="button save">{html_image src="disk-black.png"} {translate key='Update'}</button>
        <button type="button" class="button cancel">{html_image src="slash.png"} {translate key='Cancel'}</button>
    </form>
</div>

<div id="userDialog" class="dialog" title="{translate key=Update}">
    <form id="userForm" method="post">
        <ul>
		{async_validator id="emailformat" key="ValidEmailRequired"}
       		{async_validator id="uniqueemail" key="UniqueEmailRequired"}
       		{async_validator id="uniqueusername" key="UniqueUsernameRequired"}
        </ul>

        <ul>
            <li>{translate key="Username"}</li>
            <li>{textbox name="USERNAME" class="required textbox" size="40" id="username"}</li>
            <li>{translate key="Email"}</li>
            <li>{textbox name="EMAIL" class="required textbox" size="40" id="email"}</li>

            <li>{translate key="FirstName"}</li>
            <li>{textbox name="FIRST_NAME" class="required textbox" size="40" id="fname"}</li>
            <li>{translate key="LastName"}</li>
            <li>{textbox name="LAST_NAME" class="required textbox" size="40" id="lname"}</li>

            <li>{translate key="Timezone"}</li>
            <li>
                <select {formname key='TIMEZONE'} id='timezone' class="textbox">
				{html_options values=$Timezones output=$Timezones}
                </select>
            </li>

            <li>{translate key="Phone"}</li>
            <li>{textbox name="PHONE" class="textbox" size="40" id="phone"}</li>
            <li>{translate key="Organization"}</li>
            <li>{textbox name="ORGANIZATION" class="textbox" size="40" id="organization"}</li>
            <li>{translate key="Position"}</li>
            <li>{textbox name="POSITION" class="textbox" size="40" id="position"}</li>
        </ul>

        <button type="button" class="button save">{html_image src="disk-black.png"} {translate key='Update'}</button>
        <button type="button" class="button cancel">{html_image src="slash.png"} {translate key='Cancel'}</button>
    </form>
</div>

<div id="deleteDialog" class="dialog" title="{translate key=Delete}">
    <form id="deleteUserForm" method="post">
        <div class="error" style="margin-bottom: 25px;">
            <h3>{translate key=DeleteWarning}</h3>

            <div>{translate key=DeleteUserWarning}</div>
        </div>
        <button type="button" class="button save">{html_image src="cross-button.png"} {translate key='Delete'}</button>
        <button type="button" class="button cancel">{html_image src="slash.png"} {translate key='Cancel'}</button>
    </form>
</div>

<div id="attributeDialog" class="dialog" title="{translate key=AdditionalAttributes}">
    <div class="validationSummary">
        <ul>{async_validator id="attributeValidator" key=""}
        </ul>
    </div>

    <div class="customAttributes">
        <form method="post" id="attributesForm">
            <ul>
			{foreach from=$Definitions item=attribute}
                <li class="customAttribute">
					{control type="AttributeControl" attribute=$attribute}
                </li>
			{/foreach}
            </ul>
            <div style="clear:both;"></div>
            <br/>
            <button type="button"
                    class="button save">{html_image src="tick-circle.png"} {translate key='Update'}</button>
            <button type="button" class="button cancel">{html_image src="slash.png"} {translate key='Cancel'}</button>
        </form>
    </div>
</div>

<div id="groupsDialog" class="dialog" title="{translate key=Groups}">
    <div id="allUsers" style="display:none;" class="dialog" title="{translate key=AllUsers}"></div>

	<div id="groupList" class="hidden">
		{foreach from=$Groups item=group}
			<div class="group-item" groupId="{$group->Id}"><a href="#">&nbsp;</a> <span>{$group->Name}</span></div>
		{/foreach}
	</div>

	<div id="addedGroups">
	</div>

	<div id="removedGroups">
	</div>
</div>

{html_image src="admin-ajax-indicator.gif" class="indicator" style="display:none;"}

<script type="text/javascript" src="{$Path}scripts/admin/edit.js"></script>
<script type="text/javascript" src="{$Path}scripts/autocomplete.js"></script>
<script type="text/javascript" src="{$Path}scripts/admin/ldapUser.js"></script>
<script type="text/javascript" src="{$Path}scripts/admin/user.js"></script>
<script type="text/javascript" src="{$Path}scripts/js/jquery.form-3.09.min.js"></script>

<script type="text/javascript">
    $(document).ready(function ()
    {
        
       
        // Clear Add User Form.  If you save credentials for this app, it randomly fills
        // Input boxes in the Add User section with your data
        $("#addUserForm")[0].reset();
        
        var actions = {
            activate:'{ManageUsersActions::Activate}',
            deactivate:'{ManageUsersActions::Deactivate}',
            permissions:'{ManageUsersActions::Permissions}',
            password:'{ManageUsersActions::Password}',
            deleteUser:'{ManageUsersActions::DeleteUser}',
            updateUser:'{ManageUsersActions::UpdateUser}',
            addUser:'{ManageUsersActions::AddUser}',
            changeAttributes:'{ManageUsersActions::ChangeAttributes}'
        };

        var userOptions = {
            userAutocompleteUrl:"../ajax/autocomplete.php?type={AutoCompleteType::MyUsers}",
            groupsUrl:'{$smarty.server.SCRIPT_NAME}',
			groupManagementUrl:'{$ManageGroupsUrl}',
            permissionsUrl:'{$smarty.server.SCRIPT_NAME}',
            submitUrl:'{$smarty.server.SCRIPT_NAME}',
            saveRedirect:'{$smarty.server.SCRIPT_NAME}',
            selectUserUrl:'{$smarty.server.SCRIPT_NAME}?uid=',
            filterUrl:'{$smarty.server.SCRIPT_NAME}?{QueryStringKeys::ACCOUNT_STATUS}=',
            actions:actions,
            manageReservationsUrl:'{$ManageReservationsUrl}'
        };

        var ldapUserOptions = {
            getUserInfoUrl:'{$Path}Info/getUserInfo.php?username=',
            addUserSubmitUrl:'{$Path}/admin/manage_users.php'
        };

        var userManagement = new UserManagement(userOptions);
        userManagement.init();

        var ldapUserManagement = new LdapUserManagement(ldapUserOptions);
        ldapUserManagement.init();

	{foreach from=$users item=user}
        var user = {
            id: {$user->Id},
            first:'{$user->First|escape:"quotes"}',
            last:'{$user->Last|escape:"quotes"}',
            isActive:'{$user->IsActive()}',
            username:'{$user->Username|escape:"quotes"}',
            email:'{$user->Email|escape:"quotes"}',
            timezone:'{$user->Timezone}',
            phone:'{$user->Phone|escape:"quotes"}',
            organization:'{$user->Organization|escape:"quotes"}',
            position:'{$user->Position|escape:"quotes"}'
        };
        userManagement.addUser(user);
	{/foreach}

    });
</script>
{include file='globalfooter.tpl'}