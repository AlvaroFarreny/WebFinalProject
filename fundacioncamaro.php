<!DOCTYPE html>
<html>
<?php
session_start();
?>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>LigadeBolsa - CriptoClub</title>
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
                        <li class="perfil" id="avatar"><a href="./profile.php"><img src="img/user.png"
                                    style="height: 40px;"></a>Profile</li>
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
    <div class="inicioFunda">
        <div class="container_inicio">
            <div class="antoniocamarologo">
                <img src="img/antoniocamaro/antoniocamarologo.png" alt="antoniocamarologo" loading="lazy">
            </div>
        </div>
        <h2 class="titulos-h2" id="titulo_Funda"> Proyecto - NFTs Fundación Camaró</h2>
    </div>
    <section class="introduccion">
        <div>
            <h3 class="titulos-h3"><strong>¿Quiénes somos?</strong></h3>
            <p class="texto">Creemos en las personas y en la humanidad, por eso nuestra principal misión es promover al ser humano, generando, promocionando y desarrollando proyectos centrados en las personas, su expresión y reconocimiento. Promovemos la convivencia, tolerancia y reivindicación de las personas y de la sociedad.
Queremos contribuir al desarrollo de una conciencia ética en el ser humano y en la sociedad, estimulando la curiosidad y acelerando el descubrimiento. Promovemos la expresión del arte y la cultura en diferentes ámbitos y creamos alianzas y unión entre la cultura y el mundo.
Formulamos y ejecutamos proyectos de cooperación internacional que promuevan nuevas estrategias e intercambio en materia de proyectos innovadores y creativos.</p>
        </div>
    </section>
    <section class="desarrollo">
        <div>
            <h3 class="titulos-h3"><strong>¿Qué vamos a hacer?</strong></h3>
            <p class="texto">Se realizará una creación de una colección única de NFT's y su posterior venta y comercialización. Con la colaboración de los estudiantes del CriptoClub de la Universidad Europea.</p>
        </div>
    </section>
    <footer>
        <div class="footer">
            <div class="social-media">
                <button><a href="https://twitter.com/"><i class="fa-brands fa-twitter"></i></a></button>
                <button><a href="https://www.instagram.com/criptoclubuem/"><i
                            class="fa-brands fa-instagram"></i></a></button>
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