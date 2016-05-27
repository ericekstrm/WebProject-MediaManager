<?php

class Movie extends Controller {
    
    public function index($imdbID = "") {
        $model = $this->model("getMovies");
        
        $this->handleLogin();
        
        //if no movie is selected
        if (strcmp($imdbID,"") === 0) {
            $movies = $model->getAllMovies();
            $model = $this->model("getViews");
            $views = $model->getViewsByUser($_SESSION["userid"]);
            foreach ($views as $key => $view) {
                $views[$key] = $view["movieid"];
            }
            
            $data = ["movies" => $movies, "views" => $views];
            
            $this->view("movies/index", $data);
        } else {
            
            //if a comment should be added
            if (isset($_POST["submit"])) {
                $message = filter_input(INPUT_POST, "message", FILTER_SANITIZE_SPECIAL_CHARS);
                if (strcmp($message, "") !== 0) {
                    $model->addComment($imdbID, $message, $_SESSION["loggedIn"]);
                }
                header("Location: #");
            }
            
            if (isset($_SESSION["loggedIn"])) {
                $model = $this->model("getViews");
                $view = $model->getViewsByMovieAndUser($_SESSION["userid"], $imdbID);
                if (count($view) > 0) {
                    $view = true;
                } else {
                    $view = false;
                }
            }
            
            //params
            $model = $this->model("getMovies");
            $movie = $model->getMovie($imdbID)[0];
            $comments = $model->getComments($imdbID);
            $data = ["movie" => $movie, "comments" => $comments, "view" => $view];
            
            $this->view("movies/movie", $data);
        }
    }
}
