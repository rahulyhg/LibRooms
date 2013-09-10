<?php
define('ROOT_DIR', '../../');

require_once(ROOT_DIR . 'lib/Application/Authentication/namespace.php');
require_once(ROOT_DIR . 'plugins/Authentication/Ldap/namespace.php');
require_once ROOT_DIR . 'plugins/Authentication/Ldap/LDAP2.php';

if (isset($_REQUEST["username"]) && $_REQUEST["username"] != "") {
    $username = $_REQUEST["username"];
    $authorization = new Net_LDAP2();
 //   $ldap = new Ldap($authorization);
    
 //   $user_info = $ldap->PopulateUser($username);
    $user_info = $authorization->getEntry($username);
    
    print var_dump($user_info);
    
   
}
?>
