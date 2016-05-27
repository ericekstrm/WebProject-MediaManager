<?php

class Controller {

    public function model($model) {
        require_once '../app/models/' . $model . '.php';
        return new $model();
    }

    public function view($view, $data = []) {
        require_once '../app/views/' . $view . '.php';
    }
    
    public function handleLogin() {
        if (isset($_POST["login"])) {
            $model = $this->model('getUsers');
            $user = $model->getUserByName($_POST["user"])[0];
            if (password_verify($_POST["pass"], $user["password"])) {
                $_SESSION["loggedIn"] = $user["username"];
                $_SESSION["userid"] = $user["id"];
                header("location: /public/");
            }
        } else if(isset($_POST["reg"])) {
            header("Location: /public/user/register");
        } else if (isset($_POST["logout"])) {
            session_destroy();
            header("Location: /public/");
        }
    }
}
