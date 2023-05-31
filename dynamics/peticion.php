<?php
session_start();
$_SESSION["carch"] = (isset($_POST['carch']) && $_POST["carch"] != "")? $_POST['carch'] : false;
$_SESSION["nombreArch"] = (isset($_POST['nombreArch']) && $_POST["nombreArch"] != "")? $_POST['nombreArch'] : false;
$_SESSION["renameArch"] = (isset($_POST['renameArch']) && $_POST["renameArch"] != "")? $_POST['renameArch'] : "No se puede renombrar";
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
if ($_SESSION["carch"]=="carpeta") {
    $carch="una ".$_SESSION["carch"]." llamada ";
}
if ($_SESSION["carch"]=="archivo") {
    $carch="un ".$_SESSION["carch"]." llamado ";
}

if($_SESSION["modo"]==1)
    $modo=" creó ";
if($_SESSION["modo"]==2)
{
    $modo=" renombró ";
    $rename=" con un nuevo nombre: ".$_SESSION["renameArch"].".";
}
else
    $rename=".";
if($_SESSION["modo"]==3)
    $modo=" eliminó ";

 
$_SESSION["numCookie"]++;
setcookie("registro_de_actividad".$_SESSION["numCookie"], "El usuario ".$_SESSION['usuario']." de la casa ".$_SESSION['casa'].$modo.$carch.$_SESSION['nombreArch'].$rename, time()+60*30);
echo "<h1>Petición terminada :D</h1>".$_SESSION["numCookie"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petición terminada</title>
</head>
<body>
    <div class="formulario">
        <form action="historial.php">
            <br><button type="submit">Historial</button>
        </form>
        <form action="acciones.php">
            <br><button type="submit">volver</button>
        </form>
    </div>

</body>
</html>