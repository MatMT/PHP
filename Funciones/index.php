<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="container">
        <h2>Multiplicaciones</h2>
        <form action="" method="POST">
            <input type="text" name="num1">
            <input type="text" name="num2">

            <input type="submit" value="Enviar">
        </form>


        <?php
        include("app.php");
        echo validarCampos();
        ?>

    </div>
</body>

</html>