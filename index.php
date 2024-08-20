<?php
session_start();
require_once 'autoload.php';
require_once 'config/db.php';
require_once 'config/parameters.php';
require_once 'helpers/utils.php';
$current_url= $_SERVER['REQUEST_URI'];
if (strpos($current_url, '/admin') !== false) {
	require_once 'views/admin/header-admin.php';
	require_once 'views/admin/sidebar-admin.php';
} else {
    require_once 'views/parts/header.php';
}

// require_once 'views/layout/sidebar.php';

function show_error(){
	$error = new ErrorController();
	$error->index();
}

if(isset($_GET['controller'])){
	$nombre_controlador = $_GET['controller'].'Controller';

}elseif(!isset($_GET['controller']) && !isset($_GET['action'])){
	$nombre_controlador = controller_default;
	
}else{
	show_error();
	exit();
}

if(class_exists($nombre_controlador)){	
	$controlador = new $nombre_controlador();
	
	if(isset($_GET['action']) && method_exists($controlador, $_GET['action'])){
		$action = $_GET['action'];
		$controlador->$action();
	}elseif(!isset($_GET['controller']) && !isset($_GET['action'])){
		$action_default = action_default;
		$controlador->$action_default();
	}else{
		show_error();
	}
}else{
	show_error();
}

if (strpos($current_url, '/admin') !== false) {
	require_once 'views/admin/footer-admin.php';
} else {
	require_once 'views/parts/footer.php';
}
 
