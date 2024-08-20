<?php
class Usuario{
    private $id;
    private $email;
    private $nombre;
    private $telefono;
    private $password;
    private $imagen;
    private $db;

    public function __construct() {
		$this->db = Database::connect();
	}
    function getId() {
		return $this->id;
	}
    function getEmail() {
		return $this->email;
	}
	function getNombre() {
		return $this->nombre;
	}
    function getTelefono() {
		return $this->telefono;
	}
  function getPassword() {
		return password_hash($this->password, PASSWORD_BCRYPT, ['cost' => 10]);
	}
  function getImagen() {
		return $this->imagen;
	}
    function setId($id) {
		$this->id = $id;
	}
    function setEmail($email) {
		$this->email = $this->db->real_escape_string($email);
	}
	function setNombre($nombre) {
		$this->nombre = $this->db->real_escape_string($nombre);
	}
    function setTelefono($telefono) {
		$this->telefono = $this->db->real_escape_string($telefono);
	}
    function setPassword($password) {
        $this->password = $password;
	}
  function setImagen($imagen) {
		$this->imagen = $imagen;
	}
    public function save(){
        $sql = "INSERT INTO usuarios VALUES(NULL, '{$this->getNombre()}', '{$this->getEmail()}', '{$this->getTelefono()}',  '{$this->getPassword()}', 'agente', null);";
        $save = $this->db->query($sql);

       $result = false;
       if ($save) {
        $result = true;
       }
       return $result;
    }
    public function emailExists() {
      $sql = "SELECT * FROM usuarios WHERE email = '{$this->email}'";
      $result = $this->db->query($sql);
      return $result->num_rows > 0;
    }
    public function login(){
      $result = false;
      $email = $this->email;
      $password = $this->password;
      $sql = "SELECT * FROM usuarios WHERE email = '$email'";
      $login=  $this->db->query($sql);

      if ($login && $login->num_rows == 1) {
        $usuario = $login->fetch_object();
        //Verificar la contraseña
        $verify = password_verify($password, $usuario->password);
        
        if ($verify) {
          $result = $usuario;
        }
        
      }return $result;
    }
    public function actualizar(){
      // $sql = "UPDATE usuarios SET nombre='{$this->getNombre()}', email='{$this->getEmail()}', telefono='{$this->getTelefono()}', password='{$this->getPassword()}'WHERE id={$this->id}";
      $sql = "UPDATE usuarios SET nombre='{$this->getNombre()}', email='{$this->getEmail()}', telefono='{$this->getTelefono()}', password='{$this->getPassword()}'";
      if($this->getImagen() != null){
        $sql .= ", imagen='{$this->getImagen()}'";
      }
      
      $sql .= " WHERE id={$this->id};";

      $save = $this->db->query($sql);
      
      $result = false;
      if($save){
        $result = true;
      }
      return $result;
    }
    public function agentes(){
      $sql = "SELECT * FROM usuarios WHERE rol='agente' ORDER BY id DESC";
      $agentes = $this->db->query($sql);
      return $agentes;
    }
    public function delete(){
      $sql = "DELETE FROM usuarios WHERE id={$this->id}";
      $delete = $this->db->query($sql);
  
      $result = false;
      if ($delete) {
       $result = true;
      }
      return $result;
  
    }
}