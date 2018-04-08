<?php 

	
/*
======================================================================================
	configuration :  php.ini file    uncomment    extension=curl_url.dll
	
	$ch = curl_init('http://www.webcoachbd.com');




======================================================================================
*/
	$ch = curl_init();

	curl_setopt($ch, CURLOPT_URL, 'http://localhost/Hackalgo/DummySite/index.php');

	curl_setopt($ch, CURLOPT_HEADER, 0);

	curl_exec($ch);

	curl_close($ch);
?>

