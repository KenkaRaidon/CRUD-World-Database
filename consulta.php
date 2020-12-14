<html>

<head>
    <title>Consulta de paises</title>
</head>

<body>
    <h1>Informacion del pais</h1>
    <?php
   $ciudad = $_GET['id'];
   //echo $ciudad;
 
		$conexion = mysqli_connect("localhost", "root", "", "world") or die("Error en " . mysqli_error($conexion));
		if($conexion){
			$sql = "SELECT ci.id, ci.name, co.code, co.name as pais, ci.district, ci.population  FROM world.city ci, world.country co
				where ci.countrycode=co.code and id=$ciudad";
			$result = mysqli_query($conexion, $sql);
			while($row=mysqli_fetch_array($result)){
				$id = $row['id'];
				$n_ciudad = $row['name'];
				$codigo = $row['code'];
				$pais = $row['pais'];
				$distrito =  $row['district'];
				$poblacion = $row['population'];
				echo "<br>ID ciudad=$id";
				echo "<br>Ciudad=$n_ciudad";
				echo "<br>Codigo pais=$codigo";
				echo "<br>Pais=$pais";
				echo "<br>Distrito=$distrito";
				echo "<br>Poblacion=$poblacion";
			}
		}
		mysqli_close($conexion);
?>
    <br><br>
    <a href="ciudades.php">
        << Regresar </a>
</body>

</html>