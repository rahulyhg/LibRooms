function UserManagement(opts)
{
	var options = opts;

	var elements = {
		ldapUserAutocomplete:$('#addUserName'),

		addUserForm:$('#addUserForm'),
	};

	var users = {};

	UserManagement.prototype.init = function ()
	{

		$(".save").click(function ()
		{
			$(this).closest('form').submit();
		});
                $('.ldapsearch').click(function () 
                {
                        getUserInfo();
                });

		var hideDialog = function (dialogElement)
		{
			dialogElement.dialog('close');
		};

		var error = function (errorText)
		{
			alert(errorText);
		};
	};

	UserManagement.prototype.addUser = function (user)
	{
		users[user.id] = user;
	};

	var getSubmitCallback = function (action)
	{
		return function ()
		{
			return options.submitUrl + "?uid=" + getActiveUserId() + "&action=" + action;
		};
	};
           
        function getUserInfo() {
            var netid = $('[id=addUsername]').val();
            var newUserData = $.ajax({
                url: options.getUserInfoUrl+netid,
                success: function(data) {
                    useUserInfo(data);
                }     
            });
        }
        
        function useUserInfo(userData) {
            userData = userData.substring(userData.indexOf('"')+1);
            userData = userData.substring(0, userData.indexOf('"'));
            if (userData.indexOf('||') >= 0) {
                var userDataSplit = userData.split('||');
                $.each(userDataSplit, function(key, value) {
                    var nameVal = value.split('|');
                    $('#'+nameVal[0]).val(nameVal[1]);
                });
                if (confirm('Do you want to add this user?')) {
                    //$('#addUserForm').submit();
                  //  elements.addUserForm.submit();
                    var form = $('[id=addUserForm]');
                    var newUserData = $.ajax({
                        type: "POST",
                        url: options.addUserSubmitUrl + "?action=addUser",
                        data: form.serialize(),
                        success: function(data) {
                            alert("User added to database");
                            if ($('#changeUserAutocomplete').length) {
                                $('#changeUserAutocomplete').val($('#addUsername').val());
                                $('#changeUserAutocomplete').focus().keydown();
                            }
                        }     
                    });
                } else {
                    // Do Nothing, clear fields.
                    //$("#addUserForm")[0].reset();
                    elements.addUserForm[0].reset();
                }
            } else if (userData.indexOf('ERROR') >= 0) {
                alert(userData.substring(userData.indexOf('ERROR')+6));
            } else {
                alert('LDAP search encountered an unknown difficulty\nIf the problem persists please contact an Applications Team member.');
            }
        }

	var changeUserInfo = function ()
	{
		var user = getActiveUser();

		ClearAsyncErrors(elements.userDialog);

		$('#username').val(user.username);
		$('#fname').val(user.first);
		$('#lname').val(user.last);
		$('#email').val(user.email);
		$('#timezone').val(user.timezone);
		$('#phone').val(user.phone);
		$('#organization').val(user.organization);
		$('#position').val(user.position);

		elements.userDialog.dialog('open');
	};
}