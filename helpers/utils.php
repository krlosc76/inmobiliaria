<?php
class Utils{
    public static function deleteSession($name){

        if(isset($_SESSION[$name]))  {
            $_SESSION[$name] = null;
            unset($_SESSION[$name]);
        }
        return $name;
    }
    public static function isAdmin(){
        if (!isset($_SESSION['admin'])) {
            header("location:".base_url);
        }else{
            return true;
        }
    }
    public static function registerAlert(){
        if(isset($_SESSION['register']) && $_SESSION['register'] == 'complete'){
            echo '<div class="alert alert-success " role="alert">¡Registro exitoso Inicie sesión!</div>';
        } elseif(isset($_SESSION['register']) && $_SESSION['register'] == 'failed'){
            echo '<div class=" alerta alert alert-danger " role="alert">¡Ingrese todos los datos!</div>';
        } elseif(isset($_SESSION['register']) && $_SESSION['register'] == 'email_exists'){
            echo '<div class="alert alert-danger " role="alert">¡Email ya existe!</div>';
        }
        utils::deleteSession('register');
    }
    public static function loginAlert(){
       if(isset($_SESSION['error_login'])){
            echo '<div class="alert alert-danger" role="alert">¡datos incorrectos!</div>';
        }
        utils::deleteSession('error_login');
    }
    public static function updateAlert(){
        if(isset($_SESSION['update']) && $_SESSION['update'] == 'actualizado'){
            echo '<div class="alert alert-success " role="alert">¡Datos actualizados correctamente!</div>';
        }else if(isset($_SESSION['update']) && $_SESSION['update'] == 'fallido'){
            echo '<div class=" alerta alert alert-danger " role="alert">¡Ingrese todos los datos!</div>';
        }
        utils::deleteSession('update');
    }
    public static function deleteAlert(){
        if(isset($_SESSION['delete']) && $_SESSION['delete'] == 'complete'){
            echo '<div class="alert alert-success " role="alert">¡Usuario eliminado correctamente!</div>';
        }else if(isset($_SESSION['delete']) && $_SESSION['delete'] == 'failed'){
            echo '<div class=" alerta alert alert-danger " role="alert">¡No se pudo eliminar usuario!</div>';
        }
        utils::deleteSession('delete');
    }
    public static function tipoAlert(){
        if(isset($_SESSION['tipo']) && $_SESSION['tipo'] == 'completed'){
            echo '<div class="alert alert-success " role="alert">¡Tipo de propiedad creado correctamente!</div>';
        }else if(isset($_SESSION['tipo']) && $_SESSION['tipo'] == 'failed'){
            echo '<div class=" alerta alert alert-danger " role="alert">¡No se pudo crear tipo de propiedad!</div>';
        }
        utils::deleteSession('tipo');
    }
    

}