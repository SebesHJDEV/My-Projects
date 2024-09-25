<?PHP session_start();
$img =  'img/' . $_SESSION["img"]; ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="nav_barr.css">
    <link rel="stylesheet" href="home.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="js/cargar_foto.js"></script>
    <link rel="stylesheet" href="http://localhost/gymrat/css/register.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Editar perfil</title>
</head>

<body>
    <?php include("template/nav.php") ?>
    <input id="img_user" value="<?php echo $img; ?>" type="hidden">
    <div class="prin_register">
        <h1>Editar perfil</h1>
        <div class="cont_register">
            <form action="function/editar_user.php" method="post" enctype="multipart/form-data" id="registroForm">
                <div class="grid">
                    <div class="mb-3">
                        <label class="form-label">Nickname</label>
                        <input type="text" id="nickname" name="nickname" class="form-control" value="<?php echo $_SESSION["nickname"]; ?>" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" id="name" name="name" class="form-control" value="<?php echo $_SESSION["name"]; ?>" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Surnames</label>
                        <input type="text" id="surnames" name="surnames" class="form-control" value="<?php echo $_SESSION["surnames"]; ?>" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="text" id="email" class="form-control" value="<?php echo $_SESSION["email"]; ?>" aria-describedby="emailHelp" readonly>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Foto de perfil</label><br>
                    <input type="file" accept="image/*" id="input-imagen" name="imagen"><br>
                    <img id="imagen" width="200px" alt="">
                </div>
                <br>
                <div class="a">
                    <button id="Enviar" class="btn btn-primary custom-button">Editar</button>
                    <br>
                </div>
            </form>

        </div>
    </div>
    <br><br>
</body>
<?php include("template/footer.php") ?>

</html>