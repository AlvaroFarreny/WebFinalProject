<?php
  session_start();
if(isset($_SESSION['numexpediente'])){
	session_destroy();
    header("Location: " . "./index.php");
}else {
    header("Location: " . "./index.php");
}
?>