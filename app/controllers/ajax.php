<?php 

class Ajax extends Controller {
    
    public function index() {
        
    }
    
    public function setseen($movie) {
        $user = $_SESSION["loggedIn"];

        echo $movie;
        echo $user;
        
        $model = $this->model("getViews");
        $model->addView($user, $movie);
    }
}
