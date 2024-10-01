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
            if($update){
                $_SESSION['tipo_actualizado'] = 'completed';   
            }else{
                $_SESSION['tipo_actualizado'] = 'failed';  
            }
        }else{
            $_SESSION['tipo_actualizado'] = 'failed';  
        }
        header("location:".base_url.'admin/tipo');
    }
    public function eliminar(){
        if(isset($_SESSION['administrador'])){
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                $tipo = new Tipo();
                $tipo->setId($id);
                
                $delete = $tipo->delete();
                if($delete){
                    $_SESSION['delete_tipo'] = 'complete';
                }else{
                    $_SESSION['delete_tipo'] = 'failed';
                }
            }else{
                $_SESSION['delete_tipo'] = 'failed';
            }
            
            header('Location:'.base_url.'admin/tipo');
        }else{
            header("location:".base_url);
            exit();
        }
	
    }
}