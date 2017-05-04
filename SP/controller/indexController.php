<?php


class indexController{

    private $model;
    
    public function __construct() {
        try {
          $this->model= new index();    
        } catch (Exception $e) {
            die($e->getMessage());
        }
    } 	
	
	public function index(){
		
		require_once('views/all/header.php');
        require_once('views/all/banner.php');
		require_once('views/all/navbar.php');
		require_once('views/all/carousel.php');
		require_once('views/index/index.php');
		require_once('views/all/footer.php');
	}
}

