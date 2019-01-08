<?php
/*
|--------------------------------------------------------------------------
| URL Parser
|--------------------------------------------------------------------------
|  This script is intended to do the following tasks.
|  Should run only on CLI mode
|  Parse the HTML of the page. URL https://journals.sagepub.com/home/VRT.
|  Extract URL for the link ‘Submit Now’.
|  And print the URL.
|
*/

// Check the script is run from Command line
if (php_sapi_name() == "cli") {
    //In cli-mode
    try {

		$dom = new DOMDocument; //Create a new DOM document
		libxml_use_internal_errors(true);
		//$dom->loadHTMLFile('https://journals.sagepub.com/home/VRT');
		$dom->loadHTMLFile('journels.html'); //Copied the DOM of https://journals.sagepub.com/home/VRT to a file journels.html
		$links = $dom->getElementsByTagName('a'); // Get all links.

		foreach ($links as $link){
			if($link->nodeValue === 'Submit Now') {//Check Node value is same as Submit Now
				echo $link->getAttribute('href'), PHP_EOL; //Print the Link
			}
		}
	} catch(Exception $e) { //catch exception
	  echo 'Message: ' .$e->getMessage();
	}
    
} else {
    // Not in cli-mode
	die('CLI only');	
}

?>