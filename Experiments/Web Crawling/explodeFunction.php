<?php

	$string = "1,2,3,4,5";
	$content = explode(',', $string);
	print_r($content);

	echo "<br>";
	$link = '<a href="https://repl.it/languages">repl.it</a>';
	$content = explode('"', $link);
	print_r($content);

	echo "<br>".$content[1]."<br>";

?>

