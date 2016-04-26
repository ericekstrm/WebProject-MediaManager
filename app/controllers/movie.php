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
                $message = filter_input(INPUT_POST, "message", FILTER_SANITIZE_SPECIAL_CHARS);
                var_dump($model->addComment($imdbID, $message, $_SESSION["loggedIn"]));
            }
            
            //params
            $movie = $model->getMovie($imdbID)[0];
            $comments = $model->getComments($imdbID);
            $data = ["movie" => $movie, "comments" => $comments];
            
            $this->view("movies/movie", $data);
        }
    }
}
