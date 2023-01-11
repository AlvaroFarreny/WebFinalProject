<!DOCTYPE html>
<html>
<?php
  session_start();
if(isset($_SESSION['numexpediente'])){
	
}else {
}
?>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>CriptoClub</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='profile.css'>
    <script src="https://kit.fontawesome.com/e4d9b954f0.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="img/logos/favicon-32x32.png">
    <!-- Web3.js LIBRARY -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/web3/1.7.1/web3.min.js"
        integrity="sha512-GKw4QT/RccGJIwQxY3MhyiQ5pHrhQ8SuKFEafV+WcpOvtz7iYFQuQGFCvmGlHLctJTe8KrWU1FqvF7VOkEAJtw=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    </script>
</head>

<body>
    <header class="header">
        <div class="container__menu">
            <div class="logo">
                <a href="./index2.php"><img src="img/logos/logo_uem_oscuro.png" alt=""></a>
            </div>
            <div class="menu">
                <nav>
                    <ul>
                        <li><button><i id="icon1" onclick="darkmode('icon1')" class="fa-solid fa-moon"></i></button>
                        </li>
                        <li><a href="./index2.php#inicio">Inicio</a></li>
                        <li><a href="./index2.php#sobreNosotros">Nosotros</a></li>
                        <li><a href="./index2.php#proyectos">Proyectos</a></li>
                        <li class="perfil" id="avatar"><a href=""><img src="img/avatar.svg"></a>Profile</li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <center>
    <section class="section__profile">
        <div class="container-profile">
            <div class="columns">
                <div class="container_imagen">
                    <div class="imagen">
                        <img src="img/avatar.svg" alt="avatar_img">
                    </div>
                    <div class="logout">
                        <button class="logout-btn">🔐 Log out</button>
                    </div>
                </div>
                <div class="container_info">
                    <div class="datos-usuario">
                        <h2>Nombre Prueba</h2>
                        <section class="dashboard-section">
                            <h3 class="wallet-status">Wallet Connected! 🤝</h3>
                            <h4 class="wallet-address-heading">
                                ETH Wallet Address:
                                <span class="wallet-address">0x2Cc6F65847EC39F87E25620A036A3829B6835F26</span>
                            </h4>
                            <h4 class="wallet-balance-heading">
                                <span class="wallet-balance">Balance:  2 Ether</span>
                            </h4>
                        </section>
                    </div>
                    <center>
                    <div class="container_calendar">
                        <h3>Próximas reuniones</h3>
                        <table class="tabla">
                            <tr>
                                <th>Dia</th>
                                <th>Aula</th>
                                <th>Tema</th>
                            </tr>
                            <tr>
                                <td>5/11/2022</td>
                                <td>Primera reunion</td>
                                <td>E221</td>
                            </tr>
                            <tr class="activo">
                                <td>15/12/2022</td>
                                <td>Primera sesion trading</td>
                                <td>E221</td>
                            </tr>
                            <tr>
                                <td>23/1/2023</td>
                                <td>Bit2me reunion</td>
                                <td>...</td>
                            </tr>
                        </table>
                    </div></center>
                </div>
            </div>

    </section>   
    </center>       
    <footer>
        <div class="footer">
            <div class="social-media">
                <button><a href=""><i class="fa-brands fa-twitter"></i></a></button>
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
<!-- SCRIPT -->
<script src='main.js'></script>

</html>