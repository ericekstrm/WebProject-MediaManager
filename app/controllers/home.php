<?php

class Home extends Controller {
    
    public function index($name = "") {
        $this->handleLogin();
        
        $getMovies = $this->model("getMovies");
        $data = $data = $getMovies->getTopMovies();
            
        $this->view('home/index',$data);
    }
}
