<!...Don't run this...!>

<?php
	
	// include('simple_html_dom.php');

	$websiteUrl = "http://www.palmbeachcodeschool.com/news/";

	$html = file_get_html($websiteUrl);

	foreach ($html->find(".uabb-post-thumbnail") as $postDiv) {
		
		echo "<pre>";

		die(var_dump($postDiv));
	}
?>