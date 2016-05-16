<?php

class Tvshows extends Controller {
    
    public function index($imdbID = "") {
            
        $this->view("tvshows/index");
        
    }
}
