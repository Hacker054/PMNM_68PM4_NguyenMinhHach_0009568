<?php
// Tên class phải trùng với tên file và viết hoa chữ cái đầu (tùy cách bạn đặt)
class home extends Controller {
    
    public function index() {
        echo "Chào mừng bạn đến với trang chủ!";
    }

    public function test() {
        echo "Đây là hàm test trong Home Controller";
    }
}
?>