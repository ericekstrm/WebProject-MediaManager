<?php

class Home extends Controller {
    
    public function index($name = "") {
        $this->handleLogin();
        
        $model = $this->model("getMovies");
        $movies = $model->getTopMovies();
        
        $model = $this->model("getViews");
        $views = $model->getViewsByUser($_SESSION["userid"]);
        foreach ($views as $key => $view) {
            $views[$key] = $view["movieid"];
        }
            
        $data = ["movies" => $movies, "views" => $views];
            
        $this->view('home/index', $data);
    }
}
