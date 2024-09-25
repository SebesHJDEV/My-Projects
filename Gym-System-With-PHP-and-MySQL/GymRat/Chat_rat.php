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
<style>
    body {
        font-family: Arial, sans-serif;
    }

    .caja {
        background-color: antiquewhite;
        border: 1px solid #ccc;
        padding: 20px;
        margin-top: 20px;
        display: none;
    }
</style>

<body>
    <?php include("template/nav.php") ?>


    <h1>Ejemplo de Respuesta</h1>

    <div>
        <label>Respuesta Gpt:</label>
        <p id="output"> </p>
    </div>
    <br>




    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Pregunta</label>
        <input type="text" id="prompt" name="prompt" class="form-control" aria-describedby="Pregunta">
        <button id="generate"> enviar</button>
    </div>


    <script>
        const API_KEY = '*****';
        async function GPTChat(mensaje) {
            const res = await fetch('https://api.openai.com/v1/chat/completions', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Authorization': 'Bearer ' + API_KEY
                },
                body: JSON.stringify({
                    model: 'gpt-3.5-turbo',
                    messages: [
                        {
                            "role":"user",
                            "content":mensaje+'dame una respues muy muy corta'
                        }
                    ],
                    max_tokens: 30,
                    temperature: 0.4,
                })
            })

            return await res.json()
        }

        const prompt = document.querySelector('#prompt');
        const enviar = document.querySelector('#generate');
        const output = document.querySelector('#output');

        enviar.addEventListener('click',async()=>{if (!prompt.value) return
        const respuesta = await GPTChat(prompt.value)
        console.log(respuesta)

        output.innerHTML= respuesta.choices[0].message.content

        })
    </script>






    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</body>
<?php include("template/footer.php") ?>

</html>