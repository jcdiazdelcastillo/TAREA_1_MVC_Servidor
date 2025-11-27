<?php
	include 'configdb.php';
	
	class Conexion{
		protected $conexion;
		
		function __construct(){
			try{
				$this->conexion = new mysqli(SERVIDOR, USUARIO, PASSWORD, BBDD);
			}catch(mysqli_sql_exception $e){
				die ("FALLO EN LA CONEXIÓN CON LA BASE DE DATOS");
			}
		}
		
		function obtenerConexion(){
			return $this->conexion;
		}
		
		function __destruct(){
			$this->conexion->close();
		}
		
	}
?>