<?php
class Controller {
    public function loadView($viewName, $data = []) {
        extract($data);
        require_once "../app/views/" . $viewName . ".php";
    }

    public function loadModel($modelName) {
        require_once "../app/models/" . $modelName . ".php";
        return new $modelName();
    }
}
?>