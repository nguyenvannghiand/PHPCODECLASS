<?php
	class SinhVien{
		// ham tao se duoc tu dong goi dau tien
		public function __construct()
		{
			echo "<h1>Ham tao se tu dong doi khi doi tuong duoc khoi tao</h1>";
		}
		// Ham huy se tu dong goi cuoi cung
		public function __destruct()
		{
			// TODO: Implement __destruct() method.
			echo "<h1>Ham huy se tu dong doi khi doi tuong duoc khoi tao</h1>";
		}
		public function hello(){
			echo "<h1>Hello World</h1>";
		}
	}
	// khoi tao doi tuong thi ham tao se tu dong hien thi
	$sv = new SinhVien();
	@$sv->hello();
?>
