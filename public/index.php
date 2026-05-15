<?php
// Start session nếu cần
session_start();

// Require các file cấu hình hoặc autoload
require_once '../app/core/App.php';
require_once '../app/controllers/Controller.php';

// Khởi tạo đối tượng App để xử lý URL
$app = new App();