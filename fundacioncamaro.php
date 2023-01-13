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
            <h3 class="titulos-h3"><strong>¿En qué consiste</strong></h3>
            <p class="texto">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ullamcorper laoreet
                velit at ultrices. Duis quis eleifend mauris. Vivamus finibus, risus sit amet dapibus sagittis, lacus
                magna sodales neque, eu fermentum nunc dui eu mi. Praesent quis malesuada purus. In tortor erat, iaculis
                ac mi nec, placerat sagittis ipsum. Proin id tincidunt risus, et suscipit enim. Phasellus euismod vel
                enim in finibus. Phasellus in leo at urna tincidunt interdum placerat a sem. Vestibulum ut commodo
                ipsum.

                Proin commodo tristique nibh nec mollis. Proin viverra neque vitae nisl condimentum, eu iaculis eros
                commodo. Maecenas consequat non augue id commodo. Integer facilisis, nisi nec accumsan vestibulum, orci
                erat bibendum ligula, efficitur mattis justo orci sed tellus. Cras nibh felis, consequat quis posuere
                non, tincidunt a augue. Nulla diam ante, ornare non cursus et, semper eget ipsum. Morbi ornare nunc sed
                augue tincidunt, quis consequat massa iaculis. Duis non tempor ipsum. Vivamus aliquet bibendum orci, in
                placerat odio luctus eget. Cras arcu eros, gravida non leo quis, ultricies mattis ante. Nulla venenatis
                leo eu magna varius, eget ultrices mauris aliquam.</p>
        </div>
    </section>
    <section class="desarrollo">
        <div>
            <h3 class="titulos-h3"><strong>¿Qué vamos a hacer</strong></h3>
            <p class="texto">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tincidunt est in semper
                ullamcorper. Maecenas nec accumsan purus. Nam accumsan quam a porta convallis. In posuere lorem sed
                massa molestie, sit amet mollis urna aliquam. Proin in elementum erat, in volutpat diam. Morbi ipsum
                lacus, sagittis eget viverra eget, cursus at lectus. Suspendisse pellentesque ligula nunc, nec suscipit
                turpis congue nec. Quisque aliquet luctus metus id pretium. Sed tempus viverra tristique. Suspendisse
                commodo lorem scelerisque, congue augue id, auctor tortor.

                Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Quisque
                tincidunt elit quis porta bibendum. In consequat, metus et fermentum feugiat, odio felis vulputate
                felis, sed semper magna nisi at erat. Orci varius natoque penatibus et magnis dis parturient montes,
                nascetur ridiculus mus. Sed tincidunt diam purus, nec convallis velit gravida sit amet. Phasellus
                bibendum ligula sapien, id convallis ipsum placerat vitae. Aliquam id mauris vel nisi lacinia sagittis.
                In lacinia dui dignissim, lacinia erat vitae, malesuada metus. Etiam ornare enim lectus. Suspendisse
                felis lacus, congue vel lobortis non, cursus dignissim metus.

                Curabitur ut rutrum dolor, in laoreet nibh. Duis non lectus libero. Ut eu mi dui. Aliquam sed
                pellentesque orci. Suspendisse eget dolor enim. Duis iaculis tellus in dignissim dignissim. Etiam
                viverra turpis vel leo imperdiet varius. Quisque pulvinar, odio id tempus semper, lectus arcu pulvinar
                ante, nec rhoncus sem magna a est. Pellentesque semper lobortis lectus, pretium rutrum nisl porta vel.
            </p>
        </div>
    </section>
    <section class="roadmap">
        <div>
            <h3 class="titulos-h3"><strong>Road Map</strong></h3>
            <img src="" alt="" loading="lazy">
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