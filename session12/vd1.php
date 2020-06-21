<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<fieldset style="width:300px;margin: auto">
    <legend>Trạng thái trang:<?php echo $_SERVER["REQUEST_METHOD"]; ?></legend>
    <form action="vd1_post.php" method="post">
        <table>
            <tr>
                <td>Họ tên</td>
                <td><input type="text" name="hoten" required></td>
            </tr>
            <tr>
                <td>
                    Giới tính
                </td>
                <td>
                    <input type="radio" name="gioitinh" value="nam" checked>Nam
                    <input type="radio" name="gioitinh" value="nu">Nữ
                </td>
            </tr>
            <tr>
                <td>Tỉnh</td>
                <td>
                    <select name="tinh" id="tinh">
                        <option value="Hà Nội">Hà Nội</option>
                        <option value="HCM">HCM</option>
                        <option value="Hà Nam">Hà Nam</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Submit">
                </td>
            </tr>
        </table>
    </form>
</fieldset>
</body>

</html>