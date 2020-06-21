-Form:de gui de lieu tu trang nay qua trang khac

- Trong the form se co cacs the form-control
-Cau truc cua the form
<form action = "duong dan trang can submt den" method="post/get">
    cac the form control ben trong
<form>
- Lay du lieu theo kieu POST = $_POST["ten them form"]
-Lay du lieu theo kieu GET = $_GET["ten them form"]
- Ham $_SERVER["REQUSET_METHOD"] se tra ve trang thai cua trang
 - Khi truy cap vao mot trang, mac dinh trang thai cua trang la GET
 - khi an subnmit thi trang thai cuar trang se submit den la POST
 - Ham isset(doituong) se tra ve true neu doi tuong ton tai
- Array: mang trong php
    -Array bao gom 2 thanh phan
    - key: chi so cua aray. key chay tu 0 den n
    - value: la gia tri tuong ung phan tu thu key
    - Cac cach khai bao array
        -Cach1:
        $_bien = array();
         $_bien [0]= gia tri;
         $_bien [1]= gia tri;
         $_bien [1]= gia tri; -> khi do key se tu tang len 1
         - cach 2: khai bao va gan gia tri
         $bien = array(giatri1, giatri2...)
         cung co the su dung cach 1 de them gia tri o day
         - Cach 3: Co the dat ten cua key
            $bien = array(key1 => value1, key2 =>value2...)
     - Mot so ham su dung
        - Duyet cac phan tu cua array
        foreach($bien as $chiso=>$giatri){}
        foreach($bien as $giatri){}
        - Hien thi cau truc cua array:print_r($_bien);
        - Dem so luong phan tu trong array: count($bien)
        - Bien cac phan tu cua array thanh chuoi String: imploder(bien array, ky tu ghep vao sau moi phan tu)
        - Bien chuoi thanh cac phan tu cua array: exploder(bien aray, ky tu can cat)
        
        
