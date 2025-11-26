<?php
    include '../modelos/profesorModelo.php';

    //CREAMOS UNA CLASE CONTROLADOR, EN LA QUE SSUS MÉTODOS HARÁN LLAMADAS A LAS CONSULTAS DEL MODELO
    class ProfesorControlador{
        private $modelo;

        public function __construct(){
            $this->modelo=new ProfesorModelo(); // creamos que la variable de la clase Controlador sea una instancia de la clase Modelo (profesorModelo)
        }

        public function listarProfesores(){
            return $this->modelo->obtenerProfesores();
        }

        public function insertarProfesor($nombre){
            return $this->modelo->insertarProfesores($nombre);
        }

        public function obtenerProfesor($id){
            return $this->modelo->seleccionarProfesor($id);
        }

        public function modificarProfesor($id, $nuevoNombre){
            return $this->modelo->modificarProfesor($id, $nuevoNombre);
        }

        public function eliminarProfesor($id){
            return $this->modelo->eliminarProfesor($id);
        }
    }
?>