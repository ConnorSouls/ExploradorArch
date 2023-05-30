
<?php
    $i=(isset($_POST['nombre']) && $_POST["nombre"] != "")? $_POST['nombre'] : "No colocaste tu usuario";
    echo "<h1>¿Qué quieres hacer ".$i."?</h1>";
    $casa=(isset($_POST['casa']) && $_POST["casa"] != "")? $_POST['casa'] : "No indicaste la casa";
    
    if ($casa=="Ajolote"){
        echo "<link rel='stylesheet' href='./Statics/ajolotes.css'>";
    };
    if ($casa=="Halcon"){
        echo "<link rel='stylesheet' href='./Statics/halcones.css'>";
    };
    if ($casa=="Teporingo"){
        echo "<link rel='stylesheet' href='./Statics/teporingo.css'>";
    };

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="formulario">
        <form>
            <label>Acciones:
                <br><br><br><br>
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