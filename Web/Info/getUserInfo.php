<?php

if (isset($_SERVER['HTTP_REFERER']) && $_SERVER['HTTP_REFERER'] != "") {
    $referer = substr($_SERVER['HTTP_REFERER'], strpos($_SERVER['HTTP_REFERER'], '//')+2);
    $referer = substr($referer, 0, strpos($referer, '/'));
} else {
    $referer = "";
}

if ($referer == $_SERVER['SERVER_NAME']) {
    

    define('ROOT_DIR', '../../');

    require_once(ROOT_DIR . 'lib/Application/Authentication/namespace.php');
    require_once(ROOT_DIR . 'plugins/Authentication/Ldap/namespace.php');
    require_once ROOT_DIR . 'plugins/Authentication/Ldap/LDAP2.php';

    if (isset($_REQUEST["username"]) && $_REQUEST["username"] != "") {
        $username = $_REQUEST["username"];
        $options = new LdapOptions();

        $ldap = new Ldap2Wrapper($options);

        $ldap->Connect();

        $ldap->PopulateNonAuthenticatedLDAPUser($username);

        if ($ldap->GetLdapUser($username) === NULL) {
            $user_data = "ERROR: THERE IS NO USER BY THAT NAME";
        }
        else
        {

            $search_ldap_user = $ldap->GetLdapUser($username);
            $lname = $search_ldap_user->GetLastName();
            if (isset($lname) && $lname != "") {

                $user_data = "addLname|{$search_ldap_user->GetLastName()}||addFname|{$search_ldap_user->GetFirstName()}||addEmail|{$search_ldap_user->GetEmail()}||addPassword|" . strval(rand(10000000,100000000));

            } else {
                $user_data = "ERROR: MULTIPLE ENTRIES FOUND. \n PLEASE SEARCH ON A FULL NETID.";
            }
        }

    }
                var_dump($user_data);
}
?>
