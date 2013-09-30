<?php
require_once(CONTROLLER);
class errorview_controller extends controller
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
	return "Sorry, the page is exist but there is no view";
	}
}
?>