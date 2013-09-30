<?php
require_once("controller.php");
class home_controller extends controller
{
	var $bil = 1;
	var $option = 1;
	var $file = "home.php";
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