<?php

// using ldap bind
$ldaprdn  = 'teste';     // ldap rdn or dn
$ldappass = '123qwe@';  // associated password

// LDAP variables
$ldaphost = "192.168.206.6";  // your ldap servers
$ldapport = 389;                 // your ldap server's port number
$ldaptree    = "OU=TI,OU=Usuarios,OU=Goiania,DC=empresas,DC=local";

// Connecting to LDAPSBSUsers
$ldapconn = ldap_connect($ldaphost, $ldapport)
          or die("Could not connect to $ldaphost");

if ($ldapconn) {

    // binding to ldap server
    $ldapbind = ldap_bind($ldapconn, $ldaprdn, $ldappass);

    // verify binding
    if ($ldapbind) {
        echo "LDAP bind successful...";

		$result = ldap_search($ldapconn,$ldaptree, "(cn=*)") or 		die ("Error in search query: ".ldap_error($ldapconn));
        $data = ldap_get_entries($ldapconn, $result);
        
        // SHOW ALL DATA
        echo "Retorno dos registros:\n";
        print_r($data);

    } else {
        echo "LDAP bind failed...";
    }

}

?>
