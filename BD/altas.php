<?php
if (isset($_POST)) {
    $ciud = $_POST['ciudad'];
    $p = $_POST['pais'];
    $d = $_POST['distrito'];
    $pob = $_POST['poblacion'];

    $conexion = mysqli_connect("localhost", "root", "", "world") or die("Error en " . mysqli_error($conexion));
    if ($conexion) {
        $sql = "insert into city values(0, '$ciud', '$p', '$d', $pob);";
        if (mysqli_query($conexion, $sql)) {
            echo "se registro satisfactoriamente la ciudad";
        } else {
            echo "ocurrio un error";
        }
    }
    mysqli_close($conexion);
} else {
    echo "No hay datos";
}
?>