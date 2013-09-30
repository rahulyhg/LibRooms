function LdapUserManagement(opts)
{
	var options = opts;

	var elements = {
		ldapUserAutocomplete:$('#addUserName'),

		addUserForm:$('#addUserForm'),
	};

	LdapUserManagement.prototype.init = function ()
	{
                $('.ldapsearch').click(function () 
                {
                        getUserInfo();
                });
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
                if (confirm('Do you want to add this user?\n\tFirst name:\t' + $('#addFname').val()
                    + '\n\tLast name:\t' + $('#addLname').val() + '\n\tNetID:\t\t' + $('#addUsername').val()
                     + '\n\tEmail:\t\t' + $('#addEmail').val())) {
                    var netid = $('#addUsername').val();
                    var form = $('[id=addUserForm]');
                    var newUserData = $.ajax({
                        type: "POST",
                        url: options.addUserSubmitUrl + "?action=addUser",
                        data: form.serialize(),
                        success: function(data) {
                            alert("User added to database");
                            if ($('#changeUserAutocomplete').length) {
                                $('#changeUserAutocomplete').val(netid);
                                $('#changeUserAutocomplete').focus().keydown();
                            }
                        }     
                    });
                }
            } else if (userData.indexOf('ERROR') >= 0) {
                alert(userData.substring(userData.indexOf('ERROR')+6));
            } else {
                alert('LDAP search encountered an unknown difficulty\nIf the problem persists please contact an Applications Team member.');
            }
            $("#addUserForm")[0].reset();
        }
}