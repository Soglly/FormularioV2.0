<?php
        include("registrar.php");
        include("conexion.php");

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(isset($_POST['tabla'])){
            header("Location: tabla.php");
            exit;
        }
     
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <form method="post">
        <h2>Hola</h2>
        <p>Iniciar formulario</p>

        <div class="input_wrapper">
            <input type="text" name="name" placeholder="Nombre">
            <input type="text" name="lastname" placeholder="Apellido">
        </div>

        <div class="input_wrapper">
            <input type="email" name="email" placeholder="E-mail">
            <input type="text" name="yearOld" placeholder="Edad">
        </div>

        <div class="input_wrapper">
            <input type="add" name="direccion" placeholder="Direccion">
            <input type="tel" name="phone" placeholder="Telefono">

        </div>

        <input class="boton" type="submit" name="register" value="Enviar">
        <input class="boton" type="submit" name="tabla" value="Mostrar Registros" >
    </form>
</body>
</html>