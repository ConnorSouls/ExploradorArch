
<?php
    $nombre = (isset($_POST['nombre']) && $_POST["nombre"] != "")? $_POST['nombre'] : "No colocaste tu usuario";
    $casa   = (isset($_POST['casa'])   && $_POST["casa"] != "")?   $_POST['casa'] : "No indicaste la casa";
    if  ($casa=="axos"){
        echo '<link rel="stylesheet" href="../statics/axos.css">';
        echo '<link rel="icon" href="https://cdn-icons-png.flaticon.com/512/390/390280.png">';
    }

    if  ($casa=="halcones"){
        echo '<link rel="stylesheet" href="../statics/halcones.css">';
        echo '<link rel="icon" href="https://i.pinimg.com/736x/c3/87/4e/c3874e3785b92afd7071c87a9c319af4.jpg">';
    }
        if  ($casa=="tepos")
    {
        echo '<link rel="stylesheet" href="../statics/tepos.css">';
        echo '<link rel="icon" href="https://akns-images.eonline.com/eol_images/Entire_Site/2015913/rs_634x1024-151013043634-634.Playboy-Bunny-JR-101315.jpg?fit=around%7C634:1024&output-quality=90&crop=634:1024;center,top">';
    }

    session_start();
    $_SESSION["usuario"] = $nombre;
    $_SESSION["casa"] = $casa;
    
    echo "<h1>¿Qué quieres hacer ".$_SESSION["usuario"]."?</h1>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>acciones</title>
<?php
?>
</head>
<body>
    <div class="formulario">
        <form>
            <label>Acciones:
                <br><br>
                <input type="radio" name="accion" value="crear">Crear
                <br><br><br>
                <input type="radio" name="accion" value="renombrar">Renombrar
                <br><br><br>
                <input type="radio" name="accion" value="Eliminar">Eliminar
            </label>
            <br><br><br>
            <button type="submit">Aplicar</button>
        </form>
    </div>

</body>
</html>