<?php
extract($_POST);
foreach ($this->model->consulta("usuarios","documento,nombre,apellido,correo","1") as $resultado){
        $resultado->documento; 
        $resultado->nombre;
        if ($resultado->documento === $user_login) {
        	exit("usuario existente");
        }
}
?>
