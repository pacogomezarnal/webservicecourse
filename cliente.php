<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Cliente Prueba API</title>
</head>
<?php
	$jsonObj = file_get_contents('http://edutictic.esy.es/api/api.php?accion=corredores');
	echo $jsonObj;
?>
<body>
</body>
</html>