<!DOCTYPE html>
<html lang="es">
<?php require_once("template/header.php"); ?>

<body>
        <div class="prin">
            <h1>Login</h1><br>
            <div class="cont">
                <form action="function/login.php" method="post" id="registroForm">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <br>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <br>
                    <div class="a">
                        <button type="submit" class="btn btn-primary custom-button">Login</button>
                        <p>¿Necesitas una cuenta? <a href="register.php">registrarse</a></p>
                    </div>
                    <br>
                </form>
            </div>
        </div>
</body>
<script>
    document.getElementById('registroForm').addEventListener('submit', function(event) {
        // Evitar que el formulario se envíe automáticamente
        event.preventDefault();
        // Obtener los valores de los campos del formulario
        var email = document.querySelector('input[name="email"]').value.trim();
        var password = document.querySelector('input[name="password"]').value.trim();

        // Validar si algún campo está vacío
        if (email === '' || password === '') {
            alert('Por favor, complete todos los campos.');
        } else {
            // Si no hay campos vacíos, enviar el formulario
            this.submit();
        }
    });
</script>

</html>