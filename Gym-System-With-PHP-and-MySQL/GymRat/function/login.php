<?php
$email = isset($_POST['email']) ? $_POST["email"] : "";
$clave = isset($_POST['password']) ? $_POST["password"] : "";
include("conn.php");
// Preparar la consulta SQL
$sql = "SELECT * FROM users WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

// Verificar si se encontró un correo electrónico en la base de datos
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // Verificar si la contraseña coincide
        if (password_verify($clave, $row["password"])) {
            // Iniciar sesión y establecer variables de sesión
            session_start();
            $_SESSION["id_user"] = $row["id_user"];
            $_SESSION["nickname"] = $row["nickname"];
            $_SESSION["email"] = $row["email"];
            $_SESSION["name"] = $row["name"];
            $_SESSION["surnames"] = $row["surnames"];
            $_SESSION["img"] = $row["img"];
            // Redireccionar al usuario a la página de inicio
            header("location: ../home.php");
            exit; // Detener la ejecución del script después de redireccionar
        } else {
            // Contraseña incorrecta
            echo "La contraseña proporcionada no es correcta.";
            header("location: ../error.php");
        }
    }
} else {
    // Correo electrónico no encontrado en la base de datos
    echo "No se encontró ninguna cuenta asociada a ese correo electrónico.";
    header("location: ../error.php");
}