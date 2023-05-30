<?php
    session_start();
        if( $_SESSION["login"] != 1){
            $_SESSION["usuario"] = (isset($_POST['nombre']) && $_POST["nombre"] != "")? $_POST['nombre'] : false;
            $_SESSION["casa"]    = (isset($_POST['casa'])   && $_POST["casa"] != "")?   $_POST['casa'] : false;
            $_SESSION["login"] = 1;
        }
            if  ($_SESSION["casa"]=="axos"){
                echo '<link rel="stylesheet" href="../statics/axos.css">';
                echo '<link rel="icon" href="https://cdn-icons-png.flaticon.com/512/390/390280.png">';
            }
        
            if  ($_SESSION["casa"]=="halcones"){
                echo '<link rel="stylesheet" href="../statics/halcones.css">';
                echo '<link rel="icon" href="https://i.pinimg.com/736x/c3/87/4e/c3874e3785b92afd7071c87a9c319af4.jpg">';
            }
            if  ($_SESSION["casa"]=="tepos")
            {
                echo '<link rel="stylesheet" href="../statics/tepos.css">';
                echo '<link rel="icon" href="https://akns-images.eonline.com/eol_images/Entire_Site/2015913/rs_634x1024-151013043634-634.Playboy-Bunny-JR-101315.jpg?fit=around%7C634:1024&output-quality=90&crop=634:1024;center,top">';
            }
            echo "<h1>¿Qué quieres hacer ".$_SESSION["usuario"]."?</h1>";
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
        if( $_SESSION["login"] == 1)
        {
            echo '
            <form action="ejecucion.php" method="POST" target="_self">
                <label>Acciones:
                    <br><br>
                    <input type="radio" name="accion" value=1>Crear
                    <br><br><br>
                    <input type="radio" name="accion" value=2>Renombrar
                    <br><br><br>
                    <input type="radio" name="accion" value=3>Eliminar
                </label>
                <br><br><br>
                <button type="submit">Enviar</button>
            </form><br>
            <form action="registro.php"> <button type="submit">Historial</button>     </form><br>
            <form action="logout.php">   <button type="submit">Cerrar sesión</button> </form>
            ';
        }
        else{
            echo '
            <form action="index.php">
                <button type="submit">Regístrate</button>
            </form>
            ';
        }
        ?>
        
    </div>

</body>
</html>