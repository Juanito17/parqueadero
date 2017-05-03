<?php
require_once 'core/core.php';
if(!isset($_REQUEST['clase'])){
    $controller="index";
    require_once ('controller/'.$controller.'Controller.php');
    $controller=$controller.'Controller';
    $controller=new $controller();
    $controller->index();
}else{
    
    $controller=$_REQUEST['clase'];
    require_once ('controller/'.$controller.'Controller.php');
    $controller=$controller.'Controller';
    $controller=new $controller();
    $metodo=isset($_REQUEST['metodo']) ? $_REQUEST['metodo'] : 'index';
    call_user_func(array($controller,$metodo));
    
}

?>