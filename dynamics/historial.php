<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explorador de archivos</title>
</head>
<body>
    hola
    <?php
        session_start();
        echo $_SESSION["usuario"];
    ?>
    <form action="acciones.php">
            <button type="submit">volver</button>
    </form>
</body>
</html>