<?php
include_once('router.php');
$FSAS = new router();
//it will start session if the session is not start
if (!isset($_SESSION)) session_start();
if(isset($_GET['r']))
{
	$r =  $_GET['r'];
}
else
{
		/*
		if(isset($_SESSION['login']))
		{
		$r = "main";
		}
		else
		{
		$r = "home";
		}
		*/
		$r = "home";
	
}

//execute router from master template
include_once(TEMPLATE_ROOT.'master.php');
?>