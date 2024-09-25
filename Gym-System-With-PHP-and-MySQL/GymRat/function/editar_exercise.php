<?php
$exercise_name = isset($_POST['exercise_name']) ? $_POST["exercise_name"] : "";
$description = isset($_POST['description']) ? $_POST["description"] : "";
$image_url = isset($_POST['image_url']) ? $_POST["image_url"] : "";
$id_exercise = isset($_POST['id_exercise']) ? $_POST["id_exercise"] : "";
$created_by= $_SESSION['id_user'];
include("conn.php");
$sql = "UPDATE Exercises SET exercise_name='$exercise_name', description='$description', image_url='$image_url' WHERE id_exercise='$id_exercise'";
if ($conn->query($sql) === TRUE) {
    echo "<br>Se actualizó el registro.";
} else {
    echo "Error al actualizar el registro: " . $conn->error;
}
header("Location: ../home.php");
die();
