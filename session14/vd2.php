<?php
	class Hello{
		//khoi tao ham
		public function test1(){
			echo "<h1>Ham khong co gia tri truyen vao, khong tra ve</h1>";
		}
		public function test2($str){
			echo "<h1>$str</h1>";
		}
		public function test3(){
			return "<h1>Ham co gia tri tra ve</h1>";
		}
	}
	// muon truy cap vao cac ham, bien ben trong class thi phai khoi tao doi tuong de truy cap
	$h = new Hello();
	// truy cap vao ham trong class
	$h->test1();
	$h->test2("Hello World");
	
?>

