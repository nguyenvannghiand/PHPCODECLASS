<?php
	class SinhVien{
		//khai bao bien array
		public $hoten = array();
		//gan gia tri
		public function set($ht){
			$this->hoten[] = $ht;
		}
		//hien thi
		public function display(){
			foreach ($this->hoten as $value){
				echo "<h1>$value</h1>";
			}
		}
	}
	$sv = new SinhVien();
	$sv->set("Nguyen Van A");
	$sv->set("Nguyen Van B");
	$sv->set("Nguyen Van C");
	$sv->set("Nguyen Van D");
	$sv->set("Nguyen Van E");
	$sv->display();
?>
