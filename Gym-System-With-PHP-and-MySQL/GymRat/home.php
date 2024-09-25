<?php
session_start();

// Verificar si se ha hecho clic en el enlace "cerrar sesión"
if (isset($_GET['logout'])) {
    // Destruir todas las variables de sesión
    session_destroy();
    // Redirigir al usuario a la página de inicio de sesión o a cualquier otra página deseada
    header("Location: login.php");
    exit; // Asegúrate de que el script se detenga después de redirigir
}

$img = "img/" . $_SESSION["img"];

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="nav_barr.css">
    <link rel="stylesheet" href="home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Home</title>
</head>

<body>
<?php include("template/nav.php") ?>

    <h1 class="title">My Exercises</h1><br>
    <div class="cont">
        <div class="cont_exercises">
            <div style="margin-top: 5%;" >
                <div class="card" style="width: 18rem;">
                    <img src="https://web-back.perfectgym.com/sites/default/files/styles/900x/public/equipment%20%286%29.webp?itok=UbaJqjIr" width="200px" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Create a new exercise</h5>
                        <a href="Create_exercise.php" class="btn btn-primary">➕</a>
                    </div>
                </div>
            </div>
        
            <?php include("function/Show_exercise.php") ?>
        </div>
    </div>

</body>
<?php include("template/footer.php") ?>

</html>