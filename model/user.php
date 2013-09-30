<?php

//user model
class user
{
	var $username;
	var $password;
	
	public function check_login($user,$pass)
	{	
		
		//include db model
		include_once MODEL_ROOT .'db.php';
		//call db class
		$db = new Database();
		$this->username = $user;
		$this->password = $pass;
		
		if((isset($this->username) == false ) && (isset($this->password) == true))
		{
		return "Please enter valid username.";
		}
		else if((isset($this->username) == true ) && (isset($this->password) == false))
		{
		return "Please enter valid password.";
		}
		else if((isset($this->username) == false) && (isset($this->password) == false))
		{
		return "Please enter valid username and password.";
		}
		//else if(isset($_POST['username']) && isset($_POST['password']))
		else if((isset($this->username)) && (isset($this->password)))
		{
		//sql query
		$sql = "SELECT userid from fsas_user where username='$this->username' and password = '$this->password'";
		//query the sql statement
		$db->query($sql);
		$index = $db->numRows();
			//validate
			if($index == 1)
			{
				$db->singleRecord();
				//login session
				$_SESSION['login'] = TRUE;
				//return $db->Record['userid'];
				//uid session (user id)
				$_SESSION['uid'] = $db->Record['userid'];
				return "true";
			}
			else
			{
				return "Please enter valid username and password.";
			
			}
		
		}
	}
	//get user profile
	 public function get_profile($uid) 
	{
		$sql = "SELECT name FROM fsas_user WHERE userid = $uid";
		$db->query($sql);
		$db->singleRecord();
		return $db->Record['name'];
    }
	//getting session whether the user is login or not
	public function get_session() 
	{
        return $_SESSION['login'];
    }
	//logout
    public function user_logout() {
        $_SESSION['login'] = FALSE;
        session_destroy();
    }

}

?>