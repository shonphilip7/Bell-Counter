<?php
namespace Globalfit\Classes;

class Input
{
   /**
	 * a blank contructor
	 */
	public function __construct()
	{
		  
	}
    /** a function to check for method type, either GET or POST
      *
	  * @param string $type a string which is method type
	  *
	  * @return bool a boolean value, either true or false
	*/
	public static function exists($type = 'post')
	{
		switch ($type) {
			case 'post':
			    return (!empty($_POST)) ? true : false;
			    break;
			case 'get':
			    return(!empty($_GET)) ? true : false;
			    break;
			default:
			    return false;
			    break;
		}
	}
	
    /** a function that returns GET/POST variables
      *
	  * @param string $item a string which is a field name
	  *  
	  * @return string which is a POST/GET variable
	  */
	public static function get($item)
	{
		if (isset($_POST[$item])) {
			return $_POST[$item];
		}elseif (isset($_GET[$item])) {
			return $_GET[$item];
		}
		return '';
	}	
}

