<?php
    include '../conexionBDD.php';
    
    $rut = $_POST['rut'];
    $edad= $_POST['edad'];
    $nombre = $_POST['nombre'];
    $apellido_p=$_POST['apellido_p'];
    $apellido_m=$_POST['apellido_m'];
    $contrasena=$_POST['contrasena'];

        $borrar="UPDATE profesor set rut=$rut,edad=$edad,nombre='$nombre',apellido_p='$apellido_p',apellido_m='$apellido_m',contrasena='$contrasena' WHERE rut=$rut";
        $resultado = $bdd->query($borrar);
       
        if($resultado){
            echo "<script> alert('Profesor editado correctamente'); location.href = '../crudProfesor.php';</script>";
        }else{
            echo "<script> alert('Ocurrió un error y no se pudo completar el proceso de edición'); location.href = '../crudProfesor.php';</script>";
        }




?>