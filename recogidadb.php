<?php
$nombre_apellidos=$_GET['nombre_apellidos'];
$localidad=$_GET['localidad'];
$email=$_GET['email'];
$telefono=$_GET['telefono'];
$fecha=$_GET['fecha'];
$link = mysql_connect('localhost','cuenca','cuenca');
mysql_select_db('sorteo');

$query = "INSERT INTO sorteoplay4 VALUES (NULL,'".$nombre_apellidos."','".$localidad."','".$email."','".$telefono."','".$fecha."'
$result = mysql_query($query);

if($result){


echo '<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Mensaje de confirmaci&oacute;n</title>
<link href="estilos.css" rel="stylesheet" type="text/css" />
</head>
<body>
 <div>
<p>Tu mensaje ha sido enviado</p>
<a href="index.html"><p>Volver</p></a>
</div>
</body>
</html>';
}
else '<html>
head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Mensaje de confirmaci&oacute;n</title>
<link href="estilos.css" rel="stylesheet" type="text/css" />
</head>
<body>
 <div>
<p> Tu inscripcion ha fallado, vuelve a inentarlo.<br/></p>
<a href="index.html"><p>Volver</p></a>
</div>
</body>
</html>';
};
mysql_close($link);
?>