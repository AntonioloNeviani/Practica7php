<html>
<head>
<meta charset="UTF-8"/>
<title>Cerrar Sesión</title>
</head>
<body>
<?php
    session_start();
    session_destroy();
?>
<p>Has Cerrado Sesion</p>
<br /><a href="Index.php">Ir a Inicio</a>
</body>
</html>
