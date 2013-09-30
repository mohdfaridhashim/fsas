<?php
//config 
//file directory
define('SERVER_ROOT' , dirname(__FILE__));
//server address
define('SERVER_IP', $_SERVER['SERVER_ADDR']);
//template directory
define('TEMPLATE_ROOT' , SERVER_ROOT . '/template/');
//CONTROLLER directory
define('CONTROLLER_ROOT' , SERVER_ROOT . '/controller/');
//CONTROLLER directory with credential
define('CONTROLLER_ROOT_ACC' , SERVER_ROOT . '/controller/access/');
//CONTROLLER parent
define('CONTROLLER' , SERVER_ROOT . '/controller/controller.php');
//MODEL directory
define('MODEL_ROOT' , SERVER_ROOT . '/model/');
//VIEW directoy
define('VIEW_ROOT' , SERVER_ROOT . '/view/');
//timezone
date_default_timezone_set('Asia/Kuala_Lumpur');
//define master view
$master_view= "master.php";
?>