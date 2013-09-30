<?php
require_once(CONTROLLER);
class login_controller extends controller
{
	var $bil = 1;
	var $option = 1;
	var $file = "login.php";
	public function main()
	{
		$function = array();
		$function[0][0] = "getlogin";
		$function[0][1] = "false";
		return $function;
	}
	
	public function getlogin(){	}
}
?>