<?php
    include 'modelos/profesorModelo.php';/* Al incluir el controlador en procesar_Listarprofesores.php, que está en raiz, este accede directamente*/

    //CREAMOS UNA CLASE CONTROLADOR, EN LA QUE SSUS MÉTODOS HARÁN LLAMADAS A LAS CONSULTAS DEL MODELO
    class ProfesorControlador{
        private $modelo;
        public $mensaje;

        public function __construct(){
            $this->modelo=new ProfesorModelo(); // creamos que la variable de la clase Controlador sea una instancia de la clase Modelo (profesorModelo)
        }

        public function listarProfesores(){
            $profesores = $this->modelo->obtenerProfesores();
            if(count($profesores)>0){ /*EL LENGTH*/
                return $profesores;
            }else{
                $this->mensaje="No se han podido obtener profesores";
            }
        }

  

        public function insertarProfesor(){
            if(!empty($_POST['nombre'])){
                $nombre = $_POST['nombre'];
                $resultado = $this->modelo->insertarProfesores($nombre);

                if($resultado){
                    $this->mensaje= "Profesor introducido de manera correcta";
                }else{
                    $this->mensaje = "Error al introducir el profesor";
                }
            }else{
                $this->mensaje="ERROR, DEBES DE INTRODUCIR UN NOMBRE";
            }
        }

        public function sacarProfesor(){
            $idProfesor=$_GET['idProfesor'];
            $resultado = $this->modelo->seleccionarProfesor($idProfesor);
            if($resultado){
                return $resultado;
            }else{
                $this->mensaje="No se ha podido obtener al profesor";
            }
        }

        public function eliminarProfesor(){
            $idProfesor=$_GET['idProfesor'];
			if(isset($_POST['eliminar'])){ //significa que se ha pulsado un check
				if($_POST['eliminar']=='si'){
					$resultado= $this->modelo->eliminarProfesor($idProfesor);
                     if($resultado){
                        $this->mensaje = "Profesor eliminado correctamente";
                    }else{
                        $this->mensaje = "Error al modificar el profesor";
                    }
				}else{
                    $this->mensaje="OPERACIÓN CANCELADA";
                }
			}
            
        }
    }
?>