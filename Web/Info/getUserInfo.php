<?php
define('ROOT_DIR', '../../');

require_once(ROOT_DIR . 'lib/Application/Authentication/namespace.php');
require_once(ROOT_DIR . 'plugins/Authentication/Ldap/namespace.php');
require_once ROOT_DIR . 'plugins/Authentication/Ldap/LDAP2.php';

if (isset($_REQUEST["username"]) && $_REQUEST["username"] != "") {
    $username = $_REQUEST["username"];
    $options = new LdapOptions();
        
    $authorization = new Net_LDAP2();
    
    $ldap = new Ldap2Wrapper($options);
    
    $ldap->Connect();
    
    $ldap->PopulateNonAuthenticatedLDAPUser($username);
    
    if ($ldap->GetLdapUser($username) === NULL) {
        $test = "THERE IS NO USER BY THAT NAME";
        var_dump($test);
    }
    else
    {
    
        $search_ldap_user = $ldap->GetLdapUser($username);
    
        $user_data = "addLname|{$search_ldap_user->GetLastName()}||addFname|{$search_ldap_user->GetFirstName()}||addEmail|{$search_ldap_user->GetEmail()}||addPassword|" . strval(rand(10000000,100000000));
    
        var_dump($user_data);
    }
    
}
?>
