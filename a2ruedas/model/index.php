<?php



class index{
    
    private $pdo;
    
    public function __construct() {
        try {
          $this->pdo= Database::Conexion();   
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function consulta(){
        
        try {
            $stm=$this->pdo->prepare("SELECT * FROM usuarios");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
            
        } catch (Exception $e) {
            die($e->getMessage());
        }
        
    }
    
    
        public function consulta_documento($documento){
        
        try {
            $stm=$this->pdo->prepare("SELECT * FROM usuarios WHERE documento='$documento'");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
            
        } catch (Exception $e) {
            die($e->getMessage());
        }
        
    }
    
      public function insertar($documento,$nombre,$apellido,$correo){
        
        try {
            $stm=$this->pdo->prepare("INSERT INTO usuarios(documento,nombre,apellido,correo)VALUES('$documento','$nombre','$apellido','$correo')");
            $stm->execute();
            //return $stm->fetchAll(PDO::FETCH_OBJ);
            
        } catch (Exception $e) {
            die($e->getMessage());
        }
        
    }
    
  public function consulta_like(){
    
      try {
            $stm=$this->pdo->prepare("SELECT * FROM usuarios WHERE documento='$documento'");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
            
        } catch (Exception $e) {
            die($e->getMessage());
        }
    
}
    
    
    
    
    
   
    
}


?>
