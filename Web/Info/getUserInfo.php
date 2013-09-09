<?php
define('ROOT_DIR', '../../');

require_once(ROOT_DIR . 'lib/Application/Authentication/namespace.php');
require_once(ROOT_DIR . 'plugins/Authentication/Ldap/namespace.php');

if (isset($_REQUEST["username"]) && $_REQUEST["username"] != "") {
    $username = $_REQUEST["username"];
    
    $userLdap = new Ldap(&$ldap);
    
    $user_info = $userLdap->PopulateUser($username);
    
   
}
?>
