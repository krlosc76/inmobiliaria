<?php
class Caracteristica_externa{
    private $id;
    private $caracteristica;
    private $db;

    public function __construct() {
		$this->db = Database::connect();
	}
    function getId() {
		return $this->id;
	}
    function getCaracteristica() {
		return $this->caracteristica;
	}
    function setId($id) {
		$this->id = $id;
	}
    function setCaracteristica($caracteristica) {
		$this->caracteristica = $caracteristica;
	}
    public function insert(){
        $sql = "INSERT INTO caracteristicas_externas VALUES(NULL, '{$this->getCaracteristica()}');";
        $save = $this->db->query($sql);

       $result = false;
       if ($save) {
        $result = true;
       }
       return $result;
    }
    public function read(){
      $sql = "SELECT * FROM caracteristicas_externas ORDER BY id DESC";
      $read = $this->db->query($sql);
      return $read;
    }
    public function read_one(){
      $sql = "SELECT * FROM caracteristicas_externas WHERE id={$this->id}";
      $read_one = $this->db->query($sql);
      return $read_one;
    }
    public function actualizar(){
      $sql = "UPDATE caracteristicas_externas SET caracteristica='{$this->getCaracteristica()} 'WHERE id={$this->id}";
      $update = $this->db->query($sql);
      
      $result = false;
      if($update){
        $result = true;
      }
      return $result;
    }
    public function delete(){
      $sql = "DELETE FROM caracteristicas_externas WHERE id={$this->id}";
      $delete = $this->db->query($sql);
  
      $result = false;
      if ($delete) {
       $result = true;
      }
      return $result;
  
    }
}