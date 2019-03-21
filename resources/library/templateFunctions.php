<?php
/*create a class or functions that include all the template files and accept a content file as an argument to render within the layout. This way you don't need to keep including the template files in every page of your site, but rather abstract that logic out meaning even less work down the road
 require_once(realpath(dirname(__FILE__) . "/../config.php"));*/

require_once(TEMPLATES_PATH . "/header.php");
require_once(TEMPLATES_PATH . "/login.php");
require_once(TEMPLATES_PATH . "/register.php");
require_once(TEMPLATES_PATH . "/footer.php");

?>