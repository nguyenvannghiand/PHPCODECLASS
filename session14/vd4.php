<?php
	class SinhVien{
		public function __construct($hoten)
		{
			echo "<h1>Ham tao tu dong goi</h1>";
			echo "<h1>$hoten</h1>";
		}
	}
	// Co the goi thang class sinhvien ma khong can gan vao mot bien doi tuong
	new SinhVien("Nguyen Van A");
?>

