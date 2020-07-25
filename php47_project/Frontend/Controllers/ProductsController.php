<?php 
	//load file model
	include "Models/ProductsModel.php";
	class ProductsController extends ProductsModel{
		//ten ham dat theo quy tac camel
		public function category(){
			$category_id = isset($_GET["id"]) ? $_GET["id"] : 0;
			//quy dinh so ban ghi tren mot trang
			$recordPerPage = 20;
			//tinh so trang
			$numPage = ceil($this->totalRecord($category_id)/$recordPerPage);
			//goi ham ModelRead tu class ProductsModel de lay ket qua
			$listRecord = $this->modelRead($recordPerPage,$category_id);
			//load view
			include "Views/ProductsCategory.php";
		}
		//chi tiet san pham
		public function detail(){
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			$record = $this->modelDetail($id);
			//load view
			include "Views/ProductsDetail.php";
		}
		//tim kiem san pham theo gia
		public function searchPrice(){
			//quy dinh so ban ghi tren mot trang
			$recordPerPage = 20;
			//tinh so trang
			$numPage = ceil($this->totalRecordSearch()/$recordPerPage);
			//goi ham ModelRead tu class ProductsModel de lay ket qua
			$listRecord = $this->modelSearch($recordPerPage);
			//load view
			include "Views/ProductsSearchPrice.php";
		}
		//tim kiem san pham
		public function search(){
			//quy dinh so ban ghi tren mot trang
			$recordPerPage = 20;
			//tinh so trang
			$numPage = ceil($this->totalRecordSearch()/$recordPerPage);
			//goi ham ModelRead tu class ProductsModel de lay ket qua
			$listRecord = $this->modelSearch($recordPerPage);
			//load view
			include "Views/ProductsSearch.php";
		}
	}
 ?>