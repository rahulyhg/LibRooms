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
    
    $search_ldap_user = $ldap->GetLdapUser($username);
    
    $user_data = array(lastname => $search_ldap_user->GetLastName(), firstname => $search_ldap_user->GetFirstName(), email => $search_ldap_user->GetEmail(), phone => $search_ldap_user->GetPhone(), title => $search_ldap_user->GetTitle());
    
    var_dump($user_data);

    
    
}
?>
