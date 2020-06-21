- Cookie ton tai phia client (trong thu muc cookie cua moi trinh duyet)
    - khai bao cookie: setcookie("tenbien", thoi gian ton tai)
    - Thoi gian ton tai duoc tinh nhu sau
        - hamtime() tra ve mot so nguyen tinh thoiw gian hien tai
            -time() + sogiay= thoi gian ton tai
         VD: setcookie("tenbien","giatri",time()+60) -> cookie nay ton tai trong 60giay, sau 60 giay cookie nay se tu dong xoa
    -Truy xuat bien cookie: $_COOKIE["tenbien];
    -Hien thi tat ca cac cookie ton tai tren trinh duyet:
    print_r($_COOKIE)
    - Xoa cookie: cho thoigiantontai = thoi gian hien tai la cookie nay se tu dong xoa
- Pham vi cua bien
    - Bien cuc bo -> Ton tai tren mot trang cua trinh duyet
    - Bien toan cuc -> Ton tai tren mot trang cua trinh duyet
    - Bien session: ban chat giong bien cuc bo hoac bien toan cuc.
    Khac: ton tai tren nhieu trang(nhieu tab) thuoc cung mot trinh duyet
        -sesion_id() se hien thi id cua bien session
            - moi lan khoi dong trinh duyet se co mot session id khac nhau
            - cac trinh duyet khac nhau se co sesion id khac nhau
        - Khai bao bien session: $_SESSION["tenbien] = giatri
        - truy xuat bien session: $_SESSION["tenbien]
        - Huy bien session: unset($_SESSION["tenbien]);
        - cac kieu du lieu cua bien session
            -Kieu interger, float, string, boolean, object
            - kieur array: 
                    $_SESSION["tenbien"] = array();
                    $_SESSION["tenbien"] = array("giatri1","giatri2"...);
                    $_SESSION["tenbien"] = array("key1"=>"value1", "key2"=>"value2");
                    
                   - truy xuat bien array
                    $_SESSION["tenbien"][chiso] = giatri
                    $_SESSION["tenbien"][tenkey] = giatri
        - Muon su dung duoc bien session tren nhieu trang thi truoc khi khoi tao bien phai start session bang ham
        session_start(). Neu khong co ham nay thi bien session chi tuong duong voi bien toan cuc, co nghia la bien nay
        chi ton tai tren mot trang
        
        
