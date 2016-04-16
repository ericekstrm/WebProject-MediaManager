<?php

class User extends Controller {

    public function index($username = "") {
        echo "hello";

        $getUser = $this->model('getUsers');
        $data = $getUser->getAllUsers();

        $this->view('user/index', $data);
    }

    public function register() {
        $errors = [];

        if (isset($_POST["register"])) {
            $model = $this->model('getUsers');

            //check if username already exists
            if (count($model->getUserByName($_POST["user"])) !== 0) {
                $errors = array_merge($errors, ["userTaken" => true]);
            }

            //check if passwords match
            if (strcmp($_POST["pass"], $_POST["cpass"]) !== 0) {
                $errors = array_merge($errors, ["passNoMatch" => true]);
            }

            //check if email is valid
            if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
                $errors = array_merge($errors, ["emailInvalid" => true]);
            }

            //check if email already exists
            if (count($model->getUserByEmail($_POST["email"])) !== 0) {
                $errors = array_merge($errors, ["emailTaken" => true]);
            }

            if (count($errors) === 0) {
                $model->addUser($_POST["user"], $_POST["email"], password_hash($_POST["pass"], PASSWORD_DEFAULT));
                $this->view("user/registered");
                return;
            }
        }
        $this->view('user/register', $errors);
    }

}
