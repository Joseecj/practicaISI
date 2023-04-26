<!DOCTYPE html>
<html>
<head>
	<title>VGDIFF</title>
	<link rel="stylesheet" href="index.css">
</head>
<body>
	<h1>VGDIFF</h1>
	<h2>Comparador de precios de videojuegos</h2>
	
	<form method="GET" action="vgdiff.php">
		<label>Buscar videojuego:</label>
		<input type="text" name="nombre-videojuego" placeholder="Introduzca el nombre del videojuego">
		<input type="submit" value="Buscar">
	</form>

<?php
if(isset($_GET['nombre-videojuego'])){
	$nombre_videojuego = urlencode($_GET['nombre-videojuego']);
	$curl=curl_init();
	curl_setopt($curl, CURLOPT_URL,"https://www.google.com/search?q=$nombre_videojuego+precio&hl=es&source=lnms&tbm=shop&sa=X&ved=2ahUKEwjw382glMf-AhUFY8AKHXDeB6UQ_AUoAXoECAMQAw&biw=1536&bih=703&dpr=1.25");
	curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	$result=curl_exec($curl);
	curl_close($curl);

	echo $result;
}
?>
</body>
</html>