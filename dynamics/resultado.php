<?php
    session_start();
    $_SESSION["modo"] = (isset($_POST['accion']) && $_POST["accion"] != "")? $_POST['accion'] : "No seleccionaste un modo";
    if  ($_SESSION["casa"]=="ajolotes"){
        echo '<link rel="stylesheet" href="../statics/ajolotes.css">';
        echo '<link rel="icon" href="https://cdn-icons-png.flaticon.com/512/390/390280.png">';
    }
    if  ($_SESSION["casa"]=="halcones"){
        echo '<link rel="stylesheet" href="../statics/halcones2.css">';
        echo '<link rel="icon" href="https://i.pinimg.com/736x/c3/87/4e/c3874e3785b92afd7071c87a9c319af4.jpg">';
    }
    if  ($_SESSION["casa"]=="teporingos")
    {
        echo '<link rel="stylesheet" href="../statics/teporingos.css">';
        echo '<link rel="icon" href="https://akns-images.eonline.com/eol_images/Entire_Site/2015913/rs_634x1024-151013043634-634.Playboy-Bunny-JR-101315.jpg?fit=around%7C634:1024&output-quality=90&crop=634:1024;center,top">';
    }
    echo "<h1>¿Carpeta o archivo ".$_SESSION["usuario"]."?</h1>";
    $modo="";
    if($_SESSION["modo"]==1)
        $modo="crear";
    if($_SESSION["modo"]==2)
        $modo="renombrar";
    if($_SESSION["modo"]==3)
        $modo="eliminar";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explorador de archivos</title>
</head>
<body>
    <div class="formulario">
        <?php echo "<b>¿Qué quieres $modo?</b>"; ?>  <br>
        <form action="peticion.php" method="POST" target="_self">
            <label for="carch">
                <input type="radio" name="carch" value="carpeta" required>Carpeta<br><br>
                <input type="radio" name="carch" value="archivo" required>Archivo<br><br>
            </label>
            <label for="nombreArch">Nombre: </label>
            <input type="text" name="nombreArch" required>
            <br>
            <?php
                if($_SESSION["modo"]==2)
                {
                    echo '
                        <br>
                        <label for="RenameArch">Nuevo nombre: </label>
                        <input type="text" name="renameArch" required><br>
                    ';
                }
            ?>
            <br>
            <button type="submit"><?php echo $modo."?!"; ?></button>
        </form>
        <form action="acciones.php">
            <button type="submit">Volver</button>
        </form>
    </div>
</body>
</html>