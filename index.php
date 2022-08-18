<?php
  session_start();

  require 'database.php';

  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
      $user = $results;
    }
  }
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>xd</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>
    <?php require 'partials/header.php' ?>

    <?php if(!empty($user)): ?>
      <br> Bienvenido. <?= $user['email']; ?>
      <br> Has iniciado sesión de manera correcta!
      <br>
      <a href="logout.php">
        Salir
      </a>
      <br>
      <h3>Como administrador puedes acceder a lo siguiente</h3>
      <br>
      
      <button type="button" class="btn btn-success position-relative" onclick="location.href='./crudproyecto/crudAdmin.php'" data-bs-toggle="modal"
                    data-bs-target="#editarAdmin">
                    Base de datos administrador <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-exclamation" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                  <circle cx="9" cy="7" r="4" />
                                                  <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                                  <line x1="19" y1="7" x2="19" y2="10" />
                                                  <line x1="19" y1="14" x2="19" y2="14.01" />
                                                </svg>
                </button>
                <br>
                <br>
                <button type="button" class="btn btn-success position-relative" onclick="location.href='./crudproyecto/crudAlumno.php'" data-bs-toggle="modal"
                    data-bs-target="#editarAdmin">
                    CRUD alumno <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-exclamation" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                  <circle cx="9" cy="7" r="4" />
                                                  <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                                  <line x1="19" y1="7" x2="19" y2="10" />
                                                  <line x1="19" y1="14" x2="19" y2="14.01" />
                                                </svg>
                </button>
                <br>
                <br>
                <button type="button" class="btn btn-success position-relative" onclick="location.href='./crudproyecto/crudCurso.php'" data-bs-toggle="modal"
                    data-bs-target="#editarAdmin">
                    CRUD curso <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-exclamation" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                  <circle cx="9" cy="7" r="4" />
                                                  <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                                  <line x1="19" y1="7" x2="19" y2="10" />
                                                  <line x1="19" y1="14" x2="19" y2="14.01" />
                                                </svg>
                </button>
                <br>
                <br>
                <button type="button" class="btn btn-success position-relative" onclick="location.href='./crudproyecto/crudProfesor.php'" data-bs-toggle="modal"
                    data-bs-target="#editarAdmin">
                    CRUD profesor <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-exclamation" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                  <circle cx="9" cy="7" r="4" />
                                                  <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                                  <line x1="19" y1="7" x2="19" y2="10" />
                                                  <line x1="19" y1="14" x2="19" y2="14.01" />
                                                </svg>
                </button>
    <?php else: ?>
      <h1>Bienvenido a tu portal intranet</h1>

      <h3><a href="login.php" >Ingresa aquí con tus credenciales entregadas (rut y contraseña)</a></h3>
      <!-- o
      <br>
      <a href="signup.php">registrate</a> -->

    <?php endif; ?>
    
    <br>
    <br>
    <br>
    <br>
    <br>
    
    <div class="b-example-divider">Si tienes algún problema comunícate con nostros: email@hola.cl</div>
  </body>
</html>

