<?php
$conexion = mysqli_connect("localhost", "root", "", "world") or die("Error en " . mysqli_error($conexion));
if ($conexion) {
    //$sql = "select * from ciudad_Paises order by ciudad";
    $sql="select ciudad_paises.*, city.Population from ciudad_Paises INNER JOIN city on city.ID = ciudad_Paises.id order by ciudad;";
    $result = mysqli_query($conexion, $sql);
    while ($row = mysqli_fetch_array($result)) {
        $id_ciudad = $row['id'];
        $nombre_ciudad = $row['ciudad'];
        $code = $row['code'];
        $nombre_pais = $row['pais'];
        $estado = $row['estado'];
        $poblacion=$row['Population'];
        echo "<tr><td>$id_ciudad</td><td>$nombre_ciudad</td><td>$nombre_pais</td>";

?>
<td><button id="btnEditar" type="button" class="fas fa-pencil-alt"
        onclick="traerDatos('<?php echo $code ?>', '<?php echo $estado ?>', '<?php echo $poblacion ?>');"></button>
    <i class="fas fa-search" onclick="location.href='consulta.php?id=<?php echo $id_ciudad; ?>';"></i>
    <i class="fas fa-trash-alt" onclick="location.href='borrar.php?id=<?php echo $id_ciudad; ?>';"></i>
</td>
</tr>
<?php
}
}
mysqli_close($conexion);
?>