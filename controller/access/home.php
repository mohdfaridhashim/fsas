<?php
require_once(CONTROLLER);
class home_controller extends controller
{
	var $bil = 1;
	var $option = 1;
	var $file = "main.php";
	public function main()
	{
		$function = array();
		$function[0][0] = "gethome";
		$function[0][1] = "false";
		return $function;
	}
	
	public function gethome(){	}
}
?>