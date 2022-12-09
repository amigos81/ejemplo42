<?php
class basedatos{
    public static function conexion (){
        $pdo=new PDO('mysql:host=localhost; dbname=bd_ficha;charset=utf8','root','');
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }

}
?>