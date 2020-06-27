<?php
	// co the su dung ten class truy cao truc tiep vao ten ham, ten bien
	// theo cu phap TenClass::tenham(); TenClass::tenbien; -> bang cach them tu khoa static truoc ham, bien
	class Hello{
		public function say(){
			echo "<h1>Hello Word</h1>";
		}
	}
	Hello::say();
?>
