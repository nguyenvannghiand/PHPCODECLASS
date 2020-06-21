<?php
	session_start();
	// lay bien action tru"en tu url -> tu bien action nay se biet duoc trang nao thuc hien
	$action = isset($_GET["action"]) ? $_GET["action"] : "";
	switch ($action) {
		// co nghia la tu trang sinhvien.php truyen den de them moi ban ghi
		case "add":
			// khoi tao bien nay de khi an submit thi se nay den trang an thuc hien
			$action = "form-sinhvien.php?action=addPost";
			break;
		case "edit":
			//lay bien email truyen tu url -> lay dung ban ghi can sua
			$email = isset($_GET["email"]) ? $_GET["email"] : "";
			$action = "form-sinhvien.php?action=editPost&email=$email";
			//duyet session de lay dung ban ghi
			foreach ($_SESSION["sv"] as $key => $rows) {
				if ($rows["email"] == $email) {
					$record = $_SESSION["sv"][$key];
				}
			}
			break;
		//khi an nut submit de them ban ghi
		case "addPost":
			$hoten = $_POST["hoten"];
			$email = $_POST["email"];
			// them vao thanh mot phan tu cua session
			$_SESSION["sv"][] = array("hoten" => $hoten, "email" => $email);
			// di chuyen den mot trang khac
			header("location:sinhvien.php");
			break;
		case "editPost":
			$hoten = $_POST["hoten"];
			$email = $_POST["email"];
			//lay bien email truyen tu url -> lay dung ban ghi can sua
			$email = isset($_GET["email"]) ? $_GET["email"] : "";
			//duyet session de lay dung ban ghi
			foreach ($_SESSION["sv"] as $key => $rows) {
				if ($rows["email"] == $email) {
					$_SESSION["sv"][$key] = array("hoten" => $hoten, "email" => $email);
				}
			}
			// di chuyen den mot trang khac
			header("location:sinhvien.php");
			break;
		case "delete":
			//lay bien email truyen tu url -> lay dung ban ghi can sua
			$email = isset($_GET["email"]) ? $_GET["email"] : "";
			//duyet session de lay dung ban ghi
			foreach ($_SESSION["sv"] as $key => $rows) {
				if ($rows["email"] == $email) {
					unset($_SESSION["sv"][$key]);
				}
			}
			// di chuyen den mot trang khac
			header("location:sinhvien.php");
			break;
		
	}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Them sua sinh vien</title>
</head>
<body>
<fieldset style="width: 300px; margin: auto">
    <legend>Them sua sinh vien</legend>
    <form method="post" action="<?php echo $action; ?>">
        <table cellpadding="5">
            <tr>
                <td>Ho ten</td>
                <td><input type="text" name="hoten" value="<?php echo isset($record) ? $record['hoten'] : ''; ?>"
                           required></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" value="<?php echo isset($record) ? $record['email'] : ''; ?>"
                           required></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Thuc hien">
                </td>
            </tr>

        </table>
    </form>
</fieldset>
</body>
</html>