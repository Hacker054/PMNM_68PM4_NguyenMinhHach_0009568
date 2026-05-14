<?php
// Start session nếu cần
session_start();

// Require các file cấu hình hoặc autoload
require_once '../app/bridge.php'; 

// Khởi tạo đối tượng App để xử lý URL
$app = new App();