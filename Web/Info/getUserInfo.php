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
    
 //   $user_info = $ldap->PopulateUser($username);
    
    $user_info = $ldap->GetUserInfo($username);
    
 //   print var_dump(get_defined_vars());
 //   print "end vars";

    //var_dump($options);
    //print_r($options);
    var_dump($user_info);
    //print_r($user_info);
    
    
}
?>
