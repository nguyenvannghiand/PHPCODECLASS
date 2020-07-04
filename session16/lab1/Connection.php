<?php
	class Connection{
		public static function getInstance(){
			// ket noi csdl su dung PDO
			$connection = new PDO("mysql:host=localhost;dbname=php47_database", "root", "");
			// thuc hien cau lenh sau de co the lay du lieu theo kieu unicode
			$connection->exec("set names utf8");
			// dat cac thuc de duyet cac ban ghi
			$connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
			//----
			return $connection;
		}
		
	
	}
?>
