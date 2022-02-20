<?php
	
	$text = "Make a informative site for the Engineers";

	if(preg_match("/\bengineers\b/i", $text)) {
		echo "matched<br />";
	}
	else {
		echo "Not matched<br />";
	}

	$text = "9433 3423-5479-45";

	echo preg_replace("#[\s\-.]#", '', $text);

	 echo "<br />";



	$html =  "<p>Bnagladesh is a country of natural beauty</p><p>p tag experimenting sand box</p>04.<p>Please share webcoachbd inn your facebook n twitter</P>05.PARA";

	if(preg_match_all('@<p>(.*?)<\/p>@', $html, $matches)) {
		echo "<pre>";
		print_r($matches);

		echo "<br />".$matches[1][0];
	}
	else {
		echo "Not matched<br />";
	}

	function acronym($matches) {
		$acronyms = array(
			'PHP' => 'PHP Hypertext processor',
			'WWW' => 'World Wide Web'
		);

		return $acronyms[$matches[1]];
	}

	$text = "now a days<acronym>PHP</acronym> is the 09. popular language for <acronym>WWW</acronym>.";

	echo preg_replace_callback('/<acronym>(.*?)<\/acronym>/', 'acronym', $text);

?>