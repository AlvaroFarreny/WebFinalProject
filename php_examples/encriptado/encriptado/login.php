<?php
	define("DB_SERVER", "localhost");
	define("DB_USER", "root");
	define("DB_PASS", "");
	define("DB_NAME", "usuarios");

  // 1. Crear conexión con la BBDD
  $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
  // Test if connection succeeded
  if(mysqli_connect_errno()) {
    die("La conexión con la BBDD ha fallado: " . 
         mysqli_connect_error() . 
         " (" . mysqli_connect_errno() . ")"
    );
  }
?>
<?php 
function find_user_by_username($username, $password, $connection) {
		
		$safe_username = mysqli_real_escape_string($connection, $username);
		$query  = "SELECT password ";
		$query .= "FROM data_users ";
		$query .= "WHERE usuario = '$username'";
		$query .= "LIMIT 1";  //Como username es primario no lo necesito
		echo "$query <br>";
		$user_set = mysqli_query($connection, $query);
		if (!$user_set) {
			die("Database query failed.");
		}
		
		if($user = mysqli_fetch_assoc($user_set)) {
			return $user;
		} else {
			return null;
		}
	}

function attempt_login($username, $password, $connection) {
		$user = find_user_by_username($username,$password, $connection);
		if ($user) {
			
			//user encontrado
			
			return $user;
    }
			
		 else {
			// user not found
			//echo "Usuario no encontrado";
			return false;
		}
	}
	
	
	
?>
<?php
echo "Esto es login.php";
if(isset($_POST['username'])) { 
    // check if the username has been set
	$username = $_POST["username"];
}
if(isset($_POST['password'])) { 
    // check if the username has been set
	$password = $_POST["password"];
}


$found_user = attempt_login($username, $password, $connection);

    if ($found_user) {
      // Success
			if(password_verify($password,$found_user["password"])){
                header("Location: " . "bienvenido.php");
            }
            else{
                header("Location: " . "error_login.php");
            }
		
     
    } else {
      // Failure
	  header("Location: " . "inicio.html");
    }
?>

<?php
  // 5. Close database connection
  mysqli_close($connection);
?>