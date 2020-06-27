<?php
	trait MonHoc{
		public $tenMonHoc = "PHP";
		public function setMonHoc($ten){
			$this->tenMonHoc = $ten;
		}
	}
	class SinhVien{
		//ke thua class MonHoc
		use MonHoc;
		//khai bao bien trong class
		public $hoten;
		public function __construct($ht, $mon)
		{
			$this->hoten = $ht;
			$this->setMonHoc($mon);
			
		}
		public function display(){
			echo "<h1>Ho ten: $this->hoten</h1>";
			echo "<h1>Mon hoc: $this->tenMonHoc</h1>";
		}
		
	}
	
	$sv = new SinhVien("Nguyen Van A", "PHP");
	$sv->display();
?>
