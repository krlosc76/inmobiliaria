<?php
class Tipo{
    private $id;
    private $tipo;
    private $db;

    public function __construct() {
		$this->db = Database::connect();
	}
    function getId() {
		return $this->id;
	}
    function getTipo() {
		return $this->tipo;
	}
    function setId($id) {
		$this->id = $id;
	}
    function setTipo($tipo) {
		$this->tipo = $tipo;
	}
    public function insert(){
        $sql = "INSERT INTO tipos VALUES(NULL, '{$this->getTipo()}');";
        $save = $this->db->query($sql);

       $result = false;
       if ($save) {
        $result = true;
       }
       return $result;
    }
    public function read(){
      $sql = "SELECT * FROM tipos ORDER BY id DESC";
      $read = $this->db->query($sql);
      return $read;
    }
    public function read_one(){
      $sql = "SELECT * FROM tipos WHERE id={$this->id}";
      $read_one = $this->db->query($sql);
      return $read_one;
    }
    public function actualizar(){
      $sql = "UPDATE tipos SET tipo='{$this->getTipo()} 'WHERE id={$this->id}";
      $update = $this->db->query($sql);
      
      $result = false;
      if($update){
        $result = true;
      }
      return $result;
    }
}