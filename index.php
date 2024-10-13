<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba</title>
</head>
<body>
    <h1>Borja Molina Zea</h1>
    <?php
        date_default_timezone_set('Europe/Madrid');
        echo date('H:i:s');
    ?>
    <div id="relojCliente"></div>
    <form action="insertar.php" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <br>
        <label for="edad">Edad:</label>
        <input type="number" name="edad" id="edad" required>
        <br>
        <input type="sumbit" value="Enviar">
    </form>
    <script src="js/reloj.js"></script>
</body>
</html>