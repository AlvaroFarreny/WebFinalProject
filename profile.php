<!DOCTYPE html>
<html>
<?php
session_start();

if (isset($_SESSION['numexpediente'])) {
    //Datos para la conexión
    $dbhost = "localhost"; //IP del servidor de BBDD
    $dbuser = "root"; // Usuario de la BBDD
    $dbpass = ""; // Contraseña
    $dbname = "webfinalproject"; // Nombre de la Base de Datos
    $tablename = "reuniones"; // Nombre de la tabla 

    $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    // Test if connection succeeded
    if (mysqli_connect_errno()) {
        die("Database connection failed: " .
            mysqli_connect_error() .
            " (" . mysqli_connect_errno() . ")"
        );
    }
    $query = "SELECT * FROM `$tablename` ORDER BY fecha_hora ASC LIMIT 3;";
    $result = mysqli_query($connection, $query);
    if ($result) {
        $_SESSION['result'] = $result;
    } else { // Failure
        die("Database query failed. " . mysqli_error($connection));
    }
    $tablename = "usuario";
    $query = "SELECT nombre,apellidos FROM `$tablename` WHERE num_expediente=" . $_SESSION['numexpediente'] . " LIMIT 1;";
    $result2 = mysqli_query($connection, $query);
    $datos = mysqli_fetch_assoc($result2);
    if ($datos) {
        $nombre = $datos["nombre"];
        $apellidos = $datos["apellidos"];
    } else { // Failure
        die("Database query failed. " . mysqli_error($connection));
    }
    mysqli_close($connection);
} else {
    header("Location: " . "./index.php");
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
                <a href="./index.php"><img src="img/logos/logo_uem_oscuro.png" alt=""></a>
            </div>
            <div class="menu">
                <nav>
                    <ul>
                        <li><button><i id="icon1" onclick="darkmode('icon1')" class="fa-solid fa-moon"></i></button>
                        </li>
                        <li><a href="./index.php#inicio">Inicio</a></li>
                        <li><a href="./index.php#sobreNosotros">Nosotros</a></li>
                        <li><a href="./index.php#proyectos">Proyectos</a></li>
                        <li class="perfil" id="avatar"><a href=""><img src="img/user.png" style="height: 40px;"></a>P</li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <center>
        <section class="section__profile">
            <div class="container-profile">
                <div class="columns">
                    <div class="container_info">
                        <div class="datos-usuario">
                            <h2>
                                <?php echo $nombre . " " . $apellidos; ?>
                            </h2>
                            <section class="dashboard-section">
                                <h3 class="wallet-status">Wallet Connected! </h3>
                                <h4 class="wallet-address-heading">
                                    <span class="wallet-address">0x2Cc6F65847EC39F87E25620A036A3829B6835F26</span>
                                </h4>
                                <h4 class="wallet-balance-heading">
                                    <span class="wallet-balance">Balance: 2 Ether</span>
                                </h4>
                            </section>
                        </div>
                        <h3>Próximas reuniones</h3>
                        <div class="container_calendar" style="overflow-x:auto;">
                                <table class="tabla">
                                    <tr>
                                        <th>Fecha</th>
                                        <th>Aula</th>
                                        <th>Asunto</th>
                                        <th>Ponente</th>
                                    </tr>
                                    <?php
                                    $result = $_SESSION['result'];
                                    if ($result->num_rows > 0) {
                                        while ($row = $result->fetch_assoc()) {
                                            echo
                                                "<tr>
                                        <td>" . $row["fecha_hora"] . "</td>
                                        <td>" . $row["aula"] . "</td>
                                        <td>" . $row["asunto"] . "</td>
                                        <td>" . $row["ponente"] . "</td>
                                    </tr>";
                                        }
                                    } else {
                                        echo "0 results";
                                    }
                                    ?>
                            </table>
                        </div>
                        <div class="logout">
                            <button class="logout-btn-exp">Cerrar Sesión</button>
                            <button class="logout-btn">🔐 Log out</button>
                        </div>
                    </div>
                </div>

        </section>
    </center>
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