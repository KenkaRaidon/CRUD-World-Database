<html>

<head>
    <title>Consulta de paises</title>
</head>

<body>
    <h1>Informacion del pais</h1>
    <?php
   $ciudad = $_POST['id'];
   //echo $ciudad;
 
		$conexion = mysqli_connect("localhost", "root", "", "world") or die("Error en " . mysqli_error($conexion));
		if($conexion){
			$sql = "delete from city where id=$ciudad";
			if(mysqli_query($conexion, $sql)){
				echo "se elimino el registro satisfactoriamente de la ciudad";
			}else{
				echo "ocurrio un error";
			}
		}
		mysqli_close($conexion);
?>
    <br><br>
    <a href="ciudades.php">
        << Regresar </a>
</body>

</html>