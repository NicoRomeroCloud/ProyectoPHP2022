<?php
    include '../conexionBDD.php';
    $rut = $_POST['rut'];
    $edad= $_POST['edad'];
    $nombre= $_POST['nombre'];
    $apellido_p=$_POST['apellido_p'];
    $apellido_m=$_POST['apellido_m'];
    $contrasena=$_POST['contrasena'];

    $insertar = "INSERT INTO profesor (rut,edad,nombre,apellido_p,apellido_m,contrasena) values ('$rut','$edad','$nombre','$apellido_p','$apellido_m','$contrasena') ";
    $query = $bdd->query($insertar);
    if($query){
        echo "<script> alert('Profesor ingresado correctamente'); location.href = '../crudProfesor.php';</script>";
    }else{
        echo "<script> alert('Error al ingresar mascota, intente de nuevo'); location.href = '../crudProfesor.php';</script>";
    }

?>