<?php
class registryController{
	
     private $model;
    
    public function __construct() {
        try {
          $this->model= new index();    
        } catch (Exception $e) {
            die($e->getMessage());
        }
    } 		
    
    public function registro(){
        require_once('views/all/header.php');
        require_once('views/all/banner.php');
		require_once('views/all/navbar.php');
		require_once('views/registro/registro.php');
		require_once('views/all/footer.php'); 
    }
}