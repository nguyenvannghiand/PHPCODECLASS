- Sinhvien -> chi mot tap trung cac doi tuong sinh vien. Trong tap trung nay se co cac doi tuong cu the.
Tap trung nay goi la class
    -> Vay class la danh tu chi tap chung cac doi tuong
    - Class khai bao nhu sau
        class ten{
              khoitaobien(thuoc tinh)
              khoitaoham(phuong thuc)
            }
    - Muon truy cap vao tap chung nay thi phai tao mot doi tuong cu the.
    Cau truc : $doituong =  new tenClass();
  - Mot so thanh phan trong class:
    -Ham tao: la ham tu dong goi khi doi tuong duoc khoi tao
        pulic__contruct(){}
    -Ham huy: la ham tu dong goi truoc khi ket thuc class
        public function__destruct(){}
  - Ke thua
    - Class B ke thua ClassA thi ClassB co the su dung duoc cac ham, cac ien trong ClassA(tuy thuoc vao tam vuc cua bien)
    - Cu phap
        class B extends A{}
    _ Tam vuc cua bien
        -publid
            -Tu doi tuong ngoai tac dong vao duoc
            -Tu class ke thua tac dong duoc
            -Trong chinh class do tac dong duoc
        -protected:
            - Tu doi tuong ngoai khong tac dong vao duoc
            - Tu cac ke thua tac dong duoc
            - trong chinh class tac dong duoc
        -private:
            - Tu doi tuong ngoai khong tac dong vao duoc
            - Tu cac ke thua khong tac dong duoc
            - trong chinh class tac dong duoc
  - Load noi dung cua mot file khac vao file hien tai
    -inclue "tenfile.php"
    -inclue_once "tenfile.php"
    -require "tenfile.php"
    -require_once "tenfile.php"
  - Khong duoc khai bao ten ham, ten class trung nhau
  - Tu khoa namespace su dung de ngan cac cac class trung ten nhau
  