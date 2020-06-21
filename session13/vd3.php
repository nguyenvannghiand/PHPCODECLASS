<?php
	setcookie("tenlop", "PHP",time()+ 900);
	// xoa bien cookie
	setcookie("tenlop", "PHP",time());
?>
<h1><?php echo $_COOKIE["tenlop"]; ?></h1>
