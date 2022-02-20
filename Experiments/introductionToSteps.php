<?php 

	
/*
======================================================================================
	configuration :  php.ini file    uncomment    extension=curl_url.dll
	
	$ch = curl_init('http://www.webcoachbd.com');




======================================================================================
*/
	$ch = curl_init();

	curl_setopt($ch, CURLOPT_URL, 'https://www.englishnepalidictionary.com?q=bee');

	curl_setopt($ch, CURLOPT_HEADER, 0);

	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

	echo curl_exec($ch);

	curl_close($ch);
?>

