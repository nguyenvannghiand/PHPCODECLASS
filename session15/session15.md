- He quan tri co so du lieu su dung de luu tru du lieu
- De thao tac voi co so du lieu, su dung trinh quan ly phpmyadmin
- He quan tri csdl chu nhieu database, moi database phuc vu mot cong viec khac nhau. Cau truc cua database bao gom
    - Database
        - Bang
            - Cot (field): ghi ten cac truong hien thi
            - Hang (ban ghi- record): chua du lieu
        - Cac kieu du lieu khi tao cot
   
            - int: kieu so nguyen
            - varchar: kieu ky tu. do len<= 4000 ky tu
            - text: kieu ky tu
            - date: kieu du lieu ngay thang (nam/thang/ngay)
            -chu y: voi kieu du lieu varchar, txt, date thi gai tri phai co day nhay bao quanh luc truy van
            - Khoa
                -Khoa chinh:thanh phan too tai duy nhat. co nghia la a1 thi tat cac cac gia tri ban ghi ko ddc trung 
                voi khoa ngoai
                -Ai(autoi increment)
                - Khoa ngoai: la mot cot cua nang A cung kieu du lieu voi cot khao chinh cua bangB, su dung de khop noi cac bang
- Truy van sql
    -Ghi chu: su dung ki hieu # dau dong ghi chu
    - Liet ke ban ghi
        select * from tenbang -> * co nghia la hien thi tat cac cac cot 
        select cot1, cot2... from tenbang -> liet ke cac cot cu the
        select cot1 as ten1, cot2 as ten... from tenbang -> dat ten cot hien thi
    - Dieu kien WHERE 
        - where tencot sosanh giatri
            -sosanh
                -> lon hon
                >= lon hon hoac bang
                < nho hon
                <= nho hon hoac bang
                = so sanh bang(chu y: php la 2 dau bang, msql chi 1 dau bang)
                <> so sanh khac nhau
            - gia tri
                - kieu int, float thi gia tri la so. VD: 1,2,2.2...
                - kieu varchar, text, date thi gia tri co dau nhay bao quanh. VD "Nguyen Van A", "1990-5-6"   
        - where tencot in (giatri1, giatri1...) -> chon lua ket qua nam trong tap gia tri
        - where tencot not in (giatri1, giatri1...) -> chon lua ket qua khong nam trong tap gia tri
        - where tencot like "%giatri" -> ket thuc bang gia tri
        - where tencot like "giatri%" -> bat thuc bang gia tri
        - where tencot like "%giatri%" -> co chua gia tri
        - gia tri co the la ket qua cua truy van con
            - truy van con: la cau lenh truy van binh thuong su dung de tra ve kq nham doi khop voi du lieu trong cau lenh chinh
            VD.tim cac sinh vien hoc lop PHP 
            SELECT * FROM sinhvien WHERE malop = (SELECT id FROM monhoc WHERE tenmonhoc = "PHP")
            - neu truy van con co nhieu hon 1 kq thi dung in hoac not in
            SELECT * FROM sinhvien WHERE malop IN (SELECT id FROM monhoc WHERE tenmonhoc)
            - Truy van dung join cac bang
            SELECT hoten,ngaysinh,quequan,(SELECT tenmonhoc FROM monhoc WHERE monhoc.id = sinhvien.mamonhoc) AS "tenmonhoc" FROM sinhvien
            
        - Mot so ham uoc luong
           - min(tencot) -> lay gia tri nho nhat thuoc tencot
           - max(tencot) -> lay gia tri lon nhat thuoc tencot
           - avg(tencot) -> lay gia tri trung binh cua tencot
           - sum(tencot) -> tinhtong
           - count(tencot) -> dem so luong ban ghi
        - Tu khoa group by -> tinh gia tri chung can 1 block
            Vi du:
                tinh tong so sinh vien 
                SELECT COUNT(id) FROM sinhvien
                tinh tong so sinh vien phan theo mon hoc
                SELECT COUNT(id) FROM sinhvien GROUP BY mamonhoc
         - Order by tencot asc -> sap xep ten cot tang dan
            SELECT * FROM `sinhvien` ORDER BY ngaysinh ASC
         - Order by tencot desc -> sap xep ten cot giam dan
         - Limit tu_ban_ghi_nao, lay_bao_nhieu_ban_ghi
            -ban ghi dau tien la ban ghi th 0 -> tu_ban_ghi_bao = 0
                SELECT * FROM `sinhvien` LIMIT 0,1
         - Mot so ham ve thoi gian
            - now()-> tra ve thoi gian hien tai
                SELECT now()
            - year(tencot) -> tra ve nam
            - month(tencot) -> tra ve thang
            - day(tencot) -> tra ve ngay
            SELECT hoten, (SELECT year(now()) - year(ngaysinh)) as "tuoi" FROM sinhvien
        - inner join
         select * from bang1 inner join bang2 on bang1.tencot = bang2.tencot where ... group by ... order by ...limit...
        - left join
         select * from bang1 left join bang2 on bang1.tencot = bang2.tencot where ... group by ... order by ...limit...
        - right join
         select * from bang1 right join bang2 on bang1.tencot = bang2.tencot where ... group by ... order by ...limit...
         vi du
         SELECT * FROM monhoc INNER JOIN sinhvien ON monhoc.id = sinhvien.mamonhoc
         SELECT * FROM monhoc LEFT JOIN sinhvien ON monhoc.id = sinhvien.mamonhoc
            