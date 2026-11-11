<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("location: Login.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal-Aerolíneas Malvinas</title>
    <link rel="stylesheet" href="Styles.css">
</head>
<body class="cuerpo">
    <header class="header">
        <div class="header-izq">
            <h1 class="titulo">Aerolíneas Malvinas</h1>
        </div>
        <div class="header-cen">
            <h2>Los mejores envíos del país</h2>
        </div>
        <div class="header-der">
            <a href="Login.html" class="boton">Volver</a>
        </div>        
    </header>
<br>
<br>
<br>
<br>
<br>
<br>
<main>
    <div class="panel-container">

        <a href="Registros.php" class="boton">
            Ver informes
        </a>
        
        <a href="Cargar informe.html" class="boton">
            Cargar informe
        </a>
        <a href="Próximos vuelos.php" class="boton">
            Próximos vuelos
        </a>

        <?php if (isset($_SESSION['rol']) && $_SESSION['rol'] == 'admin'|| $_SESSION['rol'] == 'superior'): ?>
        <a href="Contratos.html" class="boton">
            Ver contratos
        </a>
        <?php endif; ?>

        <?php if (isset($_SESSION['rol']) && $_SESSION['rol'] == 'admin'): ?>

                <a href="Administrar usuarios.html" class="boton">
            Administrar usuarios
        </a>
        <?php endif; ?>

        
    </div>

</main>
    <footer class="footer">
    <div class="footer-left">
        <h3>Aerolíneas<br>Malvinas</h3>
    </div>
    <div class="footer-center">
        <h3>CONTACTOS</h3>
        <p>📞 +54 9 11 1234-5678</p>
        <p>🕒 Lunes a Sábados 10hs-22hs</p>
        <p>✉️ AeroMalvinas@gmail.com</p>
    </div>
    <div class="footer-right">
        <img src="Aerolíneas Malvinas.jpg" class="footer-logo">
    </div>
</footer>
</body>
</html>