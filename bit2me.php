<!DOCTYPE html>
<html>
<?php
session_start();
?>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Bit2me - CriptoClub</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='proyectos.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <link rel="shortcut icon" href="img/logos/favicon-32x32.png">
</head>
<body>
    <header class="header">
        <div class="container__menu">
            <div class="logo">
                <a href="./index.php"><img src="img/logos/logo_uem_oscuro.png" alt=""></a>
            </div>
            <div class="menu">
                <nav>
                    <ul>
                        <li><button onclick="darkmode()"><i class="fa-solid fa-moon"></i></button></li>
                        <li><a href="./index.php#inicio">Inicio</a></li>
                        <li><a href="./index.php#sobreNosotros">Nosotros</a></li>
                        <li><a href="./index.php#proyectos">Proyectos</a></li>
                        <li><a href="./login.php" id="buttonlogin">Login</a></li>
                        <li class="perfil" id="avatar"><a href="./profile.php"><img src="img/user.png" style="height: 40px;"></a>Profile</li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <?php
    if (isset($_SESSION['numexpediente'])) {
        ?>
        <script>
            var buttonlogindisplay = document.getElementById("buttonlogin");
            buttonlogindisplay.style.display = "none";
            var avatardisplay = document.getElementById("avatar");
            avatardisplay.style.display = "block"
        </script>
        <?php
    }
    ?>
    <div class="inicioBit2me">
        <div class="container_inicio">
            <div class="astronauta">
                <img src="img/bit2me/astronauta.png" alt="astronauta_bit2me" loading="lazy">
            </div>
            <div class="uem_logo">
                <img src="img/bit2me/UEM_logo_blanco.png" alt="uemlogo_blanco_bit2me">
            </div>
        </div>
        <h2 class="titulos-h2" id="titulo_bit2me"> Proyecto - Bit 2 Me</h2>
    </div>
    <section class="introduccion">
        <div>
            <h3 class="titulos-h3"><strong>¿En qué consiste?</strong></h3>
            <p class="texto">En este viaje hacia el conocimiento de la tecnología blockchain, durante este semestre explorarás desde cero las diferentes aplicaciones que van desde el surgimiento de las criptomonedas y la economía de los tokens, los aspectos regulatorios que las envuelven hasta la aplicación en otros ámbitos de la industria, la empresa y la consultoría.</p>
        </div>
    </section>
    <section class="desarrollo">
        <div>
            <h3 class="titulos-h3"><strong>¿Qué vamos a hacer</strong></h3>
            <p class="texto">MISIÓN: Aprender todos los conceptos claves para iniciarte de forma segura en el entorno Blockchain. Visita a tu ritmo los contenidos que se indiquen en tu hoja de misión antes de la fecha de llegada al Checkpoint.

Tras completar tu itinerario formativo tendrás todos los conocimientos necesarios para enfrentarte al CryptoChallenge, del que podrás obtener premios y recompensas por tus ideas.</p>
        </div>
    </section>
    <section class="roadmap">
        <div>
            <h3 class="titulos-h3"><strong>Road Map</strong></h3>
            <img src="img/bit2me/roadmapBit2me.png" alt="roadmap_bit2me_example" loading="lazy">
        </div>
    </section>
    <footer>
        <footer>
            <div class="footer">
                <div class="social-media">
                    <button><a href="https://twitter.com/"><i class="fa-brands fa-twitter"></i></a></button>
                    <button><a href="https://www.instagram.com/criptoclubuem/"><i class="fa-brands fa-instagram"></i></a></button>
                    <button><a href="https://www.linkedin.com/company/criptoclub/"><i
                                class="fa-brands fa-linkedin"></i></a></button>
                </div>
            </div>
            <div class="copyright">
                <p>© 2021 - 2022 CriptoClub.</p>
            </div>
        </footer>
</body>
</html>