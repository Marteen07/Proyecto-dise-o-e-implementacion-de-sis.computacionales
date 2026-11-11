<?php
session_start();
// Si intentan entrar escribiendo la URL sin haberse logueado, los rebota al login
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
    <title>Próximos vuelos-Aerolíneas Malvinas</title>
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
            <a href="Aerolíneas Malvinas.php" class="boton">Volver</a>
        </div>        
    </header>
<br>
<br>
    <main>
    <div class="container">
        <h2>Próximos vuelos</h2>
        <h3>Aviones que llegarán y necesitarán control de su almacén</h3>
        <table border="1">
            <thead>
            <tr>
            <th>Vuelo N°</th>
            <th>Fecha</th>
            <th>Hora</th>
            </tr>
            </thead>
            <tbody>
            <tr>
            <td>2355</td>
            <td>2/11/2026</td>
            <td>8:00hs</td>
            </tr>
            <tr>
            <td>2356</td>
            <td>2/11/2026</td>
            <td>10:00hs</a></td>
            </tr>
            <tr>
            <td>2357</td>
            <td>2/11/2026</td>
            <td>14:00hs</a></td>
            </tr>
            <tr>
            <td>2358</td>
            <td>2/11/2026</td>
            <td>16:00hs</a></td>
            </tr>
            </tbody>
        </table>
        <br>
        <?php if (isset($_SESSION['rol']) && $_SESSION['rol'] == 'admin'|| $_SESSION['rol'] == 'superior'): ?>
        <center><a href="Agregar próximo vuelo.php" class="boton">
            Agregar próximo vuelo
        </a>
        </center>
        <?php endif; ?>
    </div>
<br>
<br>

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