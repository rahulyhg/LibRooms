<?php
/**
Copyright 2012 Nick Korbel

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
*/

// see http://pear.php.net/manual/en/package.networking.net-ldap2.connecting.php

$conf['settings']['host'] = 'ldap.unm.edu'; // comma separated list of ldap servers such as mydomain1,localhost                                                                                                                                                                
$conf['settings']['port'] = '389';      // default ldap port 389 or 636 for ssl.                                                                                                                                                                                               
#$conf['settings']['port'] = '636';                                                                                                                                                                                                                                            
$conf['settings']['version'] = '3';             // LDAP protocol version                                                                                                                                                                                                       
$conf['settings']['starttls'] = 'true'; // TLS is started after connecting                                                                                                                                                                                                     
$conf['settings']['binddn'] = 'uid=libauth,ou=SystemAccounts,o=University of New Mexico,c=US';  // The distinguished name to bind as (username). If you don't supply this, an anonymous bind will be established.                                                              
$conf['settings']['bindpw'] = 'O9Atr935';       // Password for the binddn. If the credentials are wrong, the bind will fail server-side and an anonymous bind will be established instead. An empty bindpw string requests an unauthenticated bind.                           
$conf['settings']['basedn'] = 'o=University of New Mexico,c=US';        // LDAP base name                                                                                                                                                                                      
$conf['settings']['filter'] = 'uid={0}';        // Default search filter                                                                                                                                                                                                       
$conf['settings']['scope'] = '';        // TLS is started after connecting                                                                                                                                                                                                     
$conf['settings']['database.auth.when.ldap.user.not.found'] = 'true';   // if ldap auth fails, authenticate against phpScheduleIt database                                                                                                                                     
$conf['settings']['ldap.debug.enabled'] = 'true';       // if LDAP2 should use debug logging                                                                                                                                                                                   
$conf['settings']['attribute.mapping'] = 'sn=sn,givenname=givenname,mail=mail,telephonenumber=telephonenumber,physicaldeliveryofficename=physicaldeliveryofficename,title=title';       // mapping of required attributes to attribute names in your directory
?>