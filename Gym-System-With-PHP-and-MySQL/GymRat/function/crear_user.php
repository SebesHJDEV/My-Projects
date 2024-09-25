<?php
include("conn.php");
$name = isset($_POST['name']) ? $_POST["name"] : "";
$surnames = isset($_POST['surnames']) ? $_POST["surnames"] : "";
$nickname = isset($_POST['nickname']) ? $_POST["nickname"] : "";
$email = isset($_POST['email']) ? $_POST["email"] : "";
$password = isset($_POST['password']) ? password_hash($_POST["password"], PASSWORD_BCRYPT) : "";
$a = $_POST["password"];
echo $a . "<br>";
echo $password . "<br>";
$img = "Basica.png";
$date = date('Y-m-d');
$role = "user";
if ($conn->connect_error) {
    echo "Error en la conexión a la base de datos: " . $conn->connect_error;
} else {
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($sql);
    // Verificar si hay filas devueltas
    if ($result) {
        if ($result->num_rows > 0) {
            header("Location: ../Correo_error.html");
        } else {
            // Utiliza una sentencia preparada para la inserción de datos
            $sql = "INSERT INTO users (nickname, email, password, name, img, surnames, registration_date, account_role) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ssssssss", $nickname, $email, $password, $name, $img, $surnames, $date, $role);
            $stmt->execute();
            header("Location: ../index.php");
            die();
        }
    } else {
        echo "Error en la consulta SQL: " . $conn->error;
    }
}
