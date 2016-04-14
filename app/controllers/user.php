<?php

class User extends Controller {

    public function index($username = "") {
        echo "hello";

        $getUser = $this->model('getUsers');
        $data = $getUser->getAllUsers();

        $this->view('user/index', $data);
    }

    public function register() {
        if (isset($_POST["user"])) {
            $getUser = $this->model('getUsers');
            $user = filter_input(INPUT_POST, "user", FILTER_SANITIZE_SPECIAL_CHARS);
            $email = filter_input(INPUT_POST, "user", FILTER_VALIDATE_EMAIL);
            $pass = filter_input(INPUT_POST, "user", FILTER_SANITIZE_SPECIAL_CHARS);
            $cpass = filter_input(INPUT_POST, "user", FILTER_SANITIZE_SPECIAL_CHARS);

            if ($getUser->getUser($user) !== null) {
                echo "fuck";
                return;
            }

            if (strcmp($pass, $cpass) !== 0) {
                echo "more fuck";
                return;
            }

            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)) {
                echo "ffs";
                return;
            }
        }

        $this->view('user/register');
    }
}
