<?php
    $bddHost ='localhost';
    $bdduser = 'root';
    $bddpassword= '';
    $bddname= 'intranet_bdd';

    //$conectar = mysqli_connect($bddhost, $bdduser, $bddpassword, $bddname);

    $bdd= new mysqli($bddHost,$bdduser,$bddpassword,$bddname);
    if($bdd -> connect_error){
        die("error al conectar con la base de datos".$bdd->connect_erro);
    }
    
?>