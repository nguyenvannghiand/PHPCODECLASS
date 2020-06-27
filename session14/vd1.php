<?php
	// dinh nghia mot tap chua cac gia tri chung -> class
	class MonHoc{
		//dinh nghia bien trong class -> thuoc tinh
		public $tenMonHoc1 = "PHP";
		public $tenMonHoc2 = "Android";
		public $tenMonHoc3 = "IOS";
		
	}
	// tao mot doi tuong cu the de truy cao vao tap gia tri chung cua class
	$mon1 = new MonHoc();
	$mon2 = new MonHoc();
	$mon3 = new MonHoc();
	// truy cap vao bien ben trong class theo cu phap: $doituong -> tenbien
	echo "<h1>" .$mon1->tenMonHoc1. "</h1>";
	echo "<h1>" .$mon1->tenMonHoc2. "</h1>";
?>
