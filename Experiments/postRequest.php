<?php

	$ch = curl_init();

	$options = array(
				'username' => 'fahad' ,
				'password' => '123455'
			);

	//----new code...

	$post_data = http_build_query($options);

	//-----

	curl_setopt($ch, CURLOPT_URL, 'localhost/cURL-Experiment/Experiments/postRequestOutput.php');

	curl_setopt($ch, CURLOPT_POST, 1);

	curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);

	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

	curl_setopt($ch, CURLOPT_HEADER, 0);

	$output = curl_exec($ch);

	echo $output;

	// if($output != false) {
	// 	echo "<script>location.href='http://localhost/Hackalgo/DummySite/index.php'</script>";
	// }

	echo "<br />";

	curl_close($ch);

/*

http://localhost/Hackalgo/DummySite/login.php

localhost/cURL-Experiment/Experiments/postRequestOutput.php

*/

?>

