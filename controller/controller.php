<?php
//default controller
class controller
{
	var $bil;
	var $option;
	var $file;
	//this method will be override
	//this will call method that want to be executed
	public function main()
	{
		$function = array();
		return $function;
	}
	//get number of method to be executed
	public function get_num_func()
	{
		return $this->bil;
	}
	
	public function view()
	{
		return $this->file;
	}
	
	public function view_option()
	{
		return $this->option;
	}
}

?>