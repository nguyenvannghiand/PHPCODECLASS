<?php
	//khoi dong session
	session_start();
	//Khoi tao bien session de luu thong tin
	if (isset($_SESSION["sv"]) == null) {
		$_SESSION["sv"] = array();
	}
	
	class SinhVien
	{
		public function __construct()
		{
			// lay bien $action truyen tu url
			$action = isset($_GET["action"]) ? $_GET["action"] : "";
			switch ($action) {
				default:
					//load file danh sach sinh vien
					include "sinhvien.php";
					break;
				case "add":
					include "themsinhvien.php";
					break;
				case "addPost":
					$hoten = $_POST["hoten"];
					$email = $_POST["email"];
					$_SESSION["sv"][] = array("hoten"=>$hoten, "email"=>$email);
					header("location:vd14.php");
					break;
				case "delete":
					$email = isset($_GET["email"]) ? $_GET["email"] : "";
					foreach ($_SESSION["sv"] as $key => $value) {
						if ($value["email"] == $email) {
							unset($_SESSION["sv"][$key]);
						}
					}
					header("location:vd14.php");
					break;
			}
			
		}
	}
	
	new SinhVien();

?>
