<?php

require_once(realpath(dirname(__FILE__) . "/resources/config.php"));
require_once(LIBRARY_PATH . "/templateFunctions.php");
require_once(LIBRARY_PATH . "/contry.php");
    /*
        Now you can handle all your php logic outside of the template
        file which makes for very clean code!
    */

        $setInIndexDotPhp = "<div align='center'>I was set in the index.php file so you can see where it comes from</div>";

    // Must pass in variables (as an array) to use in template
        $variables = array(
        	'setInIndexDotPhp' => $setInIndexDotPhp
        	);

        renderLayoutWithContentFile("home.php", $variables); 

        ?>