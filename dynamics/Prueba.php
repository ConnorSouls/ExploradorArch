<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nombre = (isset ($_POST['nombre']) && $_POST['nombre'] !="")? $_POST["nombre"] : false;
        $casa   = (isset ($_POST['casa'])   && $_POST['casa'] !="")?   $_POST["casa"] : false;

        session_start();
        $_SESSION["usuario"] = $nombre;
        $_SESSION["casa"] = $casa;
        echo $_SESSION["casa"]."<br>";
        echo $_SESSION["usuario"];
    ?>
</body>
</html>