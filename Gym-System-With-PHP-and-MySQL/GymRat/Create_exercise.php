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
    <title>New exercise</title>
</head>

<body>
    <?php include("template/nav.php") ?>
    <input id="img_user" value="<?php echo $img; ?>" type="hidden">
    <div class="prin_register">
        <h1>New exercise</h1>
        <div class="cont_register">
            <form action="function/new_exercise.php" method="post" id="registroForm">
                <div class="grid">
                    <div class="mb-3">
                        <label class="form-label">Exercise name</label>
                        <input type="text" id="nickname" name="exercise_name" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Image url</label>

                        <input type="Des" id="surnames" name="image_url" class="form-control" placeholder="url image">
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Exercise Description</label>
                    <textarea id="name" name="description" class="form-control" placeholder="Description..."></textarea>
                </div>
                <div>
                    <button id="Enviar" class="btn btn-primary custom-button">Create</button>
                    <br>
                </div>
            </form>
        </div>
    </div>
    <br><br>
</body>
<?php include("template/footer.php") ?>

</html>