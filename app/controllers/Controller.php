<?php
class Controller {
    // Sau này bạn sẽ thêm các hàm loadModel, renderView ở đây
    public function model($model) {
        require_once '../app/models/' . $model . '.php';
        return new $model;
    }

    public function view($view, $data = []) {
        require_once '../app/views/' . $view . '.php';
    }
}
?>