<?php

	$ch = curl_init();

	$options = array(
				'username' => 'Fahad' ,
				'password' => '1234'
			);

	curl_setopt($ch, CURLOPT_URL, 'localhost/cURL-Experiment/Experiments/postRequestOutput.php');

	curl_setopt($ch, CURLOPT_POST, 1);

	curl_setopt($ch, CURLOPT_POSTFIELDS, $options);

	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

	curl_setopt($ch, CURLOPT_HEADER, 0);

	$output = curl_exec($ch);

	echo $output;

	echo "<br />";

	curl_close($ch);

?>