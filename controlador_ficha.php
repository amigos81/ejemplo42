<?php
    include_once('basedatos.php');
    include_once('dompdf/autoload.inc.php');
    use Dompdf\Dompdf;

    class ficha{
        public $pdo;
        public function __CONSTRUCT(){
            $this-> pdo=basedatos::conexion();
        }
        public function vista_ficha_listar(){

        $sql=$this->pdo->prepare("select * from ficha");
        $sql->execute();
        $ficha=$sql->fetchAll(PDO::FETCH_OBJ);
        //print_r($sql->fetchAll(PDO::FETCH_OBJ));
        //return $sql->fetchAll(PDO::FETCH_OBJ);

            include_once ("vista_ficha_listar.php");
        }
        public function vista_ficha_crear(){
            include_once ("vista_ficha_crear.php");
        }
        public function vista_ficha_editar(){
            $sql=$this->pdo->prepare("select * from ficha where id_ficha=".$_REQUEST['id_ficha']);
            $sql->execute();
            $ficha=$sql->fetchAll(PDO::FETCH_OBJ);
            include_once ("vista_ficha_editar.php");
        }
        public function crear_guardar(){
            $sql=$this->pdo->prepare("insert into ficha(numero_ficha,fecha,descripcion,marca,tipo,edificio,responsable,cargo_responsable)values(
                "."'".$_REQUEST['numero_ficha']."'".",
                "."'".$_REQUEST['fecha']."'".",
                "."'".$_REQUEST['descripcion']."'".",
                "."'".$_REQUEST['marca']."'".",
                "."'".$_REQUEST['tipo']."'".",
                "."'".$_REQUEST['edificio']."'".",
                "."'".$_REQUEST['responsable']."'".",
                "."'".$_REQUEST['cargo_responsable']."'"."
                )");
            $sql->execute(); 
            $this->vista_ficha_listar();

        }
        public function ficha_eliminar(){
            $sql=$this->pdo->prepare("delete from ficha where id_ficha=".$_REQUEST['id_ficha']);
            $sql->execute();
            $this->vista_ficha_listar();
        }
        public function editar_guardar(){
            $sql=$this->pdo->prepare("
            update ficha set numero_ficha='".$_REQUEST['numero_ficha']."', 
                                fecha='".$_REQUEST['fecha']."',
                                descripcion='".$_REQUEST['descripcion']."',
                                marca='".$_REQUEST['marca']."',
                                tipo='".$_REQUEST['tipo']."',
                                edificio='".$_REQUEST['edificio']."',
                                responsable='".$_REQUEST['responsable']."',
                                cargo_responsable='".$_REQUEST['cargo_responsable']."'
                                where id_ficha=".$_REQUEST['id_ficha']);
    
            $sql->execute();
            $this->vista_ficha_listar();
        }
        public function imprimir_pdf(){
            $sql=$this->pdo->prepare("select * from ficha");
            $sql->execute();
            $ficha=$sql->fetchAll(PDO::FETCH_OBJ);
            include_once ("reporte_imprimir_pdf.php"); 

             $html = ob_get_clean();
             $dompdf = new Dompdf();
             $dompdf->loadHTML($html);
             ini_set("memory_limit" , "128M");
             set_time_limit(0);
             $dompdf->setPaper('A4','portrait');
             $dompdf->render();
             $pdf = $dompdf->output();
             $dompdf->stream("111", array("Attachment"=>false));
        }

        public function ficha_imprimir_registro(){
            $sql=$this->pdo->prepare("select * from ficha where id_ficha=".$_REQUEST['id_ficha']);
            $sql->execute();
            $ficha=$sql->fetchAll(PDO::FETCH_OBJ);
            include_once ("ficha_imprimir_registro.php"); 

             $html = ob_get_clean();
             $dompdf = new Dompdf();
             $dompdf->loadHTML($html);
             ini_set("memory_limit" , "128M");
             set_time_limit(0);
             $dompdf->setPaper('A4','portrait');
             $dompdf->render();
             $pdf = $dompdf->output();
             $dompdf->stream("111", array("Attachment"=>false));
        }
    }
    

?>