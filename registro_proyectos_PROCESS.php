<?php
/*La base de datos no tiene atributos NOT NULL por lo que se pueden insertar usuarios vacios */
session_start();

if (isset($_SESSION['numexpediente'])) {
	define("DB_SERVER", "localhost");
	define("DB_USER", "root");
	define("DB_PASS", "");
	define("DB_NAME", "webfinalproject");


	function get_id_proyecto()
	{
		if ($_SESSION['proyecto'] == "fundacioncamaro") {
			return 8;
		} else if ($_SESSION['proyecto'] == "bit2me") {
			return 3;
		} else if ($_SESSION['proyecto'] == "ligabolsa") {
			return 4;
		} else {
			echo '<script type="text/javascript">
        			alert("Ha ocurrido un error con la base de datos al intentar recuperar el proyecto.");
					window.location.href="' . $_SESSION['proyecto'] . '.php";
        		</script>';
			return null;
		}
	}
	function get_id_usuario()
	{
		// 1. Crear conexión con la BBDD
		$connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
		// Test if connection succeeded
		if (mysqli_connect_errno()) {
			die("La conexión con la BBDD ha fallado: " .
				mysqli_connect_error() .
				" (" . mysqli_connect_errno() . ")"
			);
		}
		$query = "SELECT id_usuario ";
		$query .= "FROM usuario ";
		$query .= "WHERE num_expediente = " . $_SESSION['numexpediente'] . " ";
		$query .= "LIMIT 1"; //Como username es primario no lo necesito
		$result = mysqli_query($connection, $query);
		if (!$result) {
			mysqli_close($connection);
			die("Database query failed.");
		}
		if ($data = mysqli_fetch_assoc($result)) {
			mysqli_close($connection);
			return $data["id_usuario"];
		} else {
			mysqli_close($connection);
			return null;
		}
	}
	function apuntarse()
	{
		$ID_usuario = get_id_usuario();
		$ID_proyecto = get_id_proyecto();
		// 1. Crear conexión con la BBDD
		$connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
		// Test if connection succeeded
		if (mysqli_connect_errno()) {
			die("La conexión con la BBDD ha fallado: " .
				mysqli_connect_error() .
				" (" . mysqli_connect_errno() . ")"
			);
		}

		$tablename = "proyectos_usuarios";
		if (!$ID_usuario == null) {

			$query = "INSERT INTO `$tablename` (";
			$query .= "  `id_usuario`, `id_proyecto`";
			$query .= ") VALUES (" . $ID_usuario . "," . $ID_proyecto . ");";
			try {
				$result = mysqli_query($connection, $query);
			} catch (Exception $e) {
				echo '<script type="text/javascript">
				alert("Ha ocurrido un error con la base de datos. Puede ser que ya estes apuntado?");
				window.location.href="' . $_SESSION['proyecto'] . '.php";
			</script>';
			}
			if ($result) {
				mysqli_close($connection);
				header("Location: " . "./" . $_SESSION['proyecto'] . ".php");
			} else {
				mysqli_close($connection);
				echo '<script type="text/javascript">
        			alert("Ha ocurrido un error con la base de datos. Puede ser que ya estes apuntado?");
					window.location.href="' . $_SESSION['proyecto'] . '.php";
        		</script>';
			}
		} else {
			mysqli_close($connection);
			echo '<script type="text/javascript">
        			alert("Ha ocurrido un error con la base de datos al recuperar tu usuario.");
					window.location.href="' . $_SESSION['proyecto'] . '.php";
        		</script>';
		}
		// 5. Close database connection
		mysqli_close($connection);
	}

	if (isset($_POST['apuntarse_fundacion_camaro'])) {
		$_SESSION['proyecto'] = "fundacioncamaro";
		apuntarse();
		unset($_SESSION['proyecto']);
		unset($_POST['apuntarse_fundacion_camaro']);
	}
	if (isset($_POST['apuntarse_bit2me'])) {
		$_SESSION['proyecto'] = "bit2me";
		apuntarse();
		unset($_SESSION['proyecto']);
		unset($_POST['apuntarse_bit2me']);
	}
	if (isset($_POST['apuntarse_ligabolsa'])) {
		$_SESSION['proyecto'] = "ligabolsa";
		apuntarse();
		unset($_SESSION['proyecto']);
		unset($_POST['apuntarse_ligabolsa']);
	}

} else {
	header("Location: " . "./index.php");
}
?>