<?php 

	
/*
======================================================================================
	configuration :  php.ini file    uncomment    extension=curl_url.dll
	
	$ch = curl_init('http://www.webcoachbd.com');


======================================================================================
*/
	$ch = curl_init();

	curl_setopt($ch, CURLOPT_URL, 'http://www.webcoachbd.com/php-basic/php-operators?showall=&start=2');

	curl_setopt($ch, CURLOPT_HEADER, 0);

	curl_exec($ch);

	curl_close($ch);
?>