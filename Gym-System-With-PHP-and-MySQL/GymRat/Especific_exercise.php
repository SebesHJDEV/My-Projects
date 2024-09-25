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
    <script src="js/Especific_exercise.js"></script>
    <link rel="stylesheet" href="http://localhost/gymrat/css/register.css">
    <link rel="stylesheet" href="http://localhost/gymrat/Especific_exercise.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Show exercise</title>
</head>

<body>
    <?php
    include("template/nav.php");
    include("function/consul_exercise.php");
    ?>



    <h1 style="text-align: center;"><?= $exercise_name ?></h1><br>
    <div class="cont_img">
        <img src="<?= $image_url ?>" class="" width="700px" alt="...">
    </div>
    <div class="prin_register">
        <div class="cont_register">
            <div class="cont_show">
                <div>
                    <h1 style="text-align: center;"><?= $exercise_name ?></h1><br>
                    <div class="mb-3">
                        <div class="form-control">
                            <h1>Description</h1>
                            <p> <?= $description ?> </p>
                        </div>
                    </div>
                </div>
                <div>
                    <p>My weights</p>
                    <ul class="list-group">
                        <?php include("function/Show_weight.php"); ?>
                    </ul>
                    <form action="function/add_weight.php" id="registroForm" method="post">
                        <div class="mb-3">
                            <br>
                            <label class="form-label">Add new weight</label>
                            <input type="hidden" name="id_exercise" value="<?= $id_exercise ?>" class="form-control">
                            <input type="text" id="weight" name="weight" class="form-control" placeholder="Exercise">
                        </div>
                        <div class="a">
                            <button id="Enviar" class="btn btn-primary custom-button">Add</button>
                            <br>
                        </div>
                    </form>
                </div>
            </div>
            <?php include("Grafica.php") ?>
        </div>
    </div>
</body>
<?php include("template/footer.php") ?>

</html>