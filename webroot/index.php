<?php

define('WEBROOT',dirname(__FILE__)); 
define('ROOT',dirname(WEBROOT)); 
define('DS',DIRECTORY_SEPARATOR);
define('CORE',ROOT.DS.'core'); 
define('BASE_URL', dirname(dirname($_SERVER['SCRIPT_NAME']))); 

if(get_magic_quotes_gpc()) {
    $_POST = array_map('stripslashes', $_POST);
    $_GET = array_map('stripslashes', $_GET);
    $_COOKIE = array_map('stripslashes', $_COOKIE);
}
require CORE.DS.'includes.php'; 
new Dispatcher(); 



/*echo('WEBROOT : '.WEBROOT);
echo("<br/>");
echo('ROOT : '.ROOT);
echo("<br/>");
echo('DS : '.DS);
echo("<br/>");
echo('CORE : '.CORE);
echo("<br/>");
echo('BASE_URL : '.BASE_URL);*/

/**
 * Magic quotes
 **/

 
 

?>

