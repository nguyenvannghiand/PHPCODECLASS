<?php
	// load file Connection de ket noi csdl
	include "Connection.php";
	// lay bien action truyen tu url
	$action = isset($_GET["action"]) ? $_GET["action"] : "";
	switch ($action) {
		default:
			//hien thi danh sach cac ban ghi
			//---
			//goi ham de ket noi csdl, tra kq ve bien ket noi
			$connection = Connection::getInstance();
			//thuc hien truy van, ket qua tra ve mot bien object
			$query = $connection->query("select * from monhoc");
			// lay tat ca cac ket qua tra ve
			$result = $query->fetchAll();
			//load file PhongBan.php.php de hien thi thong tin
			include "MonHoc.php";
			break;
		case "update":
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			//tao bien $action de dua vao thuoc tin action cua the form
			$action = "index.php?action=updatePost&id=$id";
			//---
			//gooi ham de ket noi csdl, tra ket qua ve bien ket noi
			$connection = Connection::getInstance();
			// chuan bi truy van
			$query = $connection->prepare("select * from monhoc where id =:id");
			$query->execute(array("id"=>$id));
			//lay mot ban ghe
			$record = $query->fetch();
			//goi file AddEditMonHoc.php
			include "AddEditMonHoc.php";
			break;
		case "updatePost":
			$tenmonhoc = $_POST["tenmonhoc"];
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			//---
			//goi ham ket noi
			//gooi ham de ket noi csdl, tra ket qua ve bien ket noi
			$connection = Connection::getInstance();
			// chuan bi truy van
			$query = $connection->prepare("update monhoc set tenmonhoc =:ten where id=:id");
			$query->execute(array("id"=>$id,"ten"=>$tenmonhoc));
			//----
			//quay tro lai trang index
			header("location:index.php");
			break;
		case "creat":
			$action = "index.php?action=creatPost";
			// goi file AddEditMonHoc.php
			include "AddEditMonHoc.php";
			
			break;
		case "creatPost":
			$tenmonhoc = $_POST["tenmonhoc"];
			//---
			//goi ham ket noi
			//gooi ham de ket noi csdl, tra ket qua ve bien ket noi
			$connection = Connection::getInstance();
			// chuan bi truy van
			$query = $connection->prepare("insert into monhoc set tenmonhoc =:ten");
			$query->execute(array("ten"=>$tenmonhoc));
			//----
			//quay tro lai trang index
			header("location:index.php");
			break;
		case "delete":
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			//---
			//goi ham ket noi
			//gooi ham de ket noi csdl, tra ket qua ve bien ket noi
			$connection = Connection::getInstance();
			// chuan bi truy van
			$query = $connection->prepare("delete from monhoc where id =:id");
			$query->execute(array("id"=>$id));
			//----
			//quay tro lai trang index
			header("location:index.php");
			break;
	}
?>