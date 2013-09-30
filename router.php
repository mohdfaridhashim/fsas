<?php
//router class
//it will get master page
//check session
//check url request (menu)
include_once("config.php");
class router
{
	function get_master_view()
	{
		require_once(TEMPLATE_ROOT.$master_view);
	}
	
	function get_controller($page)
	{
		//compute the path to the file
		if(isset($_SESSION['login']))
		{
		$target = CONTROLLER_ROOT_ACC . $page . '.php';
		}
		else
		{
		$target = CONTROLLER_ROOT . $page . '.php';
		}
		if (file_exists($target))
		{
			//include controller
			include_once($target);
	
			//modify page to fit naming convention
			$class = $page . '_controller';
			if (class_exists($class))
			{
				//this will create a class
				$controller = new $class;
				//get the class numbers of function
				$function_qty = $controller->get_num_func();
				//execute main function of that class and return an array of function
				$functions = $controller->main();
				//looping until number of method executed in that class
				for($i = 0; $i < $function_qty; $i++)
				{
					if($functions[$i][1] == "true")
					{
						//view model get return value from a method of that class
						$views[$i] = $controller->$functions[$i][0]();
					}
					else
					{
						$controller->$functions[$i][0]();
					}
				}
				//view
				$user_view = $controller->view();
				$viewpage = VIEW_ROOT.$user_view;
				if (file_exists($viewpage))
				{
					include_once($viewpage);
				}
				else
				{
					$this->get_controller("errorview");
					//purposely for debug
					include_once($viewpage);
				}
			}
			else
			{
				$this->get_controller("error");
				//purposely for debug
				//$controller = new $class;
			}
		}
		else
			{
				//$this->get_controller("home");
				$this->get_controller("errorrequest");
				//purposely for debug
				//include_once($target);
			}
	}

}
?>