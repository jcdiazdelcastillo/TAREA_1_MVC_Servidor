<?php
    include "controlador/profesorControlador.php";

    if(isset($_POST['nombre'])){
        $nombre =$_POST['nombre'];
        //INSTANCIAMOS EL CONTROLADOR AL Q HAREMOS LAS LLAMADAS A SUS FUNCIONES
        $cAlta = new ProfesorControlador();
        $resultado = $cAlta->insertarProfesor($nombre);
        
        if($resultado){
            echo "usuario introducido de manera correcta";
        }else{
            echo "Error al introducir el usuario";
        }
    }

    include "vistas/altaProfesores.php"
?>