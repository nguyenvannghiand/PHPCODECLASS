<?php
	//load file mddel
	include "Models/HomeModel.php";
	
	class HomeController extends HomeModel
	{
		//san pham hot
		public function hotProducts()
		{
			$products = $this->modelHotProducts();
			include "Views/HomeHotProducts.php";
		}
		//san pham moi
		public function newProducts()
		{
			$products = $this->modelNewProducts();
			include "Views/HomeNewProducts.php";
		}
		// liet ke danh muc san pham -> chi tiet liet ke danh muc co san
		
		public function categories()
		{
			$listCategories = $this->modelCategories();
			include "Views/HomeCategoryProducts.php";
		}
	}

?>
