<?php 

class Ajax extends Controller {
    
    public function index() {
        
    }
    
    //fult som fan,
    //borde inte ha det här som en controller 
    //eftersom det innebär att man kan surfa hit
    
    public function setseen($movie) {
        $user = $_SESSION["userid"];
        
        echo $user;
        echo $movie;
        
        $model = $this->model("getViews");
        $views = $model->getViewsByMovieAndUser($user, $movie);
        if (count($views) <= 0) {
            $model->addView($user, $movie);
        } else {
            
        }
    }
}
