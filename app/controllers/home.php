<?php

class Home extends Controller {
    
    public function index($name = "") {
        $this->handleLogin();
        
        $model = $this->model("getMovies");
        $data = $model->getTopMovies();
            
        $this->view('home/index', $data);
    }
}
