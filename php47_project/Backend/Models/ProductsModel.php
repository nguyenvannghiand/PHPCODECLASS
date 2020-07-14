<?php
	
	class ProductsModel
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
			$query = $conn->query("select * from products order by id desc limit $from ,$recordPerPage");
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
			$query = $conn->query("select id from products");
			return $query->rowCount();
		}
		
		//lay mot ban ghi
		public function getRecord($id)
		{
			//lay bien ket noi
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->prepare("select * from products where id=:id");
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
			$email = $_POST["email"];
			$password = $_POST["password"];
			//--
			//lay bien ket noi
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->prepare("update products set name =:name, email=:email where id=:id");
			$query->execute(array("id" => $id, "name" => $name, "email" => $email));
			//neu password khong rong thi update password
			if ($password != "") {
				//ma hoa password
				$password = $conn->prepare("update products set password=:password where id=:id");
				$query->execute(array("id" => $id, "password" => $password));
			}
		}
		
		//create ban ghi
		public function modelCreate()
		{
			//--
			$name = $_POST["name"];
			$email = $_POST["email"];
			$password = md5($_POST["password"]);
			//--
			//lay bien ket noi
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->prepare("insert into products set name =:name, email=:email, password=:password");
			$query->execute(array("name" => $name, "email" => $email, "password" => $password));
		}
		
		//delete ban ghi
		public function modelDelete($id)
		{
			//--
			//lay bien ket noi
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->prepare("delete from products where id=:id");
			$query->execute(array("id" => $id));
		}
		
		//lay ten danh muc
		public function getCategory($category_id)
		{
			//--
			//lay bien ket noi
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->prepare("select name from categories where id=:category_id");
			$query->execute(array("category_id" => $category_id));
			//lay 1 ban ghi
			$record = $query->fetch();
			return $query->rowCount() > 0 ? $record->name : "";
		}
		
		public function modelListCategory()
		{
			//--
			//lay bien ket noi
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from categories where parent_id = 0 order by id desc ");
			//lay nhieu ban ghi
			$listRecord = $query->fetchAll();
			return $listRecord;
		}
		
		//lay danh sach danh muc con
		public function modelListCategorySub($category_id)
		{
			//-- lay bien kien noi
			$conn = Connection::getInstance();
			// thuc hien truy van
			$query = $conn->query("select * from categories where parent_id =$category_id order by id desc ");
			// lay nhieu ban ghi
			$listRecord = $query->fetchAll();
			return $listRecord;
			
		}
		
	}

?>

