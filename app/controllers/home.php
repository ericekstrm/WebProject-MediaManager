<?php

class Home extends Controller {
    
    public function index($name = "") {
        if (isset($_POST["login"])) {
            
            $this->login();
            
        } else if(isset($_POST["reg"])) {
            header("Location: /public/user/register");
            return;
        }
        
        $getMovies = $this->model("getMovies");
        $data = $data = $getMovies->getTopMovies();
            
        $this->view('home/index',$data);
    }
}
