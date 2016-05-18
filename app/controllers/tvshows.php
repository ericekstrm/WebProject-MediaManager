<?php

class Tvshows extends Controller {
    
    public function index($imdbID = "") {
        
        $this->handleLogin();
            
        $this->view("tvshows/index");
        
    }
}
