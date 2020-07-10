<?php
	//load file Molde vao day
	include "Models/LoginModel.php";
	class LoginController extends LoginModel{
		public function index()
		{
			//load View
			include "Views/LoginView.php";
		}
		//khi an nut submit
		public function loginPost()
		{
			echo "ok";
			//goi ham checkLogin trong Model de kiem tra
			$this->checkLogin();
			//quay tro lai trang index
			header("location:index.php");
		}
		//dang xuat
		public function logout(){
			//huy bien session
			unset($_SESSION["email"]);
			//quay tro lai trang index
//			header("location:index.php");
			echo "<script>location.href='index.php';</script>";
		}
	}
?>
