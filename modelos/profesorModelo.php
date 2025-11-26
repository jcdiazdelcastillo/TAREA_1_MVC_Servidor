<?php
	include 'conexion.php';
	
	class ProfesorModelo extends Conexion{
		
		function insertarProfesores ($nombre){
			$sql = "INSERT INTO profesores(nombre) VALUES ('".$nombre."')";
			try{
				$resultado=$this->conexion->query($sql);
				return true;
			}catch(mysqli_sql_exception $e){
				return false;
			}

		}

		function obtenerProfesores(){
			$sql = "SELECT * FROM profesores ORDER BY idProfesor ASC";
			return $this->conexion->query($sql);
		}

		function seleccionarProfesor($id){
			$sql = "SELECT * FROM profesores WHERE idProfesor =".$id;
			return $this->conexion->query($sql);
		}

		function modificarProfesor($id, $nuevoNombre){
			$sql="UPDATE profesores 
				SET nombre = '".$nuevoNombre."'
				WHERE idProfesor = ".$id;
				return $this->conexion->query($sql);
		}

		function eliminarProfesor($id){
			$sql="DELETE FROM profesores WHERE idProfesor = ".$id;
			return $this->conexion->query($sql);
		}
	}
?>