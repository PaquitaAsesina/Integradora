<?php

  require 'conexion.php';

  $message = '';

  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $sql = "INSERT INTO usuarios (email, password) VALUES (:email, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);

    if ($stmt->execute()) {
      $message = 'Usuario creado';
    } else {
      $message = 'hay problemas creando la cuenta';
    }
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>SignUp</title>
    <link rel="stylesheet" type="text/css" href="Jotaro.css">
    <link rel="stylesheet" type="text/css" href="form.css">
  </head>
  <body>

    

    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

    <h1>SignUp</h1>
    <span>o <a href="login.php">Inicia Sesion</a></span>

    <form action="signup.php" method="POST">


    <div class="form-element">
        <label>Email</label>
        <input type="text" name="email" placeholder="ingresa tu email" required />
    </div>
    <div class="form-element">
        <label>Contraseña</label>
        <input type="password" name="password" placeholder required />
    </div>
    <div class="form-element">
        <label>Contraseña</label>
        <input type="password" name="confirm_password" required />
    </div>
    <button type="submit" name="register" value="register">Registrar</button>
    </form>
    <a href="index.php">Regresar</a>
  </body>
</html>