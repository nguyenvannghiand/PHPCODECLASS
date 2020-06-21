<!--
	-khi action cua form la action = get thi toan bo cac the form contro, ben trong the form se truyen het len url theo cau truc
	tentrang.php?bien1=giatri1&bien2=giatri2...
		- sau dau? la danh sach cac bien
		- Cac bien thu hien theo cau truc: bien1= gia tri1&bien2=giatri2.... -> cac bien = giatri cac nhau boi dau &
-->
<fieldset style="width: 300px; margin: auto">
    <legend>Form GET du lieu</legend>
    <h1>Trang thai trang: <?php echo $_SERVER["REQUEST_METHOD"]; ?></h1>
    <!--	Khong co thuoc tinh method thi mac dinh trang se submit theo kieu get-->
    <!--	Khong co thuoc tinh action thi mac dinh trang se submit den trang hien tai-->
    <form >
		<table>
			<tr>
				<td>Ho ten</td>
				<td><input type="text" name="hoten" required></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="email" name="email" required></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="btn" value="Gui du lieu"></td>
			</tr>
		</table>
	</form>
	<h1>hoten: <?php echo isset($_GET["hoten"]) ? $_GET["hoten"] : ""; ?></h1>
	<h1>Email: <?php echo isset($_GET["email"]) ? $_GET["email"] : ""; ?></h1>
</fieldset>
