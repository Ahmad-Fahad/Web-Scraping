<?php

	include("getData.php");

	$content = file_get_contents("https://www.nytimes.com/2018/04/01/us/politics/trump-mueller-firing-impeachment.html?rref=collection%2Fsectioncollection%2Fpolitics");

	$exploded_content = explode('<p class="story-body-text story-content" data-para-count="272" data-total-count="272">', $content);

	$title_exploded_content = explode('.', $exploded_content[1]);

	$title = $title_exploded_content[0];

	echo $title;

// code.visualstudio.com

	echo "<br>";  

	// $ratingValue = explode('itemprop="ratingValue">', $content);

	// $rating  = explode('</span>', $ratingValue[1]);

	// echo $rating[0]."<br />";

	// $ratingCount = explode('itemprop="ratingCount">', $content);

	// $ratingCount = explode('</span></a>', $ratingCount[1]);

	// echo $ratingCount[0]."<br />";

	// $image_find = explode('class="poster">', $content);

	// $image_find = explode('src="', $image_find[1]);

	// $image_find = explode('"', $image_find[1]);

	// $img_url = $image_find[0];

	// echo '<img src="'.$img_url.'" />';

// to save it in my computer

	// file_put_contents('img.jpg', file_get_contents($img_url));



?>