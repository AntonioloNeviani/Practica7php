<html>
<head>
<meta charset="UTF-8"/>
<title>Session</title>
</head>
<body>
<?php
    session_start();
?>

<?php
$nombreAbmin = "abmin";
$passwordAdmin = "123";
    if($nombreAbmin == $_POST['nombre'] || $passwordAbmin == $_POST['password']){
        $_SESSION['nombre'] = $_POST['nombre'];
        $_SESSION['password'] = $_POST['password'];
        echo "<p><a href='Cerrar.php'>Cerrar Sesion</a></p>";
        echo "Bienvenido! ".$_POST['nombre'];
    }else{
        echo "Acceso Restringido";
    }
?>
<br /><a href="Index.php">Ir a Inicio</a>
</body>
</html>
