<html>
    <head>
    <link rel="stylesheet" type="text/css" href="Jotaro.css">
    <link rel="stylesheet" type="text/css" href="form.css">
        <title>Registrarse</title>
    </head>
    <body>
    <form method="post" action="" name="signup-form">
    <div class="form-element">
        <label>Nombre</label>
        <input type="text" name="nombre" pattern="[a-zA-Z0-9]+" required />
    </div>
    <div class="form-element">
        <label>edad</label>
        <input type="text" name="edad"  required />
    </div>
    <div class="form-element">
        <label>Email</label>
        <input type="email" name="email" required />
    </div>
    <div class="form-element">
        <label>Usuario</label>
        <input type="text" name="Usuario" pattern="[a-zA-Z0-9]+" required />
    </div>
    <div class="form-element">
        <label>Contraseña</label>
        <input type="password" name="contraseña" required />
    </div>
    <button type="submit" name="register" value="register">Register</button>
</form>
<a href="index.html">Regresar</a>
    </body>

</html>