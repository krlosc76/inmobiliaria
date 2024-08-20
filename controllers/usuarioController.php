<?php
require_once 'models/usuario.php';
ob_start();
class UsuarioController{
    public function index(){
        echo "Controlador usuarios";
    }
    //Registrar usuario//
    public function save(){  
        if (isset($_POST)) {
            $email = isset($_POST['email']) ? $_POST['email'] : false;
            $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
            $telefono = isset($_POST['telefono']) ? $_POST['telefono'] : false;
            $password = isset($_POST['password']) ? $_POST['password'] : false;

            if ($email && $nombre && $telefono && $password) {
                $usuario = new usuario();
                $usuario->setEmail($email);
                $usuario->setNombre($nombre);
                $usuario->setTelefono($telefono);
                $usuario->setPassword($password);

                if ($usuario->emailExists()) {
                    $_SESSION['register'] = "email_exists";
                } else {
                $save =$usuario->save();
                if ($save) {
                 $_SESSION['register'] = "complete";
                
                }else{
                 $_SESSION['register'] = "failed";
                
                }
            }
            }else{
                $_SESSION['register'] = "failed";
               
            }
           
        }else{
            $_SESSION['register'] = "failed";
           
           
        }

        header("location:".base_url.'vista/index');
        
        exit;
    }
    //Login de usuario
    public function login(){
        if (isset($_POST)) {
            $usuario = new Usuario();
            $usuario->setEmail($_POST['email']);
            $usuario->setPassword($_POST['password']);
            $identity=  $usuario->login();

            if ($identity && is_object($identity)) {
                $_SESSION['identity'] = $identity;

                if ($identity->rol == 'administrador') {
                    $_SESSION['administrador'] = true;
                }
            }else {
                $_SESSION['error_login'] = 'Inicio de sesión fallido. Usuario o contraseña incorrectos.';
            }
        }
        header("location:".base_url.'/admin/index');
    }
    //Cerrar sesión//
    public function logout(){
        if (isset($_SESSION['identity'])) {
            unset($_SESSION['identity']);
        }
        if (isset($_SESSION['administrador'])) {
            unset($_SESSION['administrador']); 
        }
        if (isset($_SESSION['error_login'])) {
            unset($_SESSION['error_login']); 
        }
        header("location:".base_url);
    }
   
    public function update(){
        if (isset($_POST) && isset($_GET['id'])) {
            $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
            $email = isset($_POST['email']) ? $_POST['email'] : false;
            $telefono = isset($_POST['telefono']) ? $_POST['telefono'] : false;
            $password = isset($_POST['password']) ? $_POST['password'] : false;
            $id = $_GET['id'];
            if ($id && $nombre && $email && $telefono && $password){
                $usuario = new usuario();
                $usuario->setId($id);
                $usuario->setNombre($nombre);
                $usuario->setEmail($email);
                $usuario->setTelefono($telefono);
                $usuario->setPassword($password);
                 //Guardar la imagen
                if(isset($_FILES['imagen'])){
                $file = $_FILES['imagen'];
                $filename = $file['name'];
                $mimetype = $file['type'];
            
    
                if ($mimetype == "image/jpg" || $mimetype == "image/jpeg" || $mimetype == "image/png" || $mimetype == "image/gif" ) {
                    if (!is_dir('uploads/images')) {
                        mkdir('uploads/images', 0777, true);
                    }
                    move_uploaded_file($file['tmp_name'], 'uploads/images/'.$filename);
                    $usuario->setImagen($filename);
                }
               
            }
                $update = $usuario->actualizar();
                if($update){
                    $_SESSION['update'] = 'actualizado';
                    $_SESSION['identity']->nombre = $nombre;
                    $_SESSION['identity']->email = $email;
                    $_SESSION['identity']->telefono = $telefono;
                    // if(($_FILES['imagen'])!= null){
                    // $_SESSION['identity']->imagen = $filename;
                    // }
                   
                }else{
                    $_SESSION['update'] = 'faiildo';
                }
            }else{
                $_SESSION['update'] = 'faiildo';
            }
        }else{
            $_SESSION['update'] = 'faiildo';
        }
      
        header("location:".base_url.'/admin/profile');
    } 
    public function eliminar(){
        if(isset($_SESSION['administrador'])){
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                $agente = new Usuario();
                $agente->setId($id);
                
                $delete = $agente->delete();
                if($delete){
                    $_SESSION['delete'] = 'complete';
                }else{
                    $_SESSION['delete'] = 'failed';
                }
            }else{
                $_SESSION['delete'] = 'failed';
            }
            
            header('Location:'.base_url.'admin/agentes');
        }else{
            header("location:".base_url);
            exit();
        }
	
    }
}   
ob_end_flush();