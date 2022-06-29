<?php

	// this script is called from ajax to process the form on the contact page.
	// the only validation permformed is the google recaptcha as HTML5 does the rest on the form.

	// Check if the recaptcha is OK
	$ch = curl_init();

	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

	curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify?secret=6LdMHTMUAAAAACTw_DcbyLpgqWK13SzpUluBUkPf&response=' . $_POST['g-recaptcha-response'] . '&remoteip=' . $_SERVER["REMOTE_ADDR"]);

	$recaptcha_response_json = curl_exec($ch);

	curl_close($ch);

	$recpatcha_response = json_decode($recaptcha_response_json, true);

	if ($recpatcha_response['success'] == 1) {
		// this is not a BOT - so we can send email
		// first check if all other required fields are set
		if (($_POST['first_name'] == '') ||
			($_POST['last_name'] == '') ||
			($_POST['email'] == '') ||
			($_POST['phone'] == '')) {

			$response = array(
				'code' => 0,
				'response' => 'There are some required fields missing.'
			);

		} else {
			$response = array(
				'code' => $recpatcha_response['success'],
				'response' => 'Enquiry can be sent'
			);
		}

  	} else {
		// failed recaptcha - report back failure with JSON to calling script
		$error = true;
		$response = array(
			'code' => 0,
			'response' => 'Security check failed.'
		);
		
	}

	echo(json_encode($response));

?>