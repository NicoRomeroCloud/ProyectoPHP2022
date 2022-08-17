 <!-- Eliminacion segun ID, retorna un mensaje acorde al tipo de dato ingresado -->
<?php
    include '../conexionBDD.php';
    
    $rut = $_GET['rut'];

        $borrar="DELETE FROM alumno where rut = $rut";
        $resultado = $bdd->query($borrar);

        $borrarasociacion="DELETE FROM cursoalumnos where rut_alumno=$rut";
        $resultadoasociacion=$bdd->query($borrarasociacion);
       
        if($resultado && $resultadoasociacion){
            echo "<script> alert('Alumno eliminado de la base de datos'); location.href = '../crudAlumno.php';</script>";
        }else{
            echo "<script> alert('Ocurrió un error y no se pudo completar el proceso de eliminación'); location.href = '../crudAlumno.php';</script>";
        }




?>