<?php
session_start();
$weight = isset($_POST['weight']) ? $_POST["weight"] : "";
$id_exercise = isset($_POST['id_exercise']) ? $_POST["id_exercise"] : "";
$id_user = $_SESSION['id_user'];
date_default_timezone_set('America/Costa_Rica');
$date_recorded = date('l, d F Y');
echo $date_recorded;
include("conn.php");

$sql = "INSERT into ExerciseWeights (id_user, id_exercise, weight, date_recorded) values ('$id_user','$id_exercise','$weight','$date_recorded')";

if ($conn->query($sql) === TRUE) {
    echo "Se agrego el registro" . "<br>";
} else {
    echo "No se encontraron registros" . "<br>";
}
?>
<form id="myForm" action="../Especific_exercise.php" method="post">
    <input type="hidden" name="id_exercise" value="<?=$id_exercise; ?>">
</form>

<script>
    window.onload = function() {
        document.getElementById('myForm').submit();
    };
</script>