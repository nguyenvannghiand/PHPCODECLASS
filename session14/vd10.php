<?php
	
	class So
	{
		public $so1 = 0;
		public $so2 = 0;
	}
	
	class PhepTinh
	{
		//khai bao bien trong class
		public $s;
		
		public function __construct($a, $b)
		{
			// khoi tao doi tuong cua class So, gan cho bien $s
			$this->s = new So();
			$this->s->so1 = $a;
			$this->s->so2 = $b;
		}
		
		public function cong()
		{
			$ketqua = $this->s->so1 + $this->s->so2;
			echo "<h1>{$this->s->so1} + {$this->s->so2} = $ketqua</h1>";
			
		}
		
	}
	
	$pt = new PhepTinh(5, 2);
	$pt->cong();

?>