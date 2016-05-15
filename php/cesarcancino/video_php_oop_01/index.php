<?php require_once("class/class.php"); ?>
<html>
<head>
	<title>Title</title>
</head>
<body>
	<?php
	$persona->iniciar_nombre("Juan José Saavedra Macco");
	$persona->iniciar_edad("41");
	echo "Nombre: " . $persona->mostrar_nombre()."<br>";
	echo "Edad: " . $persona->mostrar_edad()."<br>";	
	echo "Nomero de personas: " . $persona->contar_nombres();

	?>
</body>
</html>