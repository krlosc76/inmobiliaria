<?php
require_once 'models/caracteristica-interna.php';

class CaracteristicaintController{
    public function index(){
        echo 'caracteristicas internas controller';
    }
    public function crear(){
      
        if(isset($_POST)){
        $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
        if($nombre){
            $caracteristica = new Caracteristica_interna;
            $caracteristica->setCaracteristica($nombre);
            $insert = $caracteristica->insert();
            if($insert){
                $_SESSION['caracteristica_int'] = 'completed';
            }else{
                $_SESSION['caracteristica_int'] = 'failed';
            }
        }else{
            $_SESSION['caracteristica_int'] = 'failed';
        }
        }else{
            $_SESSION['caracteristica_int'] = 'failed';
        }
        header("location:".base_url.'admin/caracteristicaInterna');
        exit();
    }
    public function actualizar(){
        if(isset($_POST) && isset($_GET['id'])){
            $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
            $id = $_GET['id'];
            $caracteristica = new Caracteristica_interna();
            $caracteristica->setId($id);
            $caracteristica->setCaracteristica($nombre);
            $update = $caracteristica->actualizar();
            if($update){
                $_SESSION['caracteristicaint_actualizado'] = 'completed';   
            }else{
                $_SESSION['caracteristicaint_actualizado'] = 'failed';  
            }
        }else{
            $_SESSION['caracteristicaint_actualizado'] = 'failed';  
        }
        header("location:".base_url.'admin/caracteristicaInterna');
    }
    public function eliminar(){
        if(isset($_SESSION['administrador'])){
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                $caracteristica = new Caracteristica_interna();
                $caracteristica->setId($id);
                
                $delete = $caracteristica->delete();
                if($delete){
                    $_SESSION['delete_caracteristicaint'] = 'complete';
                }else{
                    $_SESSION['delete_caracteristicaint'] = 'failed';
                }
            }else{
                $_SESSION['delete_caracteristicaint'] = 'failed';
            }
            
            header('Location:'.base_url.'admin/caracteristicaInterna');
        }else{
            header("location:".base_url);
            exit();
        }
	
    }
}