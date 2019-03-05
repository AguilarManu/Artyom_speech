<?php 
/**
 * 
 */
class Config{

	// Inicializar
	function __construct(){
		define("PROYECTO_NOMBRE", "INTERACCION_USUARIO");
		// define("BASE_URL", $this->getPath()['base_url']);
		// Base URL estática
		$_SESSION['base_url'] == 'http://localhost/proyectos/Artyom_speech/';
	}

	
	// Obtener información de la ruta del proyecto
    public function getPath(){
    	// domain name
		$domain = $_SERVER['SERVER_NAME'];
    	// Output: C:\xampp\htdocs\proyectos\Artyom_speech\Assets\Config
    	$base_dir = __DIR__;
		// server port
		$port = $_SERVER['SERVER_PORT'];
    	// output: /myproject/index.php
    	$currentPath = $_SERVER['PHP_SELF']; 
    	// output: Array ( [dirname] => /myproject [basename] => index.php [extension] => php [filename] => index ) 
    	$pathInfo = pathinfo($currentPath);
		// output: localhost
    	$hostName = $_SERVER['HTTP_HOST']; 
    	// output: http://
    	$protocol = strtolower(substr($_SERVER["SERVER_PROTOCOL"],0,5))=='https://'?'https://':'http://';
    	// return: http://localhost/myproject/
    	$base_url =  $protocol.$hostName.$pathInfo['dirname']."/";
    	// array result
    	$InfoPath = array('hostName' => $hostName, 'protocol' => $protocol, 'base_url' => $base_url, 'currentPath' => $currentPath, 'pathInfo' => $pathInfo, 'base_dir' => $base_dir);
    	// array result
    	return $InfoPath;
    }
}

$config = new Config();

?>