<?php
require_once 'models/caracteristica-externa.php';

class CaracteristicaexController{
    public function index(){
        echo 'caracteristicas externas controller';
    }
    public function crear(){
        if(isset($_POST)){
        $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
        if($nombre){
            $caracteristica = new Caracteristica_externa;
            $caracteristica->setCaracteristica($nombre);
            $insert = $caracteristica->insert();
            if($insert){
                $_SESSION['caracteristica_ex'] = 'completed'; 
            }else{
                $_SESSION['caracteristica_ex'] = 'failed';
            }
        }else{
            $_SESSION['caracteristica_ex'] = 'failed';
        }
        }else{
            $_SESSION['caracteristica_ex'] = 'failed';
         
        }
        header("location:".base_url.'admin/caracteristicaExterna');
        exit();
    }
    public function actualizar(){
        if(isset($_POST) && isset($_GET['id'])){
            $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
            $id = $_GET['id'];
            $caracteristica = new Caracteristica_externa();
            $caracteristica->setId($id);
            $caracteristica->setCaracteristica($nombre);
            $update = $caracteristica->actualizar();
            if($update){
                $_SESSION['caracteristicaex_actualizado'] = 'completed';   
            }else{
                $_SESSION['caracteristicaex_actualizado'] = 'failed';  
            }
        }else{
            $_SESSION['caracteristicaex_actualizado'] = 'failed';  
        }
        header("location:".base_url.'admin/caracteristicaExterna');
    }
    public function eliminar(){
        if(isset($_SESSION['administrador'])){
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                $caracteristica = new Caracteristica_externa();
                $caracteristica->setId($id);
                
                $delete = $caracteristica->delete();
                if($delete){
                    $_SESSION['delete_caracteristicaex'] = 'complete';
                }else{
                    $_SESSION['delete_caracteristicaex'] = 'failed';
                }
            }else{
                $_SESSION['delete_caracteristicaex'] = 'failed';
            }
            
            header('Location:'.base_url.'admin/caracteristicaExterna');
        }else{
            header("location:".base_url);
            exit();
        }
	
    }
}