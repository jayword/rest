<?php 
//check for directory separator or define it.
defined("DS") ? null : define("DS", DIRECTORY_SEPARATOR);
//check for site root or define it.
defined("SITE_ROOT") ? null : define("SITE_ROOT", DS."xampp".DS."htdocs".DS."myphp".DS."api".DS."phprest");
//define the include folder path
defined("INC_PATH") ? null : define("INC_PATH", SITE_ROOT.DS."includes");
//define the core folder path
defined("CORE_PATH") ? null : define("CORE_PATH", SITE_ROOT.DS."core");


//load config file
require_once(INC_PATH.DS."config.php");

//core classes
require_once(CORE_PATH.DS."post.php");
?>