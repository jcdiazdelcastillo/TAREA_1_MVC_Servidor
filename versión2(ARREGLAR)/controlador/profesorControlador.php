<?php
    include 'modelos/profesorModelo.php';/* Al incluir el controlador en procesar_Listarprofesores.php, que está en raiz, este accede directamente*/

    //CREAMOS UNA CLASE CONTROLADOR, EN LA QUE SSUS MÉTODOS HARÁN LLAMADAS A LAS CONSULTAS DEL MODELO
    class ProfesorControlador{
        private $modelo;

        public function __construct(){
            $this->modelo=new ProfesorModelo(); // creamos que la variable de la clase Controlador sea una instancia de la clase Modelo (profesorModelo)
        }

        public function listarProfesores(){
            $resultado = $this->modelo->obtenerProfesores();
            if($resultado->num_rows>0){
                return $resultado;
            }else{
                return "No se han podido obtener profesores";
            }
        }

        public function sacarProfesor($idProfesor){
            $resultado = $this->modelo->seleccionarProfesor($idProfesor);
            if($resultado){
                return $resultado;
            }
        }
        public function insertarProfesor($nombre){
            $resultado = $this->modelo->insertarProfesores($nombre);
            if ($resultado){
                return "profesor Insertado correctamente<br>";
            }else{
                return "error, no se ha podido insertar el profesor";
            }
        }

        public function modificarProfesor($id, $nuevoNombre){
            $resultado = $this->modelo->modificarProfesor($id, $nuevoNombre);
            if($resultado){
                return "profesor modificado correctamente";
            }else{
                return "Error al modificar el profesor";
            }
        }

        public function eliminarProfesor($id){
            $resultado= $this->modelo->eliminarProfesor($id);
            if($resultado){
                return "Profesor eliminado correctamente";
            }else{
                return "Error al modificar el profesor";
            }
        }
    }
?>