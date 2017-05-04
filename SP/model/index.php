<?php
  class index{
    private $pdo;
    public function __construct() {
      try {
        $this->pdo= Database::Conexion();   
      }
      catch (Exception $e) {
        die($e->getMessage());
      }
    }
   //consultar los datos con el pdo 
    public function consulta($tabla,$columnas,$condiciones){
      try {
        $stm=$this->pdo->prepare("SELECT $columnas FROM $tabla WHERE $condiciones");
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_OBJ);
      }
      catch(Exception $e) {
        die($e->getMessage());
      }
    }
    //Insertar datos  a la base de datos
    public function insertar($tabla,$columnas,$valores){
      try {
        $stm=$this->pdo->prepare("INSERT INTO $tabla ($columnas) VALUES($valores)");
        $stm->execute();
      }
      catch (Exception $e) {
        die($e->getMessage());
      }
    }
    //Insertar datos  a la base de datos
    public function eliminar($tabla,$condiciones){
      try {
        $stm=$this->pdo->prepare("DELETE FROM $tabla WHERE $condiciones");
        $stm->execute();
      }
      catch (Exception $e) {
        die($e->getMessage());
      }
    }
  }
?>
