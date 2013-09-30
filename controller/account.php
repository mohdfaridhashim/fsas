<?php
require_once("controller.php");
class account_controller extends controller
{
	var $bil = 1;
	var $option = 1;
	var $file = "account.php";
	public function main()
	{
		$function = array();
		$function[0][0] = "gethome";
		$function[0][1] = "true";
		return $function;
	}
	
	public function gethome()
	{
		return "hi";	
	}
}
?>