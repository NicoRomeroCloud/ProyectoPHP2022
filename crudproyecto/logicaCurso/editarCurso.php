<?php
    include '../conexionBDD.php';
    
    $id_curso = $_POST['id_curso'];
    $rut_profesor = $_POST['rut_profesor'];
    $nombre_curso = $_POST['nombre_curso'];
    $descripcion=$_POST['descripcion'];

        $borrar="UPDATE curso set id_curso=$id_curso,rut_profesor=$rut_profesor,nombre_curso='$nombre_curso',descripcion='$descripcion' where id_curso=$id_curso";
        $resultado = $bdd->query($borrar);
       
        if($resultado){
            echo "<script> alert('Curso editado correctamente'); location.href = '../crudCurso.php';</script>";
        }else{
            echo "<script> alert('Ocurrió un error y no se pudo completar el proceso de edición'); location.href = '../crudCurso.php';</script>";
        }




?>