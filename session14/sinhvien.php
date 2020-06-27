<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Danh sach sinh vien</title>
</head>
<body>
<fieldset style="width: 500px; margin: auto">
	<legend>Danh sach sinh vien</legend>
	<div style="margin-bottom: 5px;">
		<a href="vd14.php?action=add">Them sinh vien</a>
	</div>
	<table cellpadding="5" border="1" style="width: 100%;border-collapse: collapse">
		<tr>
			<th>Hoten</th>
			<th>Email</th>
			<th style="width: 150px;"></th>
		</tr>
		<?php foreach ($_SESSION["sv"] as $rows):?>
		<tr>
			<td><?php echo $rows["hoten"];?></td>
			<td><?php echo $rows["email"];?></td>
			<td style="text-align: center;">
				<a href="vd14.php?action=delete&email=<?php echo $rows["email"];?>"> Delete</a>
			</td>
		</tr>
		<?php endforeach ?>
	</table>
	
</fieldset>
</body>
</html>
