<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Add Edit</title>
</head>
<body>
<fieldset style="width: 300px; margin: auto">
	<legend>Add Edit Mon hoc</legend>
	<form method="post" action="<?php echo $action;?>">
		<table cellpadding="5">
			<tr>
				<td>Ten mon hoc</td>
				<td><input type="text" value="<?php echo isset($record->tenmonhoc)?$record->tenmonhoc:"";?>" name="tenmonhoc" required></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Thuc hien"></td>
			</tr>
		</table>
	</form>
</fieldset>
</body>
</html>
