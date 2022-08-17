<?php
    include '../conexionBDD.php';
    
    $rut = $_POST['rut'];
    $edad= $_POST['edad'];
    $nombre = $_POST['nombre'];
    $apellido_p=$_POST['apellido_p'];
    $apellido_m=$_POST['apellido_m'];
    $contrasena=$_POST['contrasena'];

        $borrar="UPDATE alumno set rut=$rut,edad=$edad,nombre='$nombre',apellido_p='$apellido_p',apellido_m='$apellido_m',contrasena='$contrasena' WHERE rut=$rut";
        $resultado = $bdd->query($borrar);
       
        if($resultado){
            echo "<script> alert('Alumno editado correctamente'); location.href = '../crudAlumno.php';</script>";
        }else{
            echo "<script> alert('Ocurrió un error y no se pudo completar el proceso de edición'); location.href = '../crudAlumno.php';</script>";
        }




?>