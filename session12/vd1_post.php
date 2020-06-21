<h1>Trạng thái trang <?php echo$_SERVER["REQUEST_METHOD"]?></h1>
<!--
    Doi tuong $_POST chi dung duoc khi trang o trang thai POST, khi trang o trang thai Get neu dung doi tuong nay se bao loi
    - De kiem tra xem cos bat duoc doi tuong $_POST hay khong -> su dung ham isset
    echo isset($_POST["hoten"]) ? $_pOST["hoten"] : "";
    $_POST["hoten"] doi tuong voi $_POST["hoten"] == true
    !$_POST["hoten"] tuong duong voi $_POST["hoten"] == false
    
    -->
<h1>Họ tên: <?php echo isset($_POST["hoten"]) ? $_POST["hoten"] : ""; ?> </h1>
<h1>Gioi tinh: <?php echo isset($_POST["gioi tinh"]) ? $_POST["gioi tinh"] : ""; ?> </h1>
<h1>Tinh: <?php echo isset($_POST["tinh"]) ? $_POST["tinh"] : ""; ?> </h1>