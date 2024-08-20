<?php
require_once 'models/usuario.php';
require_once 'models/tipo.php';

class adminController{
	
	public function index(){
		if(isset($_SESSION['identity'])){
		require_once 'views/admin/content.php';
		}else{
			header("location:".base_url);
			exit();
		}
	}

	public function profile(){
		if(isset($_SESSION['identity'])){
		require_once 'views/admin/profile.php';
		}else{
			header("location:".base_url);
			exit();
		}
	}

	public function add(){
		if(isset($_SESSION['identity'])){
			require_once 'views/admin/new-property.php';
			}else{
				header("location:".base_url);
				exit();
			}
	}

	public function list(){
		if(isset($_SESSION['identity'])){
			require_once 'views/admin/property-list.php';
			}else{
				header("location:".base_url);
				exit();
			}
	}

	public function agentes(){
		if(isset($_SESSION['administrador'])){
			$agente = new Usuario();
			$agentes = $agente->agentes();
			require_once 'views/admin/agentes.php';
			}else{
				header("location:".base_url);
				exit();
			}
	}

	public function tipo(){
		if(isset($_SESSION['identity'])){
			$tipo = new Tipo();
			$tipos = $tipo->read();
			require_once 'views/admin/configTipo.php';
			}else{
				header("location:".base_url);
				exit();
			}
	}

	public function getTipo(){
		if(isset($_SESSION['identity']) && isset($_GET['id'])){
			$id = $_GET['id'];
			$tipo_actual = new Tipo();
			$tipo_actual->setId($id);
			$update = $tipo_actual->read_one();
			require_once 'views/admin/configTipo.php';
		}else{
			header("location:".base_url);
			exit();
		}
		
    }

	public function settings(){
		if(isset($_SESSION['administrador'])){
			require_once 'views/admin/settings.php';
			}else{
				header("location:".base_url);
				exit();
			}
	}


}