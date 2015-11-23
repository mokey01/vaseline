<?php

$montant_recharge = array(
"" =>'Tous',
"1000"=>'1000',
"5000"=>'5000',
"10000"=>'10000',
"40000"=>'40000',
);
$typeservice = array (
                    "1" =>'Caissiere',
                    "2" =>'Gerant',
					"3" =>'Patron',
                    );

$state = array(
"0" =>'d&eacute;sactiv&eacute;',
"1"=>'actif');


$liste_sexe = array(
"" =>'- -',
"1"=>'homme',
"2"=>'femme');

$type_client = array(
"" =>'- -',
"1"=>'particulier',
"2"=>'entreprise',
"3"=>'cooperative',
);

// make a connection to mysql here
$conn = mysql_connect ($dbhost, $dbuser, $dbpass) or die ("I cannot connect to the database because: " . mysql_error());
mysql_select_db ($dbname) or die ("I cannot select the database '$dbname' because: " . mysql_error());


function check_email_address($email) {
	// First, we check that there's one @ symbol, and that the lengths are right
	if (!ereg("^[^@]{1,64}@[^@]{1,255}$", $email)) {
		// Email invalid because wrong number of characters in one section, or wrong number of @ symbols.
		return false;
	}
	// Split it into sections to make life easier
	$email_array = explode("@", $email);
	$local_array = explode(".", $email_array[0]);
	for ($i = 0; $i < sizeof($local_array); $i++) {
		if (!ereg("^(([A-Za-z0-9!#$%&'*+/=?^_`{|}~-][A-Za-z0-9!#$%&'*+/=?^_`{|}~\.-]{0,63})|(\"[^(\\|\")]{0,62}\"))$", $local_array[$i])) {
			return false;
		}
	}
	if (!ereg("^\[?[0-9\.]+\]?$", $email_array[1])) { // Check if domain is IP. If not, it should be valid domain name
		$domain_array = explode(".", $email_array[1]);
		if (sizeof($domain_array) < 2) {
		return false; // Not enough parts to domain
		}
		for ($i = 0; $i < sizeof($domain_array); $i++) {
			if (!ereg("^(([A-Za-z0-9][A-Za-z0-9-]{0,61}[A-Za-z0-9])|([A-Za-z0-9]+))$", $domain_array[$i])) {
				return false;
			}
		}
	}
	return true;
}
?>
