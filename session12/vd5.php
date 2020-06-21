<!--
	Thuc hien viec upload file
		-Trong the form phai co thuoc tinh enctyle ="mutipart/form-data" -> neu khong co thuoc tinh nay thi khong upload dc file
		- Lay thong tin cua file
			$_FILES["ten the form"]["name"] -> tra ve ten file
			$_FILES["ten the form"]["tmp_name"] -> tra ve duong dan tam thoi
			$_FILES["ten the form"]["size"] -> tra ve dung luong file
		-Upload file
		- CHu y: mac dinh anh upload< 2mb, muon upload anh > 2mb thi phai cau hinh trong file php
		move_updloaded_file(duong dan thu muc tam, duong dan thu muc upload)
-->
<fieldset style="width: 400px;margin: auto;">
	<legend>Upload file</legend>
	<form method="post" action="" enctype="multipart/form-data">
		<input type="file" name="anh">
		<input type="submit" value="Upload">
	</form>
	<h1>hoten: <?php echo isset($_FILES["anh"]["name"]) ? $_FILES["anh"]["name"] : ""; ?></h1>
	<h1>size: <?php echo isset($_FILES["anh"]["size"]) ? $_FILES["anh"]["size"] : ""; ?></h1>
	<h1>tpm: <?php echo isset($_FILES["anh"]["tmp_name"]) ? $_FILES["anh"]["tmp_name"] : ""; ?></h1>
<!--	upload anh-->
	<?php
		if (isset($_FILES["anh"]["name"]) !=""){
			move_uploaded_file($_FILES["anh"]["tmp_name"], "upload/" . $_FILES["anh"]["name"]);
		}
	?>
</fieldset>