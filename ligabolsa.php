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
                <a href="./index.php"><img src="img/logos/logo_uem_oscuro.png" alt="logo_uem_claro_"></a>
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
    <div class="inicioLigaBolsa">
        <div class="container_inicio">
            <div class="slider_lupa_liga-de-bolsa">
                <img src="img/ligadebolsa/slider_lupa_ligadebolsa.png" alt="slider_lupa_ligadebolsa" loading="lazy">
            </div>
            <div class="liga_de_bolsa_logo">
                <img src="img/ligadebolsa/logo_ligadebolsa.png" alt="logo_ligadebolsa" loading="lazy">
            </div>
        </div>
        <h2 class="titulos-h2" id="titulo_LigaBolsa"> Proyecto - Liga de Bolsa</h2>
    </div>
    <section class="introduccion">
        <div>
            <h3 class="titulos-h3"><strong>¿Quiénes somos?</strong></h3>
            <p class="texto">Liga de Bolsa es la mayor comunidad de clubs de inversión de España. Organizamos competiciones de inversión con dinero real en las que podrás demostrar tus cualidades como gestor. Únete y compite por los increíbles premios.</p>
        </div>
    </section>
    <section class="desarrollo">
        <div>
            <h3 class="titulos-h3"><strong>¿Qué vamos a hacer?</strong></h3>
            <p class="texto">La Liga de Bolsa Universitaria comienza el día 14 de noviembre de 2022 y finaliza el último día de bolsa de octubre de 2023. Dura prácticamente un año y en cuanto acaba una edición comienza la siguiente. Ten en cuenta que el plazo de inscripción finaliza el 14 de diciembre, un mes después del inicio de la Liga.
<br>
            El objetivo de la Liga es conseguir junto con tu club de bolsa la mayor rentabilidad posible a lo largo de la competición. Para ello, competirás contra otros clubes de inversión de distintas universidades y escuelas de negocio de toda España.
Habrá premios para los 10 clubes con mayor rentabilidad al finalizar la competición, así como un premio mensual al club con mayor rendimiento cada mes.
            </p>
        </div>
    </section>
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