<?php
	/*
	 * - Ham extract(ten-bien-array) se bien ten key thanh ten bien tro den value
	 *
	 * */
	$sinhvien = array("hoten"=>"Nguyen Van A","email" =>"nguyenvana@gmail.com");
	//su dung ham extract de bien ten key thanh ten bien
	extract($sinhvien);
?>
<h1>Ho va ten: <?php echo $hoten;?></h1>
<h1>Email: <?php echo $email;?></h1>
