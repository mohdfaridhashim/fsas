<?php
require_once(CONTROLLER);
class error_controller extends controller
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
		$kelas = $_GET['r'] . '_controller';
		return "Sorry, the requested class: ".$kelas ." is not exist";
	}
}
?>