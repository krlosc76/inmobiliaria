<?php

class vistaController{
	
	public function index(){
		require_once 'views/pages/home.php';
	}

    public function listado(){
        require_once 'views/pages/properties.php';

    }

    public function single(){
        require_once 'views/pages/single.php';

    }

   
	
    
}