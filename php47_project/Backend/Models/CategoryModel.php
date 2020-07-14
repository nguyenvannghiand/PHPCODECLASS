<?php
	
	class CategoryModel
	{
		//doc tat ca cac ban ghi
		public function modelRead($recordPerPage)
		{
			//---
			//phan trang
			//goi cac ham trong class them tu khoa $this
			//tinh so trang
			//ham ceil la ham lay gia tri tran.vd 2.3 =3
			$numPape = ceil($this->totalRecord() / $recordPerPage);
			//lay bien p truyen tu url
			$p = isset($_GET["p"]) && $_GET["p"] > 0 ? $_GET["p"] - 1 : 0;
			// lay tu ban ghi nao
			$from = $p * $recordPerPage;
			//lay bien ket noi
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from categories where parent_id =0 order by id desc limit $from ,$recordPerPage");
			//lay tat cac ket qua tra ve
			$result = $query->fetchAll();
			return $result;
		}
		
		//tinh tong so ban ghi
		public function totalRecord()
		{
			//lay bien ket noi
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select id from categories where parent_id = 0");
			return $query->rowCount();
		}
		
		//lay mot ban ghi
		public function getRecord($id)
		{
			//lay bien ket noi
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->prepare("select * from categories where id=:id");
			$query->execute(array("id" => $id));
			//lay mot ban ghi
			$record = $query->fetch();
			return $record;
			
		}
		
		//update ban ghi
		public function modelUpdate($id)
		{
			//--
			$name = $_POST["name"];
			$parent_id = $_POST["parent_id"];
			//--
			//lay bien ket noi
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->prepare("update categories set name =:name, parent_id =:parent_id where id=:id");
			$query->execute(array("id" => $id, "name" => $name,"parent_id"=>$parent_id));
		}
		
		//create ban ghi
		public function modelCreate()
		{
			//--
			$name = $_POST["name"];
			//--
			//lay bien ket noi
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->prepare("insert into categories set name=:name");
			$query->execute(array("name" => $name));
		}
		
		//delete ban ghi
		public function modelDelete($id)
		{
			//--
			//lay bien ket noi
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->prepare("delete from categories where id=:id");
			$query->execute(array("id" => $id));
		}
		
		// lay cac danh muc cap con (tu view se goi ham nay)
		public function modelReatSub($category_id)
		{
			//lay bien ket noi
			$conn = Connection::getInstance();
			// thuc hien truy van
			$query = $conn->query("select * from categories where parent_id=$category_id");
			// lay tat ca cac ban ghie
			$result = $query->fetchAll();
			return $result;
		}
		
		//doc tat ca cac ban ghi
		public function modelReadDropDownCategory()
		{
			//lay bien ket noi
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from categories where parent_id =0 order by id desc");
			//lay tat cac ket qua tra ve
			$result = $query->fetchAll();
			return $result;
		}
	}

?>
