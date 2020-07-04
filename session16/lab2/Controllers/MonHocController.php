<?php
	// Inclue file Mondel
	include "Models/MonHocModel.php";
	
	class MonHocController
	{
		// ke thua class MonHocModel
		use MonHocModel;
		//hamtao
		public function __construct(){
			// lay bien action truyen tu url
			$action = isset($_GET["action"]) ? $_GET["action"] : "";
			switch ($action) {
				default:
					//goi ham read tu model de lay ket qua tra ve
					$result = $this->read();
					//load file PhongBan.php.php de hien thi thong tin
					include "Views/MonHoc.php";
					break;
				case "update":
					$id = isset($_GET["id"]) ? $_GET["id"] : 0;
					//tao bien $action de dua vao thuoc tin action cua the form
					$action = "index.php?action=updatePost&id=$id";
					//goi ham update tu model de lay ket qua tra ve
					$record = $this->update();
					//goi file AddEditMonHoc.php
					include "Views/AddEditMonHoc.php";
					break;
				case "updatePost":
					//goi ham updatePost tu model
					$this->updatePost();
					//quay tro lai trang index
					header("location:index.php");
					break;
				case "creat":
					$action = "index.php?action=creatPost";
					// goi file AddEditMonHoc.php
					include "Views/AddEditMonHoc.php";
					
					break;
				case "creatPost":
					//goi ham createPost tu Model
					$this->createPost();
					//----
					//quay tro lai trang index
					header("location:index.php");
					break;
				case "delete":
					//goi ham delete tu Model
					$this->delete();
					//----
					//quay tro lai trang index
					header("location:index.php");
					break;
			}
		}
	}
	
	// khoi tao de class hoat dong
	new MonHocController();
?>
