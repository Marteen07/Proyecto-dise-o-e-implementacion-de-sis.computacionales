<?php
session_start(); 

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "aerolineas_m_db";

$conn = mysqli_connect ($dbhost, "root", $dbpass, $dbname);
    if (!$conn)
        {
            die ("No hay conexión con la base de datos".mysqli_connect_error());
        }
$nombre = $_POST["user_id"];
$pass = $_POST["user_pass"];

$query = mysqli_query ($conn,"SELECT * FROM usuario WHERE usuario = '" .$nombre. "' AND password = '".$pass."'");
$nr = mysqli_num_rows($query);

if ($nr == 1)
    {
  // Extraemos los datos de la fila encontrada en la BD
    $row = mysqli_fetch_assoc($query);
    // Guardamos las variables de sesión
    $_SESSION['usuario'] = $row['usuario'];
    $_SESSION['rol'] = $row['rol']; // <--- ¡Acá guardamos si es 'admin' o 'empleado'!
    header("location: Aerolíneas Malvinas.php"); 
    exit();
    }
else if ($nr == 0)
    {
        header("location: Login.html"); // O Login.php según cómo lo tengas nombrado
        exit();      
    }
?>