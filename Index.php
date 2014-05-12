<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<title>Password</title>
</head>
<body>
<?php
    session_start();
?>
<?php
    if(isset($_SESSION['nombre'])){
        echo "<p>Has iniciado sesion: " . $_SESSION['nombre'] . "";
        echo "<p><a href='Cerrar.php'>Cerrar Sesion</a></p>";
    }else {
?>
    <form action="Session.php" method="POST">
    <p>Nombre:<input type="text" placeholder="Tu Nombre!" name="nombre" id="nombre" required/></p>
    <p>ContraseÃ±a:<input type="password" placeholder="Tu ContraseÃ±a!" name="password" id="password" required/></p><br/>
    <input type="submit" value="Enviar" />
    </form>
<?php
    }
?>
</body>
</html>
