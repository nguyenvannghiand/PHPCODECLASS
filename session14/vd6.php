<?php
	$str = "<h1> Hello World</h1>";
	class Hello{
		public function __construct()
		{
			// khai bao str thanh bien toan cuc
			global $str;
			echo $str;
		}
	}
	
	new Hello();
?>
