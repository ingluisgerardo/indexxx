<?php
$host="localhost";
$usuario="root";
$password="";
$conectar=mysql_connect($host, $usuario, $password);
mysql_select_db("votacion",$conectar);
$sql = "SELECT * FROM encuestas ORDER BY id DESC";
$req = mysql_query($sql);
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Sistema de encuestas</title>
	<link rel="stylesheet" href="estilos.css">
</head>
<body >
	<footer>
      <big><h1 align=center><a href="index.php">Bienvenido Usuario </a></h1></big>
    </footer>

    <div class="wrap">

    	<h1>SISTEMA DE ENCUESTA</h1>
    	<ul class="votacion index">
		<?php
			while($result = mysql_fetch_object($req)){
				echo '<li><a href="encuesta.php?id='.$result->id.'">'.$result->titulo.'</a></li>';
			}
		?>
		</ul>
    	<a href="agregar.php">+ Agregar nueva encuesta</a>
	</div>
	
	 <footer>
      <h1 align=center><a href="index.php"> Cerrar Cesión </a></h1></big>
    </footer>
</body>
</html>