<?php
	// load file model
	include "Models/ProductsModel.php";
	
	class ProductsController extends ProductsModel
	{
		public function category(){
			$category_id = isset($_GET["id"]) ? $_GET["id"] : 0;
			
			//quy dinh so ban ghi tren mot trang
			$recordPerPage = 20;
			//tinh so trang
			$numPage = ceil($this->totalRecord($category_id)/$recordPerPage);
			//goi ham ModelRead tu class ProductsModel de lay ket qua
			$listRecord = $this->modelRead($recordPerPage, $category_id);
			//load view
			include "Views/ProductsCategory.php";
		}
		//chi tiet san pham
		public function detail($id)
		{
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			$record = $this->modelDetail($id);
			//load View
			include "Views/ProductsDetail.php";
		}
	}

?>
