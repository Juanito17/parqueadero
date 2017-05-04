<?php


class adminController{

    private $model;
    public function __construct() {
        try {
          $this->model= new index();    
        } catch (Exception $e) {
            die($e->getMessage());
        }
    } 	
	
	public function queryprogram(){
        require_once('views/all/header.php');
        require_once('views/all/banner.php');
        require_once('views/all/navbar.php');
        require_once('views/admin/programformation.php');
        require_once('views/all/footer.php'); 
        
    }
    public function queryregistrys(){
        require_once('views/all/header.php');
        require_once('views/all/banner.php');
        require_once('views/all/navbar.php');
        require_once('views/admin/registrys.php');
        require_once('views/all/footer.php');   
    }
    public function queryvehicles(){
        require_once('views/all/header.php');
        require_once('views/all/banner.php');
        require_once('views/all/navbar.php');
        require_once('views/admin/vehicles.php');
        require_once('views/all/footer.php');   
    }
    public function queryusers(){
        require_once('views/all/header.php');
        require_once('views/all/banner.php');
        require_once('views/all/navbar.php');
        require_once('views/admin/users.php');
        require_once('views/all/footer.php');   
    }
    public function querydisponibily(){
        require_once('views/all/header.php');
        require_once('views/all/banner.php');
        require_once('views/all/navbar.php');
        require_once('views/admin/disponibily.php');
        require_once('views/all/footer.php');   
    }
    public function queryHistory(){
        require_once('views/all/header.php');
        require_once('views/all/banner.php');
        require_once('views/all/navbar.php');
        require_once('views/admin/history.php');
        require_once('views/all/footer.php');   
    }
    public function queryhours(){
        require_once('views/all/header.php');
        require_once('views/all/banner.php');
        require_once('views/all/navbar.php');
        require_once('views/admin/hours.php');
        require_once('views/all/footer.php');   
    }
    public function queryadmin(){
        require_once('views/all/header.php');
        require_once('views/all/banner.php');
        require_once('views/all/navbar.php');
        require_once('views/admin/admins.php');
        require_once('views/all/footer.php');   
    }
    public function queryproblems(){
		require_once('views/all/header.php');
        require_once('views/all/banner.php');
        require_once('views/all/navbar.php');
        require_once('views/admin/problems.php');
        require_once('views/all/footer.php'); 	
	}
}



