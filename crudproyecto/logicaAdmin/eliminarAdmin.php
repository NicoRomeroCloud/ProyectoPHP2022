 <!-- Eliminacion segun ID, retorna un mensaje acorde al tipo de dato ingresado -->
 <?php
    include '../conexionBDD.php';
    
    $rut = $_GET['rut'];

        $borrar="DELETE FROM admin where rut = $rut";
        $resultado = $bdd->query($borrar);
       
        if($resultado){
            echo "<script> alert('Admin eliminado de la base de datos'); location.href = '../crudAdmin.php';</script>";
        }else{
            echo "<script> alert('Ocurrió un error y no se pudo completar el proceso de eliminación'); location.href = '../crudAdmin.php';</script>";
        }




?>