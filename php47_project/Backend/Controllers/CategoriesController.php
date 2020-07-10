<?php
	//load file UserModel.php
	include "Models/CategoryModel.php";
	class CategoriesController extends CategoryModel {
		//ten ham dat theo quy tac camel
		public function read()
		{
			//quy dinh so ban ghi tren mot trang
			$recordPerPape = 4;
			//tinh so trang
			$numPage = ceil($this->totalRecord() / $recordPerPape);
			//goi ham modelRead tu class UserModel de lay ket qua
			$listRecord = $this->modelRead($recordPerPape);
			//load view
			include "Views/CategoriesRead.php";
		}
		//update -GET
		public function update()
		{
			$id = isset($_GET["id"]) && is_numeric($_GET["id"]) ? $_GET["id"] : 0;
			//goi ham getRecord tu model de lay 1 ban ghi
			$record = $this->getRecord($id);
			//tao bien $action de the hien action cua form khi submit
			$action = "index.php?controller=categories&action=updatePost&id=$id";
			//loadView
			include "Views/CategoriesCreateUpdate.php";
		}
		//update -POST
		public function updatePost()
		{
			$id = isset($_GET["id"]) && is_numeric($_GET["id"]) ? $_GET["id"] : 0;
			//goi ham modelUodate de uodate ban ghi
			$this->modelUpdate($id);
			//quay tro lai trang users
//			header("location:index.php?controller=categories&action=read");
			echo "<script>location.href='index.php?controller=categories&action=read';</script>";
		}
		//creat -GET
		public function create()
		{
			//tao bien $action de the hien action cua form khi submit
			$action = "index.php?controller=categories&action=createPost&id=$id";
			//loadView
			include "Views/CategoriesCreateUpdate.php";
		}
		//creat -POST
		public function createPost()
		{
			//goi ham modelUpdate de update ban ghi
			$this->modelCreate();
			echo "<script>location.href='index.php?controller=categories&action=read';</script>";
		}
		//delete
		public function delete()
		{
			$id = isset($_GET["id"]) && is_numeric($_GET["id"]) ? $_GET["id"] : 0;
			//goi ham modelUpdate de update ban ghi
			$this->modelDelete($id);
			echo "<script>location.href='index.php?controller=categories&action=read';</script>";
		}
	}
?>