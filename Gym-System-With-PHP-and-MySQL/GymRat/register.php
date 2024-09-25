<!DOCTYPE html>
<html lang="es">
<?php require_once("template/header.php"); ?>
<script src="js/register.js"></script>
<link rel="stylesheet" href="http://localhost/gymrat/css/register.css">

<body>
    <div class="prin_register">
        <h1>Register</h1>
        <div class="cont_register">
            <form action="function/crear_user.php" method="post" id="registroForm">
                <div class="grid">
                <div class="mb-3">
                        <label class="form-label">Nickname</label>
                        <input type="text" id="nickname" name="nickname" class="form-control" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" id="name" name="name" class="form-control" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Surnames</label>
                        <input type="text" id="surnames" name="surnames" class="form-control" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="text" id="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" id="password" name="password" class="form-control" id="exampleInputPassword1">
                        <p style="display: none; color: red;"  id="error" >!La contraseña debe tiener al menos 8 caracteres!</p>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Confirm password</label>
                        <input type="password" id="confirm"  class="form-control" id="exampleInputPassword1">
                    </div>
                </div>
                <br>
                <div class="a">
                    <button id="Enviar" class="btn btn-primary custom-button">registrarse</button>
                    <br>
                    <br>
                    <p><a style="color: black;" href="index.php">Volver a Login</a></p>
                </div>
            </form>

        </div>
    </div>
    <br><br>
</body>


</html>