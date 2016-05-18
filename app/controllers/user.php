<?php

class User extends Controller {

    public function index($username = "") {
        $model = $this->model('getUsers');
        
        $this->handleLogin();

        //check if locking for specific user
        if (strcmp($username, "") !== 0) {
            $data = $model->getUserByName($username);
            //check if that user exist
            if (count($data) > 0) {
                $data = $data[0];
            } else {
                $this->view('user/message', "You are viewing a user that does not exist");
            }
        } else if (isset($_SESSION["loggedIn"])) {
            $data = $model->getUserByName($_SESSION["loggedIn"])[0];
        } else {
            $this->view('user/message', "You are not logged in so you can not see your profile");
        }

        $this->view('user/index', $data);
    }

    public function register() {
        $errors = [];

        if (isset($_POST["register"])) {
            $model = $this->model('getUsers');
            
            $user = filter_input(INPUT_POST, "user", FILTER_SANITIZE_SPECIAL_CHARS);
            $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_SPECIAL_CHARS);
            $pass = filter_input(INPUT_POST, "pass", FILTER_SANITIZE_SPECIAL_CHARS);
            $cpass = filter_input(INPUT_POST, "cpass", FILTER_SANITIZE_SPECIAL_CHARS);

            //check if username already exists
            if (count($model->getUserByName($user)) !== 0) {
                $errors = array_merge($errors, ["userTaken" => true]);
            }

            //check if passwords match
            if (strcmp($pass, $cpass) !== 0) {
                $errors = array_merge($errors, ["passNoMatch" => true]);
            }

            //check if email is valid
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors = array_merge($errors, ["emailInvalid" => true]);
            }

            //check if email already exists
            if (count($model->getUserByEmail($email)) !== 0) {
                $errors = array_merge($errors, ["emailTaken" => true]);
            }

            if (count($errors) === 0) {
                $model->addUser($user, $email, password_hash($pass, PASSWORD_DEFAULT));
                $this->view("user/message" , "You are now registered");
                return;
            }
        }
        $this->view('user/register', $errors);
    }
}
