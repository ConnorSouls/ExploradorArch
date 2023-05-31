<?php
    session_start();
    $_SESSION["login"];
    if( $_SESSION["login"] == "listo"){
        //ternarios que solo se activarán una vez
        $_SESSION["usuario"] = (isset($_POST['nombre']) && $_POST["nombre"] != "")? $_POST['nombre'] : false;
        $_SESSION["casa"]    = (isset($_POST['casa'])   && $_POST["casa"] != "")?   $_POST['casa'] : false;
        //si ningún ternario es falso hay registro
        if($_SESSION["usuario"] != false && $_SESSION["casa"] != false)
            $_SESSION["login"]="registrado";
    }
    else{
        if($_SESSION["login"]!="registrado")
            $_SESSION["login"]="no listo";
    }

    if($_SESSION["login"]=="registrado")
    {
        if  ($_SESSION["casa"]=="ajolotes"){
            echo '<link rel="stylesheet" href="../statics/ajolotes.css">';
            echo '<link rel="icon" href="https://cdn-icons-png.flaticon.com/512/390/390280.png">';
        }
        else{
            if  ($_SESSION["casa"]=="halcones"){
                echo '<link rel="stylesheet" href="../statics/halcones2.css">';
                echo '<link rel="icon" href="https://i.pinimg.com/736x/c3/87/4e/c3874e3785b92afd7071c87a9c319af4.jpg">';
            }
            else{
                if  ($_SESSION["casa"]=="teporingos")
                {
                    echo '<link rel="stylesheet" href="../statics/teporingos.css">';
                    echo '<link rel="icon" href="https://akns-images.eonline.com/eol_images/Entire_Site/2015913/rs_634x1024-151013043634-634.Playboy-Bunny-JR-101315.jpg?fit=around%7C634:1024&output-quality=90&crop=634:1024;center,top">';
                }
            }
        }
        echo "<h1>¿Qué quieres hacer ".$_SESSION["usuario"]."?</h1>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explorador de archivos</title>
<?php
?>
</head>
<body>
    <div class="formulario">
        <?php
        if($_SESSION['login']=="registrado")
        {
            echo '
            <form action="resultado.php" method="POST" target="_self">
                <label><b>Acciones:</b>
                    <br><br>
                    <input type="radio" name="accion" value=1 required>Crear
                    <br><br><br>
                    <input type="radio" name="accion" value=2 required>Renombrar
                    <br><br><br>
                    <input type="radio" name="accion" value=3 required>Eliminar
                </label>
                <br><br>
                <button type="submit">Enviar</button>
            </form>
            <form action="historial.php"> <button type="submit"> Historial     </button> </form>
            Antes de salir cierra tu sesión!!!
            <form action="logout.php">    <button type="submit"> Cerrar sesión </button> </form>
            ';
        }
        else{
            echo 'Y la de registrarte te la sabes?
            <form action="index.php">
                <button type="submit">Regístrate</button>
            </form>
            ';
        }
        ?>
    </div>
</body>
</html>