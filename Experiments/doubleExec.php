<?php

$username = 'fahad';
$password = '123';
$loginUrl = 'http://localhost/Hackalgo/DummySite/login.php';
 
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $loginUrl);
 
curl_setopt($ch, CURLOPT_POST, 1);
 
curl_setopt($ch, CURLOPT_POSTFIELDS, 'username='.$username.'&password='.$password);
 
curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookie.txt');
 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 
curl_exec($ch);

curl_setopt($ch, CURLOPT_URL, 'http://localhost/Hackalgo/DummySite/index.php');
 
$content = curl_exec($ch);

echo strlen($content);

curl_close($ch);

?>