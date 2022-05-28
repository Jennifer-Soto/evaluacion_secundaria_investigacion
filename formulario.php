
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

        echo $row["id"]."<br>"; 
        echo $row["nombre"]."<br>"; 
        echo $row["apellido"]."<br>";
        echo $row["correo"]."<br>"; 
    }
?>
