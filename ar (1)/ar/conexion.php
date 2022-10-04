<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<link rel="stylesheet" href="estilo.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
</head>	
<body>

<div id="container">
	<header>
<img class= "logo" src="Video img/logo.png" alt="">
</header>
<nav>
<br>
                                                <li><a class="botton" href="index.html">Inicio</a></li>
			<li><a class="botton" href="discografia.html">Discografia</a></li>
			<li><a class="botton" href="tienda.html">Tienda</a></li>
			<li><a class="botton" href="crear.html">Cuenta</a></li>
</nav>

<section class="container box">

<br><br>

<?php
$servidor = "localhost";
$usuario = "root";
$contraseña = "";
$bd = "ar";

$conexion = mysqli_connect($servidor, $usuario, $contraseña, $bd) or die ("Error en la conexion");

$nombre = $_POST["nombre"];
$telefono = $_POST["telefono"];
$correo = $_POST["email"];
$contrasena = $_POST["info"];

$insertar= "INSERT into creausuario VALUES('$nombre', '$telefono', '$correo', '$contrasena')";

$resultado = mysqli_query($conexion, $insertar) or die ("Error al insertar registro");

mysqli_close($conexion);
echo"Los datos se insertaron correctamente";

?>
</section>
		
			<div class="endbox">
		<aside>
			<a href="https://www.youtube.com" target="_blank"><img class="ubic" src="Video img/ubic.png" alt=""></a>
			<a href="#" target="_blank"><img class="sns" src="Video img/s.png" alt=""></a>
		</aside>
		<footer>
			<p><br>
				Contactanos por nuetras redes sociales<br>
				Correo: ArcticMonkeys@gmail.com
			</p></footer>
			</div>
</div>
</body>
</html>