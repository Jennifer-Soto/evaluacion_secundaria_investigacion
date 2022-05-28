<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
       <?php 
    /*Aqui incluimos la conexion*/
    include("conexion.php");

    /*Aqui traemos los datos pedidos en el formulario html*/
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $correo = $_POST['correo'];

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
    $mitabla1 = "SELECT * FROM mitabla";
    $resultado = mysqli_query($mysqli, $mitabla1);
    
    while($row=mysqli_fetch_assoc($resultado)){
            echo "<table border=1>";
                echo "<tr>";
                    echo "<td>"; echo $row['id']."<br>"; echo "</td>";
                    echo "<td>"; echo $row['nombre']."<br>"; echo "</td>";
                    echo "<td>"; echo $row['apellido']."<br>"; echo "</td>";
                    echo "<td>"; echo $row['correo']."<br>"; echo "</td>";
                echo "</tr>";
            echo "</table>";
            }
    ?>
    </body>
    </html>
