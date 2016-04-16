<?php

class Controller {

    public function model($model) {
        require_once '../app/models/' . $model . '.php';
        return new $model();
    }

    public function view($view, $data = []) {
        require_once '../app/views/' . $view . '.php';
    }

    public function login() {
        $model = $this->model('getUsers');
        $user = $model->getUserByName($_POST["user"]);
        if (password_verify($_POST["pass"], $user["password"])) {
            $_SESSION["loggedIn"] = $user["username"];
        }
    }
}
