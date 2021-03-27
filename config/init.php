
<?php
//start session
session_start();


//config file
require_once 'config.php';

//Include helpers
require_once 'helpers/system_helper.php';

//register the autoloader
spl_autoload_register('myAutoLoader');

//autoloader for autoloading classes defined in the lib folder 
function myAutoLoader($class_name){
	require_once 'lib/'.$class_name. '.php';
}


?>