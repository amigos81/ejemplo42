<?php
if(isset($_REQUEST['controlador']) and isset($_REQUEST['funcion'])){
    $controlador=$_REQUEST['controlador'];
    $funcion=$_REQUEST['funcion'];
    include_once('controlador_'.$controlador.'.php');
    $controlador=new $controlador;
    call_user_func([$controlador,$funcion]);
}else{
    include_once('controlador_principal.php');
    $obj=new principal();
    $obj->vista_principal();
}
?>