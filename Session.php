<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<title>Session</title>
</head>
<body>
<?php
    session_start();
?>
<br/>
<?php
$nombreAdmin = "abmin";
$passwordAdmin = "123";
    if($nombreAdmin == $_POST['nombre'] && $passwordAdmin == $_POST['password']){
        $_SESSION['nombre'] = $_POST['nombre'];
        $_SESSION['password'] = $_POST['password'];
        echo "<p><a href='Cerrar.php'>Cerrar Sesion</a></p>";
        echo "Bienvenido! ".$_POST['nombre'];
    }else{
        if(isset($_SESSION['nombre'])){
            echo "<p><a href='Cerrar.php'>Cerrar Sesion</a></p>";
            echo "Bienvenido! ".$_POST['nombre'];
        }else{
            echo "Acceso Restringido intente de nuevo";
        }
    }
?>
<br /><a href="Index.php">Ir a Inicio</a>
</body>
</html>
