<?php
if (isset($_POST)) {
    $conexion = mysqli_connect("localhost", "root", "", "world") or die("Error en " . mysqli_error($conexion));
    $codigo = $_POST['ciudad_id'];
    $ciudad = $_POST['ciudad'];
    $p = $_POST['codigo'];
    $d = $_POST['estado'];
    $pob = $_POST['poblacion'];
    if ($conexion) {
        $sql = "UPDATE city SET name='$ciudad', CountryCode='$p', District='$d', Population=$pob WHERE id=$codigo";
        if (mysqli_query($conexion, $sql)) {
            echo "Se guardo correctamente la ciudad " . $ciudad." ".$p;
        } else {
            echo "No se guardo ".$codigo." ".$ciudad." ".$p." ".$d." ".$pob;
        }
    }
}
?>
