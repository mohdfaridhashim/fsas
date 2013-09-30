<?php
require_once(CONTROLLER);

class signin_controller extends controller
{
	var $bil = 1;
	var $option = 1;
	var $file = "signin.php";
	public function main()
	{
		$function = array();
		$function[0][0] = "sign_in";
		$function[0][1] = "true";
		return $function;
	}
	
	public function sign_in()
	{	
		include_once MODEL_ROOT."user.php";
		$user = new user();
		if ($_SERVER["REQUEST_METHOD"] == "POST") {    
			$login = $user->check_login($_POST['j_username'], $_POST['j_password']);
			if ($login == "true") {
				// Registration Success
			   //header("location:login.php");
			   $this->file = "signin.php";
			} else {
				// Registration Failed
				//it will displa an error message
				$this->file = "login.php";
				//echo $login;
			}
			return $login;
		}
		else
		{
			$this->file = "login.php";
		}
		
	}
}
?>