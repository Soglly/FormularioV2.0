<?php
    include("registrar.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div>
            <table>
        <tr class="cabeza">
            <td>ID</td>
            <td>Nombre</td>
            <td>Apellido</td>
            <td>Correo</td>
            <td>Edad</td>
            <td>Direccion</td>
            <td>Telefono</td>
        </tr>

        <?php
            $sql="SELECT * FROM datos;";
            $result=mysqli_query($conexion,$sql);

            while($mostrar=mysqli_fetch_array($result)){
                ?>
                <tr>
                    <td><?php echo $mostrar["ID"] ?></td>
                    <td><?php echo $mostrar["Nombre"] ?></td>
                    <td><?php echo $mostrar["Apellido"] ?></td>
                    <td><?php echo $mostrar['Edad'] ?></td>
                    <td><?php echo $mostrar['Correo'] ?></td>
                    <td><?php echo $mostrar['Direccion'] ?></td>
                    <td><?php echo $mostrar['Telefono'] ?></td>
                </tr>   
        <?php
            }
        ?>
    </table>
    <a href="index.php"><button class="boton">Volver al formulario</button></a>

    </div>
</body>
</html>