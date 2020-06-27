<?php
	class A {
		public $bienA1 = "<h1>Bien A1</h1>";
		public function hamA1(){
			echo "<h1>Ham A1</h1>";
			echo  $this->bienB1;
		}
	}
	// khai bao class B ke thua class A khi do class B co the tac dong vao cac bien, ham trong class A(tuy thuoc tam vuc cua bien)
	class B extends A{
		public $bienB1 = "<h1>Bien B1</h1>";
		public function __construct()
		{
			// xuat bien a1
			echo $this->bienA1;
		}
	}
	// khoi tao doi tuong cua class B
	$obj = new B();
	$obj->hamA1();
?>
