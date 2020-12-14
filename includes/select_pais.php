<?php
$conexion = mysqli_connect("localhost", "root", "", "world") or die("Error en " . mysqli_error($conexion));
if ($conexion) {
    $sql = "SELECT code, name from country order by name";
    $result = mysqli_query($conexion, $sql);
    while ($row = mysqli_fetch_array($result)) {
        $id = $row['code'];
        $nombre_pais = $row['name'];
        echo "<option value=" . $id . ">" . $nombre_pais . "</option>";
    }
}
mysqli_close($conexion);

?>