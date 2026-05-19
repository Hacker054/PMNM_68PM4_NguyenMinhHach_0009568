<?php
class sinhvien {
public function index() {
        echo "Day la danh sach sinh vien";
        // trả về view
        require_once '../app/views/sinhvien/index.php';
}

public function create() {
        echo "Day la trang tao moi sinh vien";
        // trả về view
        require_once '../app/views/sinhvien/create.php';
}
}
?>