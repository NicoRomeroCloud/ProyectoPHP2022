 <!-- Eliminacion segun ID, retorna un mensaje acorde al tipo de dato ingresado -->
 <?php
    include '../conexionBDD.php';
    
    $rut = $_GET['rut'];

        $borrar="DELETE FROM profesor where rut = $rut";
        $resultado = $bdd->query($borrar);
        if($resultado ){
            echo "<script> alert('Profesor eliminado de la base de datos'); location.href = '../crudProfesor.php';</script>";
        }else{
            echo "<script> alert('Ocurrió un error y no se pudo completar el proceso de eliminación'); location.href = '../crudProfesor.php';</script>";
        }




?>