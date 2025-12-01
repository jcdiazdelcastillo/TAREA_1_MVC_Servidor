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
			$resultado=$resultado = $this->conexion->query($sql);

			$profesores = [];
			while ($fila=$resultado->fetch_assoc()){
				$profesores[]=$fila;
			}
			return $profesores;
		}

		function seleccionarProfesor($id){
			$sql = "SELECT nombre FROM profesores WHERE idProfesor =".$id;
			$resultado = $this->conexion->query($sql);
			if($resultado && $fila=$resultado->fetch_assoc()){
				return $fila['nombre']; /*DEVOLVER DIRECTAMENTE EL NOMBRE*/
			}

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