<?php

require('soap_config.php');


$client = new SoapClient(null, array('location' => $soap_location,
                                     'uri'      => $soap_uri,
									 'trace' => 1,
									 'exceptions' => 1));


try {
	if($session_id = $client->login($username,$password)) {
		echo 'Logged successfull. Session ID:'.$session_id.'<br />';
	}

	//* Parameters
	$filter_id = 1;
	$client_id = 1;


	//* Get the user filter record
	$mail_user_filter_record = $client->mail_user_filter_get($session_id, $filter_id);

	//* Change the status to inactive
	$mail_user_filter_record['active'] = 'n';
	
	$affected_rows = $client->mail_user_filter_update($session_id, $client_id, $filter_id, $mail_user_filter_record);

	echo "Number of records that have been changed in the database: ".$affected_rows."<br>";
	
	if($client->logout($session_id)) {
		echo 'Logged out.<br />';
	}
	
	
} catch (SoapFault $e) {
	echo $client->__getLastResponse();
	die('SOAP Error: '.$e->getMessage());
}

?>
