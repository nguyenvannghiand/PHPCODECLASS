-Insert
    - insert into table_name set colum1=value1, column2 = value2
     - insert into table_name set (colum1, column2)(value1, value2)
            INSERT INTO monhoc SET tenmonhoc = "C++"
            INSERT INTO monhoc(tenmonhoc) VALUES("Python")
            
-Update
    - update table_name set column1=value1, column2=value2... where...
    - chu y: neu khong co dieu kien where thi toan bo cac ban ghi se update cung 1 gia tri
        UPDATE monhoc SET tenmonhoc = "HTML" WHERE id=6
-Delete
    - delete from table_name where ...
    - Chu y : neu khong co dk where thi toan bo cac ban ghi se bi xoa
- Su dung PDO de ket noi csdl
    - Ket noi csdl, tra ket qua ve bien ket noi(se dung bien ket noi nay de thao tac csdl o cac chuc nang cua PHp)
    $connection = new PDO("mysql:host=ten_server_mysql;dbname=tendatabase", username, password);
    - mac dinh du lieu lay ra theo kieu ko phai unicode, vi vay du lieu la tieng viet khi hien thi se bi loi font.THuc hien dong lenh
    sau de lay du lieu theo kieu unicode
    	$connection->exec("set names utf8");
    - Khi co kq tra ve, dat che do de duyet cac ban ghi
        - Liet ke ban ghi theo kieu object
            $connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        - Liet ke ban ghi theo keu array
            $connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ARRAY);
    - cac kieu truyen cau lenh sql de vao ra du lieu
        - Cach 1
            $query = $connection->query(cau lenh sql);
        - Cach 2
            $query = $connection->prepare(cau lenh sql);
            $query->execute(array chua danh sach cac tham so);
        - Khi da co ket qua tra ve
            -Lay tatt cac cac ban ghi
                $result = $query->fetchAll();
            - Lay mot ban ghi
                $result = $query->fetch();
            -Dem co bao nhieu ban ghi tra ve
                $result->rowCount()
                
- Mo hinh MVC
    - Bao gom 3 thanh phan
        - Model: la thanh phan thao tac csdl, chua cac ham de vao ra du lieu
        - Controller: la thanh phan dieu khien, se lau du lieu tu model va truyen ra view
        - View: la thanh phan hien thi du lieu
    - Tren website se co nhieu chuc nang, ,moi chuac nang se tuong duong voi 1 MVc. De goi MVC chi can
    inclue file controller, file se co trach nhiem thuc hien cac viec con lai de du lieu co the hien thi len
         