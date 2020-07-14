-Application
    Connection.php -> ket noi du lieu
-Backend
    Models
    Views
    Controllers
    index.php
-Fontend
    Models
    Views
    Controllers
    index.php
    
    
- MO hinh MVC
- Model -> Truy van lien quan den csdl thi dat o day
- Controller -> 
    - Tu view co the goi ham controller hoac o model deu duoc
    
    
    ----
Co 2 cach truy van theo PDo
    - Cach 1: su dung ham query-> truy van truc tiep
    query("select * from table whre id = $id)
    - Cach 2: su dung ham prepare de chuan bi du lieu, sau do su dung ham execute de truyen tham so
    $query = prepare("select * from table where id =:id);
    $querr->execute(array("id)=>giatri);
