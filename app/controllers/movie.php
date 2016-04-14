<?php

class Movie extends Controller {
    
    public function index($imdbID = "") {
        $getMovies = $this->model("getMovies");
        
        if (strcmp($imdbID,"") === 0) {
            $data = $getMovies->getAllMovies();
            $this->view("movies/index", $data);
        } else {
            $data = $getMovies->getMovie($imdbID);
            $this->view("movies/movie", $data);
        }
    }
}
