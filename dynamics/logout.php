<?php
session_start();
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
unset ($_SESSION["usuario"]);
unset ($_SESSION["casa"]);
unset ($_SESSION["login"]);
unset ($_SESSION["modo"]);
unset ($_SESSION["login"]);
unset ($_SESSION["numCookies"]);
unset ($_SESSION["carch"]);
unset ($_SESSION["nombreArch"]);
unset ($_SESSION["renameArch"]);

$a=$_SESSION["numCookie"];
while ($a >= 1) {
    setcookie("registro_de_actividad".$a,"",time()-1);
    $a--;
}

echo "<h1>Adiós :D no vuelvas</h1>"; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogOut</title>
</head>
<body>
    <div class="formulario">
        <form action="index.php">
            <button type="submit">Menú principal</button>
        </form>
    </div>
</body>
</html>