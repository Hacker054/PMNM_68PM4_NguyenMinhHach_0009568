<?php
    require_once '../app/core/App.php';
    session_start();
    require_once '../app/middleware.php';
    $middleware = new middleware();
    $middleware->checklogin();
$app = new App();
?>