 <!-- Eliminacion segun ID, retorna un mensaje acorde al tipo de dato ingresado -->
 <?php
    include '../conexionBDD.php';
    
    $id_curso = $_GET['id_curso'];

        $borrar="DELETE FROM curso where id_curso = $id_curso";
        $resultado = $bdd->query($borrar);

        $borrarasociacion="DELETE FROM cursoalumnos where id_curso=$id_curso";
        $resultadoasociacion=$bdd->query($borrarasociacion);
       
        if($resultado && $resultadoasociacion){
            echo "<script> alert('Curso eliminado de la base de datos'); location.href = '../crudCurso.php';</script>";
        }else{
            echo "<script> alert('Ocurrió un error y no se pudo completar el proceso de eliminación'); location.href = '../crudCurso.php';</script>";
        }




?>