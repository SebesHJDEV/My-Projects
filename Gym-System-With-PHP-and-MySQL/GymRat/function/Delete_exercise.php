<?php
include("conn.php");
$id_exercise = isset($_POST['id_exercise']) ? $_POST["id_exercise"] : "";
$sql = "DELETE FROM Exercises WHERE id_exercise = '$id_exercise'";
if ($conn->query($sql) === TRUE) {
    echo "Se elimino el registro.";
} else {
    echo "No se encontraron registros.";
}

header ("location: ../home.php");
die();
