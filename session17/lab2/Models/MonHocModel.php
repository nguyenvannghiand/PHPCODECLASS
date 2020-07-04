<?php
	
	trait MonHocModel
	{
		// Read
		public function read()
		{
			//goi ham de ket noi csdl, tra kq ve bien ket noi
			$connection = Connection::getInstance();
			//thuc hien truy van, ket qua tra ve mot bien object
			$query = $connection->query("select * from monhoc");
			// lay tat ca cac ket qua tra ve
			$result = $query->fetchAll();
			return $result;
		}
		
		//Update
		public function update()
		{
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			//---
			//gooi ham de ket noi csdl, tra ket qua ve bien ket noi
			$connection = Connection::getInstance();
			// chuan bi truy van
			$query = $connection->prepare("select * from monhoc where id =:id");
			$query->execute(array("id" => $id));
			//lay mot ban ghe
			$record = $query->fetch();
			return $record;
		
		}
		
		//Update Post
		public function updatePost()
		{
			$tenmonhoc = $_POST["tenmonhoc"];
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			//---
			//goi ham ket noi
			//gooi ham de ket noi csdl, tra ket qua ve bien ket noi
			$connection = Connection::getInstance();
			// chuan bi truy van
			$query = $connection->prepare("update monhoc set tenmonhoc =:ten where id=:id");
			$query->execute(array("id" => $id, "ten" => $tenmonhoc));
			//----
		}
		
		//Create Post
		public function createPost()
		{
			$tenmonhoc = $_POST["tenmonhoc"];
			//---
			//goi ham ket noi
			//gooi ham de ket noi csdl, tra ket qua ve bien ket noi
			$connection = Connection::getInstance();
			// chuan bi truy van
			$query = $connection->prepare("insert into monhoc set tenmonhoc =:ten");
			$query->execute(array("ten" => $tenmonhoc));
		}
		
		//delete
		public function delete()
		{
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			//---
			//goi ham ket noi
			//gooi ham de ket noi csdl, tra ket qua ve bien ket noi
			$connection = Connection::getInstance();
			// chuan bi truy van
			$query = $connection->prepare("delete from monhoc where id =:id");
			$query->execute(array("id" => $id));
		}
	}

?>
