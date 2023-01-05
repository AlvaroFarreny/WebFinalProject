<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
        <title>Bienvenido</title>
        <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet"> 
        <link rel="stylesheet" type="text/css" href="css/my_style.css">
</head>
<body>
<?php
if(isset($_POST['uname'])){
	$_SESSION['uname'] = $_POST['uname'];
	?>
	<h1>Bienvenid@ <?php echo $_POST['uname'];?></h1>
	<div>
		<h2> Escribe aquí tu carta a los Reyes Magos </h2>
		<form action="enviar_carta.php" method="post">
                    <div class="img_login">
                      <img src="images/reyes-magos.jpg" alt="Reyes by freepik" class="kings_img">
                    </div>
                  
                    <div class="container container-text">
					
					  <textarea name="textoCarta" rows="15" cols="50">Queridos Reyes Magos...</textarea>
                      <button type="submit">¡Enviar!</button>
                      
                    </div>
                  
                    <div class="container">
                      <button type="reset" class="cancelbtn">Cancelar</button>
                    </div>
                  </form>
	</div>
	<?php
	}else{
	if(isset($_SESSION['uname'])){
		echo "Has iniciado Sesion: ".$_SESSION['uname'];
	}else{
		echo "Acceso Restringido";
	}
}
?>
<br /><a href="login.php">INICIO</a>
</body>
</html>