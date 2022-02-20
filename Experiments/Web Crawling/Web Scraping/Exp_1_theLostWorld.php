<?php

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "https://www.imdb.com/title/tt0240278/?ref_=fn_tt_tt_2");
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.1.7) Gecko/20091221 Firefox/3.5.7 GTB6 (.NET CLR 3.0.4506.2152)");
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1);
	$html = curl_exec($ch);
	
	curl_close($ch);

	$regExp = '/<h1 itemprop="name" class="">(.*?)<\/h1>/';

	preg_match_all($regExp, $html, $matches);

	echo $matches[1][0]."<br />";

	$regExp = '/<span itemprop="ratingValue">(.*?)<\/span>/';

	preg_match_all($regExp, $html, $matches);

	echo $matches[1][0]."<br />";

	$regExp = '/<span class=\".*?\" itemprop=\".*?\">(.*?)<\/span>/';

	preg_match_all($regExp, $html, $matches);

	echo "<pre>";

	print_r($matches);

	echo "<br />";

	echo $matches[0][1]."<br />";

	$regExp = '/<span class=\".*?\" itemprop=\"ratingCount\">(.*?)<\/span>/';

	preg_match_all($regExp, $html, $matches);

	echo "<pre>";

	print_r($matches);

	echo "<br />";



?>