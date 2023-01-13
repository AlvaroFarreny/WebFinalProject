<!DOCTYPE html>
<html lang="es">
<?php
  session_start();
if(isset($_SESSION['numexpediente'])){
	header("Location: " . "./index.php");
}else {
?>
<head>
    <meta charset="UTF-8">
    <title>CriptoClub | Login</title>
    <link rel="stylesheet" href="login.css">
    <script src="https://kit.fontawesome.com/e4d9b954f0.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                        <li id="darkmode-login"><button><i id="icon1" onclick="darkmode('icon1')"
                                    class="fa-solid fa-moon"></i></button></li>
                        <li><a href="./index.php#inicio">Inicio</a></li>
                        <li><a href="./index.php#sobreNosotros">Nosotros</a></li>
                        <li><a href="./index.php#proyectos">Proyectos</a></li>
                        <li class="perfil" id="avatar"><a href="./profile.php"><img src="img/user.png" style="height: 40px;"></a>Profile
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <div class="container-login">
        <form action="login_PROCESS.php" method="post">
            <div class="title">Login</div>
            <div class="input-box underline">
                <input type="text" name="numexpediente" placeholder="Número de expediente" maxlength="8" required>
                <div class="underline"></div>
            </div>
            <div class="input-box">
                <input type="password" name="password" placeholder="Contraseña" required>
                <div class="underline"></div>
            </div>
            <div class="input-box button">
                <input type="submit" name="" value="Continuar">
            </div>
        </form>
        <section class="login-metamask-section">
            <div class="option">o conéctate con Metamask</div>
            <div class="metamask">
                <button class="login-btn">🔓 Entrar con Metamask</button>
        </section>
        <section class="register">
            <div class="option"><button class="btnforgotpassw" onclick="forgotpassw()">¿Olvidaste tu contraseña?</button></div>
            <div class="option"><a href="./index.php#register">¿No tienes cuenta? Registrate</a></div>

        </section>
    </div>
        <div class="recordar-passw">
            <form action="#">
                <div class="title">Recordar Contraseña</div>
                <div class="input-box underline">
                    <input type="text" placeholder="Correo electrónico" required>
                    <div class="underline"></div>
                </div>
                <div class="input-box button">
                    <input type="submit" value="Enviar">
                </div>
            </form>
        </div>
    <section class="dashboard-section">
        <h2 class="wallet-status">Wallet Connected! 🤝</h2>
        <h3 class="wallet-address-heading">
            ETH Wallet Address:
            <span class="wallet-address"></span>
        </h3>
        <h3 class="wallet-balance-heading">
            ETH Balance:
            <span class="wallet-balance"></span>
        </h3>
        <button class="logout-btn">🔐 Log out</button>
    </section>
</body>
<script src="main.js"></script>
<?php
}
?>
</html>