<?php
require_once 'models/tipo.php';

class TipoController{
    public function index(){
        echo 'tipo controller';
    }
    public function crear(){
        if(isset($_POST)){
        $nombre = isset($_POST['tipo']) ? $_POST['tipo'] : false;
        if($nombre){
            $tipo = new Tipo;
            $tipo->setTipo($nombre);
            $insert = $tipo->insert();
            if($insert){
                $_SESSION['tipo'] = 'completed';
            }else{
                $_SESSION['tipo'] = 'failed';
            }
        }else{
            $_SESSION['tipo'] = 'failed';
        }
        }else{
            $_SESSION['tipo'] = 'failed';
        }
        header("location:".base_url.'admin/tipo');
        exit();
    }
    public function actualizar(){
        if(isset($_POST) && isset($_GET['id'])){
            $tipo = isset($_POST['tipo']) ? $_POST['tipo'] : false;
            $id = $_GET['id'];
            $type = new Tipo();
            $type->setId($id);
            $type->setTipo($tipo);
            $update = $type->actualizar();
        }
        header("location:".base_url.'admin/tipo');
    }
}