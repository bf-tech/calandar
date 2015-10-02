<?php
/**
*   includes the path to the dedicated class in the proper folder
*
*   @param string of class name
*/
function MyAutoload($file_name) {

	$class_path = 'class/'.$file_name.'.php';

    if (file_exists($class_path))
    {
    
    	includeFile($class_path);
    	echo '<!--'.$class_path.' loaded with success'.'-->';
    
    } else
    {
    
    	echo($file_name.' not found!');
    
    }
}

function includeFile ($path) {
	include_once($path);
}

// Registering MyAutoload with PHP.
spl_autoload_register('MyAutoload');
