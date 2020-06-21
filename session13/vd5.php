<?php
	// khi khong start session thi bien session nay chi tuong duong voi bien toan cuc - > chi ton tai tren mot trang, khong ton tai
	//	duoc o trang khac thuoc cung trinh duyet
	session_start();
	$_SESSION["str"] = "Hello World";

?>
<h1><?php echo $_SESSION["str"]; ?></h1>
