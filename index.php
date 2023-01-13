<!DOCTYPE html>
<html>
<?php
session_start();
?>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>CriptoClub</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src="https://kit.fontawesome.com/e4d9b954f0.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="img/logos/favicon-32x32.png">
</head>

<body>
    <header class="header">
        <div class="container__menu">
            <div class="logo">
                <a href="./index.php"><img id="logonavbar" src="img/logos/logo_uem_oscuro.png" alt=""></a>
            </div>
            <div class="menu">
                <nav>
                    <ul>
                        <li><button><i id="icon1" onclick="darkmode('icon1')" class="fa-solid fa-moon"></i></button>
                        </li>
                        <li><a href="#inicio">Inicio</a></li>
                        <li><a href="#sobreNosotros">Nosotros</a></li>
                        <li><a href="#proyectos">Proyectos</a></li>
                        <li><a href="./login.php" id="buttonlogin">Login</a></li>
                        <li class="perfil" id="avatar"><a href="./profile.php"><img src="img/user.png" style="height: 40px;"></a>Profile
                        </li>
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
    <style style>
        :root {
            --dark-color: grey;
        }
    </style>
    <div class="container__cover" id="inicio">
        <div class="cover">
            <div class="text">
                <h1>Bienvenidos al CriptoClub</h1>
                <p>Queremos explorar el potencial que tiene la tecnología del <strong>blockchain</strong> y la
                    <strong>descentralización</strong> para cambiar la economía tal y como la conocemos.
                </p>
                <a href="#register"><input type="button" value="Registrarme"></a>
            </div>
            <div class="svg">
                <img src="img/cryptocurrency.svg" alt="">
            </div>
        </div>
    </div>

    <section id="sobreNosotros">
        <div>
            <h2 class="titulos-h2">Sobre el Club</h2>
            <p class="texto">El criptoclub es el primer club sobre criptomonedas en una universidad. Fue creado en el
                2021
                en pleno auge de las criptomonedas y bitcoin. El principal objetivo del club es explorar el potencial
                que tiene la tecnología del blockchain y la
                descentralización con el fin de educar a los participantes para usar esta herramienta en su futuro
                laboral y educativo. Se creo para educar a sus integrantes para que pudiesen invertir por su cuenta sin
                depender de terceros. </p>
            <div class="columnas-nosotros">
                <div class="item-nosotros">
                    <img class="img-nosotros" src="img/problem-solving.svg" height="300px" width="300px">
                    <h3 class="titulos-h3">Problem Solving</h3>
                    <p class="centrar-p">Intentamos buscar soluciones en blockchain para problemas cuotidianos del dia
                        dia.</p>
                </div>
                <div class="item-nosotros">
                    <img class="img-nosotros" src="img/networking-illustration.svg" height="300px" width="300px">
                    <h3 class="titulos-h3">Networking</h3>
                    <p class="centrar-p">Al ser un club que trata un tema tan actual, existe gente de todas las
                        titulaciones de la unviersidad. </p>
                </div>
                <div class="item-nosotros">
                    <img class="img-nosotros" src="img/social-event.svg" height="300px" width="300px">
                    <h3 class="titulos-h3">Social Events</h3>
                    <p class="centrar-p">Cada mes se organizan reuniones del club para tratar los temas mas relevantes
                        ademas de traer ponentes importantes del mundo cripto.</p>
                </div>
            </div>
        </div>
    </section>
    <section id="proyectos">
        <h2 class="titulos-h2">Proyectos del Club</h2>
        <div class="columnas">
            <div>
                <div class="item" id="bit2me">
                    <div class="partetext">
                        <h3 class="minitexto">Aprendizaje autónomo</h3>
                        <h2 class="item-h2">Bit2me x UEM</h2>
                        <p class="item-text">Bit2Me es una plataforma o exchange para comprar y vender criptomonedas de
                            una forma rápida y sencilla.
                            Cabe destacar que se trata del exchange mas grande de España.</p>
                        <p class="item-text">
                            Gracias a la Universidad hemos podido firmar un acuerdo para aprender con bit2me sobre las
                            criptomonedas desde 0. El curso se basará en
                            tres etapas de aprendizaje y una vez se hayan superado las tres fases con éxito, se
                            procederá a la fase final o "Criptochallenge"...</p>
                        <a href="#register" id="sabermas1"><input type="button" value="Saber más"></a>
                        <a href="./bit2me.php" id="leermas1"><input type="button" value="Leer más"></a>
                    </div>
                    <div class="parteimagen">
                        <img src="img/bit2me/bit2me.png" loading="lazy">
                    </div>
                </div>
            </div>
            <div class="diferenciado">
                <div class="item" id="ligabolsa">
                    <div class="parteimagen">
                        <img src="img/ligadebolsa/logo_ligadebolsa.png" alt="logo_ligadebolsa" loading="lazy">
                    </div>
                    <div class="partetext">
                        <h3 class="minitexto">Liga Universitaria</h3>
                        <h2 class="item-h2">Liga de Bolsa</h2>
                        <p class="item-text">Liga de Bolsa es la mayor comunidad de clubs de inversión de España.
                            Organizan competiciones de inversión con dinero real en las que podrás demostrar tus
                            cualidades como gestor.</p>
                        <p class="item-text">El criptoclub este 2022 va a formar parte de dicha liga para competir
                            contra las mejores
                            universidades de España...</p>
                        <a href="#register" id="sabermas2"><input type="button" value="Saber más"></a>
                        <a href="./ligabolsa.php" id="leermas2"><input type="button" value="Leer más"></a>
                    </div>
                </div>
            </div>
            <div>
                <div class="item" id="camaro">
                    <div class="partetext">
                        <h3 class="minitexto">Creación de NFTs</h3>
                        <h2 class="item-h2">Fundación Antonio Camaró</h2>
                        <p class="item-text">El objetivo de este proyecto es recaudar 40,000$ en plazo de 18 meses desde
                            su puesta en marcha, con el fin de financiar el proyecto social ZÉOSIS de la fundación.
                            Además de
                            acercar oriente a occidente a través del arte y el dialogo.</p>
                        <p class="item-text">Para ello se realizará una creación de una colección única de NFT's y su
                            posterior venta y comercialización. Con la colaboración
                            de los estudiantes del CriptoClub de la Universidad Europea...</p>
                        <a href="#register" id="sabermas3"><input type="button" value="Saber más"></a>
                        <a href="./fundacioncamaro.php" id="leermas3"><input type="button" value="Leer más"></a>
                    </div>
                    <div class="parteimagen">
                        <img src="img/antoniocamaro/antoniocamarologo.png" loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="register">
        <div class="container_apuntame">
            <form action="registro_process.php" method="post">
                <div class="title">Regístrate</div>
                <div class="input-box underline">
                    <input type="text" name="nombre" placeholder="Nombre" required>
                    <div class="underline"></div>
                </div>
                <div class="input-box underline">
                    <input type="text" name="apellidos" placeholder="Apellidos" required>
                    <div class="underline"></div>
                </div>
                <div class="input-box underline">
                    <input type="text" name="numexpediente" placeholder="Número de expediente" maxlength="8" required>
                    <div class="underline"></div>
                </div>
                <div class="input-box underline">
                    <input type="text" name="email" placeholder="Correo electrónico" required>
                    <div class="underline"></div>
                </div>
                <div class="input-box underline">
                    <input type="password" name="password" placeholder="Contraseña" required>
                    <div class="underline"></div>
                </div>
                <div class="input-box underline">
                    <input type="password" placeholder="Repite la Contraseña" required>
                    <div class="underline"></div>
                </div>
                <div class="input-box button">
                    <input type="submit" name="" value="Registrarme">
                </div>
            </form>
        </div>
    </section>
    <?php
    if (isset($_SESSION['numexpediente'])) {
        ?>
        <script>
            var sabermasdisplay1 = document.getElementById("sabermas1");
            sabermasdisplay1.style.display = "none"
            var sabermasdisplay2 = document.getElementById("sabermas2");
            sabermasdisplay2.style.display = "none"
            var sabermasdisplay3 = document.getElementById("sabermas3");
            sabermasdisplay3.style.display = "none"
            var leermasdisplay1 = document.getElementById("leermas1");
            leermasdisplay1.style.display = "block"
            var leermasdisplay2 = document.getElementById("leermas2");
            leermasdisplay2.style.display = "block"
            var leermasdisplay3 = document.getElementById("leermas3");
            leermasdisplay3.style.display = "block"
            
        </script>
        <?php
    }
    ?>
    <footer>
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
<!-- SCRIPT -->
<script src='main.js'></script>

</html>