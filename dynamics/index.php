<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesion</title>
    <link rel="stylesheet" href="../statics/main.css">
    <link rel="icon" href="https://www.harasdadinco.cl/wp-content/uploads/2022/10/cual-es-el-icono-de-archivo.png">
</head>
<body>
    <?php
        session_start();
        $_SESSION["login"] = 0;
    ?>
    <center>
        <h1>Inicio de sesión</h1>
    </center>
    <div class="formulario-recuadro">
        <h2 style= "font-family: 'Courier New', Courier, monospace;">¡Bienvenidx!</h2>
        <form action="acciones.php" method="POST">
            <label>Nombre(s):
                <br>
                <input type="text" name="nombre" required autocomplete="on"> 
            </label>
            <br><br>
            <label for="casa">Casa:</label>
            <br>
            <select id="casa" name="casa">
                <option value=""></option>
                <option value="axos">Ajolotes</option>
                <option value="halcones">Halcones</option>
                <option value="tepos">Teporingos</option>
            </select>
            <br><br>
            <button type="submit">Entrar</button>
        </form>
    </div>
</body>
</html>