<?php
    include '../conexionBDD.php';
    
    $id_curso = $_POST['id_curso'];
    $rut_profesor = $_POST['rut_profesor'];
    $nombre_curso = $_POST['nombre_curso'];
    $descripcion=$_POST['descripcion'];

        $borrar="INSERT INTO curso (id_curso,rut_profesor,nombre_curso,descripcion) values ('$id_curso','$rut_profesor','$nombre_curso','$descripcion') ";
        $resultado = $bdd->query($borrar);
       
        if($resultado){
            echo "<script> alert('Curso agregado correctamente'); location.href = '../crudCurso.php';</script>";
        }else{
            echo "<script> alert('Ocurrió un error y no se pudo crear el nuevo curso'); location.href = '../crudCurso.php';</script>";
        }




?>