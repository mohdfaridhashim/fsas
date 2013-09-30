<?php
require_once(CONTROLLER);
class errorrequest_controller extends controller
{
	var $bil = 1;
	var $option = 1;
	var $file = "error.php";
	public function main()
	{
		$function = array();
		$function[0][0] = "geterror";
		$function[0][1] = "true";
		return $function;
	}
	
	public function geterror()
	{	
		if(isset($_GET['r']))
		{
		return "Sorry, Your request: ".$_GET['r']." is not exist";
		}
		else
		{
		return "Sorry, Your request is not exist";
		}

	}
}
?>