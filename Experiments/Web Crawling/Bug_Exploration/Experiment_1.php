<?php
	$url = "https://www.dailynayadiganta.com/international/8";
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.1.7) Gecko/20091221 Firefox/3.5.7 GTB6 (.NET CLR 3.0.4506.2152)");
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1);
	$html = curl_exec($ch);
	
	curl_close($ch);

	print_r($html);

	$regExp = '/<div class="news-caption-lead">(.*?)<\/div>/'; 
		 

	preg_match_all($regExp, $html, $matches);

	print_r($matches);

	//echo $matches[1][0]."<br />";


?>

 