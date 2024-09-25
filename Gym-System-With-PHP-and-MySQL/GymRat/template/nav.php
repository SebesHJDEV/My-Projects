<nav class="nav_bar">
    <div class="content">
        <div class="titulo">
            <div class="perfil" style="background-image: url('<?php echo $img; ?>'); width: 64px; height: 64px; background-size: cover;"></div>
            <h1 style="margin-left: 50px;"> Perfil de <?= $_SESSION["nickname"] ?></h1>
        </div>
        <div class="lista_nav">
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="Chat_rat.php">Chat Rat</a></li>
                <li><a href="Editar_perfil.php">Editar</a></li>
                <li><a href="index.php?logout=true">Cerrar sesión</a></li><!-- Añade el parámetro logout=true para indicar que se ha hecho clic en cerrar sesión -->
            </ul>
        </div>
        <br><br><br>
    </div>
</nav>