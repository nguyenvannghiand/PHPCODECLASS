<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="Assets/css/bootstrap.min.css">
</head>
<body>
<?php
	
	if (file_exists("Controllers/LoginController.php")) {
		include "Controllers/LoginController.php";
		//VD: inclue"Controllers/UsersController.php"
		//tao object cua class $controller
		if (class_exists("LoginController")) {
			$obj = new LoginController();
			//Dac tinh cua ngon ngu Php cho phep tao new bien -> khoi tao ();
			//$obj = new Users();
			
			//goi ham ben trong class
			$obj->$action();
			//$obj->Read();
		}
	}

?>
</body>
</html>
