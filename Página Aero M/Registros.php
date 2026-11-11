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
    <title>Registros-Aerolíneas Malvinas</title>
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
        <h2>Informes anteriores</h2>
        <table border="1">
            <thead>
            <tr>
            <th>Informe</th>
            <th>Empresa</th>
            <th>Tipo</th>
            <th>Informe N°</th>
            <th>Fecha</th>
            <?php if (isset($_SESSION['rol']) && $_SESSION['rol'] == 'admin'|| $_SESSION['rol'] == 'superior'): ?>
            <th>Acción</th>
            <?php endif; ?>
            </tr>
            </thead>
            <tbody>
            <tr>
            <td><a href="Informes/Informe 2350A.pdf">📄 Informe 2350A.pdf</a></td>
            <td>TecnoArg</td>
            <td>Recepción</td>
            <td>2350A</td>
            <td>27/10/2026</td>
            <?php if (isset($_SESSION['rol']) && $_SESSION['rol'] == 'admin'|| $_SESSION['rol'] == 'superior'): ?>
            <td><a href="Registros.php" class="boton2" onclick="return confirm('¿Estás seguro de que deseas eliminar este informe?');">Eliminar</a></td>
            <?php endif; ?>    
        </tr>
            <tr>
            <td><a href="Informes/Informe 2350B.pdf">📄 Informe 2350B.pdf</a></td>
            <td>TecnoArg</td>
            <td>Despacho</td>
            <td>2350B</td>
            <td>27/10/2026</td>
            <?php if (isset($_SESSION['rol']) && $_SESSION['rol'] == 'admin'|| $_SESSION['rol'] == 'superior'): ?>
            <td><a href="Registros.php" class="boton2" onclick="return confirm('¿Estás seguro de que deseas eliminar este informe?');">Eliminar</a></td>
            <?php endif; ?>
        </tr>
            </tbody>
        </table>

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