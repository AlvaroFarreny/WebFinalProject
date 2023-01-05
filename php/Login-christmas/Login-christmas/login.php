<!DOCTYPE html>
<?php
  session_start();
?>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title> Login</title>
        <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet"> 
        <link rel="stylesheet" type="text/css" href="css/my_style.css">
    </head>
    <body>
        <header>
          <div id= "head_title">
            <h1>¡HOLA!</h1>

          </div>
        </header>
        
        <main>
            <section>
            <?php
	          if(isset($_SESSION['uname'])){
		          echo "<p>Has iniciado sesion: " . $_SESSION['uname'] . "";
		          echo "<p><a href='pagina3.php'>Cerrar Sesion</a></p>";
	        }else {
?>
                <form action="process_login.php" method="post">
                    <div class="img_login">
                      <img src="images/user_female.png" alt="Login image" class="user_img">
                    </div>
                  
                    <div class="container">
                      <label for="username"><b>Usuario</b></label>
                      <input type="text" placeholder="Escribe tu usuario" name="uname" required>
                  
                      <label for="pswd"><b>Contraseña</b></label>
                      <input type="password" placeholder="Tu contraseña" name="pswd" required>
                  
                      <button type="submit">¡Vamos allá!</button>
                      <label>
                        <input type="checkbox" checked="checked" name="remember"> Recordar contraseña
                      </label>
                    </div>
                  
                    <div class="container">
                      <button type="reset" class="cancelbtn">Cancelar</button>
                      <span class="pswd"> <a class="link_web" href="# ">¿No recuerdas tu contraseña?</a></span>
                    </div>
                  </form>
                  <?php
	                  }
                  ?>
            </section>
        </main>
        
        
        
        <footer>
   <!--      <h4>Contacto</h4>
            <p>anadelvalle.corrales@universidadeuropea.es</p> -->
        </footer>
  
    </body>
</html>