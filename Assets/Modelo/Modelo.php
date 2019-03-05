<?php
/**
   * 
   */

// Usar configuración general
// require '../Config/Config.php';

class Modelo{
  	public $conexion;
	private $servidor;
	private $usuario;
	private $contrasenia;
	private $database;
  	

  	// Incializa
  	function __construct(){
  		$this->servidor = 'localhost';
		$this->usuario = 'root';
		$this->contrasenia = '';
		$this->database = 'sigh';
		$this->Conexion();
  	}


  	// Conexión a BD
	public function Conexion(){
		$this->conexion = new mysqli($this->servidor, $this->usuario, $this->contrasenia, $this->database);
		$this->conexion->set_charset("utf8");
		
		if ($this->conexion->connect_errno) {
			return 'Error al conectarse a la DB: '.$this->conexion->connect_errno.' '.$this->conexion->connect_error;
		}
		return $this->conexion;
	}

	
	// Cerra conexión a BD
	public function CerrarConexion(){
		return $this->conexion->close();
	}


	// Consulta simple
	public function sqlQuery($sql){
		return $this->conexion->query($sql);
		$this->CerrarConexion();
	}


	// Consulta con Condición
	public function sqlQueryCondicion($sql, $condicion){
		
	}


	// Create
	public function sqlCreate($sql){
		
	}


	// Update
	public function sqlUpdate($sql, $condicion){
		
	}


	// Delete
	public function sqlDelete($id){
		
	}
	


	// Retorno de Datos
	public function outputJson($json) {
        header('Content-type: application/json');
        echo json_encode($json,JSON_PRETTY_PRINT);
    }


    // Calcula tiempo transucrrido
    public function tiempoTranscurrido($data) {
        $Tiempo1 = new DateTime($data['Time1']);
        $Tiempo2 = new DateTime($data['Time2']);
        return $Tiempo1->diff($Tiempo2);
    }
}  

?>