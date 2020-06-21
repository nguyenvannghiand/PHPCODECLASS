<?php
	$sv1 = array("Hoten" => "Nguyen van A", "email" => "nva@gmail.com");
	$sv2 = array("Hoten" => "Nguyen van B", "email" => "nva@gmail.com");
	$sv3 = array("Hoten" => "Nguyen van C", "email" => "nva@gmail.com");
	$sv4 = array("Hoten" => "Nguyen van D", "email" => "nva@gmail.com");
	$sv5 = array("Hoten" => "Nguyen van E", "email" => "nva@gmail.com");
	// Dinh nghia array trong array
	$sinhvien = array($sv1, $sv2, $sv3, $sv4, $sv5);
	echo "<pre>";
	print_r($sinhvien);
	echo "</pre>";
?>
<fieldset style="width: 400px;">
	<legend>Danh sach sinh vien</legend>
	<table cellpadding="5" border="1" style="width: 100%; border-collapse: collapse;">
		<tr>
			<th>Ho ten</th><th>Email</th>
		</tr>
		<?php foreach ($sinhvien as $rows):?>
		<tr>
			<td><?php echo $rows["Hoten"]; ?></td>
			<td><?php echo $rows["email"]; ?></td>
		</tr>
		<?php endforeach; ?>
	</table>
</fieldset>
