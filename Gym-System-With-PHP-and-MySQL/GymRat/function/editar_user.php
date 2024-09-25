<?php
session_start();
$id_user = $_SESSION["id_user"];
$name_img = $_SESSION["id_user"] . ".png";

$name = isset($_POST['name']) ? $_POST["name"] : "";
$surnames = isset($_POST['surnames']) ? $_POST["surnames"] : "";
$nickname = isset($_POST['nickname']) ? $_POST["nickname"] : "";

$server = "localhost";
$username = "root";
$password = "";
$database = "gymrats";
$conn = new mysqli($server, $username, $password, $database);
if ($conn->connect_error) {
    die("Conexion fallida: " . $conn->connect_error);
}
$sql = "UPDATE users SET nickname='$nickname', name='$name',img = '$name_img', surnames='$surnames' WHERE id_user='$id_user' ";
if ($conn->query($sql) === TRUE) {
    echo "<br>Se actualizó el registro.";
    $_SESSION["name"] = $name;
    $_SESSION["surnames"] = $surnames;
    $_SESSION["nickname"] = $nickname;
} else {
    echo "Error al actualizar el registro: " . $conn->error;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar si se ha subido un archivo
    if (isset($_FILES["imagen"])) {
        if ($_FILES["imagen"]["error"] == UPLOAD_ERR_OK) {
            // Nuevo nombre para el archivo
            $nuevo_nombre = $name_img;
            // Directorio donde deseas guardar las imágenes subidas
            $directorio_destino = "C:\\xampp\\htdocs\\GymRat\\img\\";
            // Ruta completa del archivo
            $ruta_completa = $directorio_destino . $nuevo_nombre;
            // Verificar si el archivo ya existe y eliminarlo si es necesario
            if (file_exists($ruta_completa)) {
                unlink($ruta_completa); // Eliminar el archivo existente
            }
            // Mover el archivo a la ubicación deseada con el nuevo nombre
            if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta_completa)) {
                echo "Archivo subido correctamente.";
                $_SESSION["img"] = $name_img;
                // se agregan los datos editados a la base de Datos
            } else {
                echo "Error al mover el archivo.";
            }
        } else {
            echo "Error al subir el archivo: " . $_FILES["imagen"]["error"];
        }
    } else {
        echo "No se ha seleccionado ningún archivo para subir";
    }
}
header("Location: ../home.php");
die();
