
<?php 
    /*Aqui incluimos la conexion*/
    include("conexion.php");

    /*Aqui traemos los datos pedidos en el formulario html*/
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $correo = $_POST["correo"];

    /*Insertamos los datos de las variables en el servidor*/
    $insertar= "INSERT INTO mitabla(nombre, apellido, correo) values ('$nombre', '$apellido', '$correo')";
    if ($mysqli->query($insertar) === true){
        echo "Excelente";
    }
    else {
        echo "Pésimo trabajo";
    }
    echo "<br>";

    /*Imprimimos los datos recolectados*/
    $mitabla = "SELECT * FROM mitabla ";
    $resultado = mysqli_query($mysqli, $mitabla);
    while($row=mysqli_fetch_assoc($resultado)){

        <!DOCTYPE html>
        <html lang="es">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
        </head>
        <body>
            <table>

                <tr>

                    <td><?php echo $row["id"]."<br>"; ?></td>

                    <td><?php echo $row["nombre"]."<br>"; ?></td>

                    <td><?php echo $row["apellido"]."<br>"; ?></td>

                    <td><?php echo $row["correo"]."<br>"; ?></td>

                </tr>
            
            </table>
        </body>
        </html>
    }
?>
