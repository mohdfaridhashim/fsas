<?php
require_once(CONTROLLER);
class ticker_controller extends controller
{
	var $bil = 1;
	var $option = 1;
	var $file = "ticker.php";
	public function main()
	{
		$function = array();
		$function[0][0] = "get_ticker";
		$function[0][1] = "false";
		return $function;
	}
	
	public function get_ticker(){	}
}
?>