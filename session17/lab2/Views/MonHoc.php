<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Ten mon hoc</title>
</head>
<body>
<fieldset style="width: 400px; margin: auto">
	<legend>Danh sach sinh vien</legend>
	<div style="margin-bottom: 5px;">
		<a href="index.php?action=creat">Them ban ghi</a>
	</div>
	<table cellpadding="5" border="1" style="width: 100%;border-collapse: collapse;">
		<tr>
			<th>Ten mon hoc</th>
			<th style="width: 100px;"></th>
		</tr>
	<?php foreach ($result as $rows):?>
		<tr>
            <td><?php echo  $rows->tenmonhoc;?></td>
			<td style="text-align: center;">
				<a href="index.php?action=update&id=<?php echo $rows->id;?>">Edit</a>
				&nbsp;
				<a href="index.php?action=delete&id=<?php echo $rows->id;?>">Delete</a>
				&nbsp;
			</td>
		</tr>
	<?php endforeach ?>
	</table>
	
</fieldset>
</body>
</html>
