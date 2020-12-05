<?php
  session_start();
    
  require 'conexion.php';

  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, email, password FROM usuarios WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
      $user = $results;
    }
  }
?>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="Jotaro.css">
    <link rel="stylesheet" type="text/css" href="form.css">
        <title>

        </title>
    </head>

    <body>
        <h1>Que deseas hacer?</h1>
        
            <h2><a href="login.php">Iniciar Sesion</a></h2>
            <h2><a href="signup.php">Registrarte</a></h2>
        
    </body>
</html>
