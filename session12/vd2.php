<fieldset style="width: 300px; margin: auto">
    <legend>Trang thai trang: <?php echo $_SERVER["REQUEST_METHOD"];?></legend>
    <!--	Neu trong thuoc tinh action khong khi ten trang can submit den trang nay se submit lai chinh no khi an submit-->
    <!--	Trong the form: thuoc tinh onsubmit = "true  thi fomr moi submit duoc, con neu onsubmit =" return false" thi form khong submit -->
    <!--    <form method="post" action="" onsubmit="return true">-->
    <script type="text/javascript">
        function checkForm() {
            return true;

        }
    </script>
    <form method="post" action="" onsubmit="return checkFrom()">
        <!--		 Thuoc tinh required bat buoc phai nhap thong tin moi submit duoc-->
        <!--		thuoc tinh placehoder de ghi chu thich cho o textbox-->
        <input type="text" name="txt" required placeholder="Nhap noi dung">
        <!--		Phai co nut nay thi form moi submit duoc-->
        <input type="submit" value="submit">
    </form>
    <h1>Trang thai trang: <?php echo $_SERVER["REQUEST_METHOD"];?></h1>
</fieldset>
<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$txt = $_POST["txt"];
		echo "<h1 style='text-align: center'>$txt</h1>";
	}
?>
