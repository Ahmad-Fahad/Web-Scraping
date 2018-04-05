<?php


/*

curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

*/

	$ch = curl_init();

	curl_setopt($ch, CURLOPT_URL, 'http://www.webcoart=2');

	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);

	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);

	curl_setopt($ch, CURLOPT_CAINFO, getcwd().'/cacert.pem');

	$output = curl_exec($ch);

	if($output == false) {

		echo "Error no ".curl_errno($ch)." >>----> ".curl_error($ch);

	}

	print_r(curl_getinfo($ch));
	
	curl_close($ch);

?>