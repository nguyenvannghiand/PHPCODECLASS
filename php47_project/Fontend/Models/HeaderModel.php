<?php
	
	class HeaderModel
	{
		public function modelListCategory()
		{
			//lay bien ket noi
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from categories where parent_id=0");
			//lay tat car cac ban ghi
			$result = $query->fetchAll();
			return $result;
		}
		
		public function modelListCategorySub($category_id)
		{
			//lay bien ket noi
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from categories where parent_id= $category_id");
			//lay tat car cac ban ghi
			$result = $query->fetchAll();
			return $result;
		}
	}

?>
