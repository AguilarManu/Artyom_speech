<?php /**
 * 
 */
// require_once APPPATH.'';
require_once '../Config/Config.php';

class Usuario_m extends Config{
	private $config;
	private $peticion;
	
	function __construct(){
		$this->config = new Config();
		$this->peticion = $_POST['peticion'];
		$this->controlaPeticion();
	}

	public function controlaPeticion(){
		switch ($this->peticion) {
			case 'Autenticacion':
				$this->Autenticacion();
				break;
			default:
				# code...
				break;
		}
	}


	// Comment
	public function Autenticacion(){
		// $usuario = $_POST['usuario'];
		// $contrasenia = $_POST['contrasenia'];
		$data = $this->config->sqlQuery("SELECT 
                                                *
                                            FROM 
                                                sigh_empleados 
                                            WHERE 
                                                empleado_matricula='".$_POST['contrasenia']."'");
		$result = array('action'=>1,'datas' => mysqli_fetch_array($data));
		// $row = mysqli_fetch_array($this->config->sqlQuery("SELECT * FROM sigh_empleados"));
		echo json_encode($result);
		// $this->setOutput(array('Action' => 1, 'msj' => 'success', 'datos'=>$row));
	}
} 

$consut = new Usuario_m();
?>