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
    echo "CLI mode";
} else {
    // Not in cli-mode
	die('CLI only');	
}

?>