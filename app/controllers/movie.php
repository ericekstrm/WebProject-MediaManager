<?php

class Movie extends Controller {
    
    public function index($imdbID = "") {
        $model = $this->model("getMovies");
        
        
        if (strcmp($imdbID,"") === 0) {
            //if no movie is selected
            $data = $model->getAllMovies();
            $this->view("movies/index", $data);
        } else {
            
            if (isset($_POST["submit"])) {
                $model->addComment();
            }
            
            //params
            $movie = $model->getMovie($imdbID)[0];
            $comments = $model->getComments($imdbID);
            $data = ["movie" => $movie, "comments" => $comments];
            
            $this->view("movies/movie", $data);
        }
    }
}
