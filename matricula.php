<!DOCTYPE html>
<html>
<head>
   <title>Matrícula final</title>
</head>
<body>

<?php

$conexion = mysqli_connect("localhost", "root", "", "academy")
            or die("Hubo problemas en la conexión");

$nombre = $_POST['nombre'];
$cedula = $_POST['cedula'];
$horario = $_POST['horario'];
$curso = $_POST['codigocurso'];


$query = "INSERT INTO ingresos (nombre, cedula, horario, t_curso)
          VALUES ('$nombre', '$cedula', '$horario', '$curso')";

mysqli_query($conexion, $query)
    or die("Hubo problemas con el insert: " . mysqli_error($conexion));

mysqli_close($conexion);

echo "Fue matriculado con éxito";

?>

</body>
</html>