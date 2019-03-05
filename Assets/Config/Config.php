<?php /**
 * 
 */
class Config{
	public $conexion;
	private $servidor;
	private $usuario;
	private $contrasenia;
	private $database;
	

	// Comment
	function __construct(){
		$this->servidor = 'localhost';
		$this->usuario = 'root';
		$this->contrasenia = '';
		$this->database = 'sigh';
		$this->Conexion();
	}


	// Comment
	public function Conexion(){
		$this->conexion = new mysqli($this->servidor, $this->usuario, $this->contrasenia, $this->database);
		$this->conexion->set_charset("utf8");
		
		if ($this->conexion->connect_errno) {
			return 'Error al conectarse a la DB: '.$this->conexion->connect_errno.' '.$this->conexion->connect_error;
		}
		return $this->conexion;
	}


	// COmment
	public function sqlQuery($sql){
		return $this->conexion->query($sql);
		$this->CerrarConexion();
	}


	// Comment
	public function sqlQueryCondicion($aql, $condicion){
		
	}


	// Comment
	public function CerrarConexion(){
		return $this->conexion->close();
	}


	// Comment
	public function setOutput($json) {
        header('Content-type: application/json');
        echo json_encode($json,JSON_PRETTY_PRINT);
    }


    // Comment
    public function tiempoTranscurrido($data) {
        $Tiempo1=new DateTime($data['Time1']);
        $Tiempo2=new DateTime($data['Time2']);
        return $Tiempo1->diff($Tiempo2);
    }
}

?>