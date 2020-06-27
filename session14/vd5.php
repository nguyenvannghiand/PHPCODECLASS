<?php
	class PhepTinh{
		public $so1 = 0;
		public $so2 = 0;
		public function  __construct($s1, $s2)
		{
			// gan gia tri
			$this->so1 = $s1;
			$this->so2 = $s2;
		}
		public function cong(){
			$ketqua = $this->so1 + $this->so2;
			echo "<h1> $this->so1 + $this->so2 = $ketqua</h1>";
			// goi ham trong class
			$this->tru();
		}
		public function tru(){
			$ketqua = $this->so1 - $this->so2;
			echo "<h1> $this->so1 - $this->so2 = $ketqua</h1>";
		}
	}
	
	$pt = new PhepTinh(5,3);
	$pt->cong();
	
?>
