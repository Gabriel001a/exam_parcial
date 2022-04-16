<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>
    <link rel="stylesheet" href="registrop.css">
    </head>
    <body>
        <div>    
            <?php 

            //conexion a la Base de datos (Servidor,usuario,password)
            $conn = mysqli_connect("localhost", "root","","eparcial");
            if(!$conn){
                die("Error de conexion: " . mysqli_connect_error());
            } 
            //(nombre de la base de datos, $enlace) mysql_select_db("Relocadb",$link);
            //capturando datos
            $v1 = $_REQUEST['Nombrev'];
            $v2 = $_REQUEST['Codigo'];
            $v3 = $_REQUEST['Nombre'];
            $v4 = $_REQUEST['FechNac'];
            $v5 = $_REQUEST['Raza'];
            $v6 = $_REQUEST['Genero'];
            $v7 = $_REQUEST['Foto'];
            //Consulta
            $v8 = $_REQUEST['FechCon'];
            $v9 = $_REQUEST['Foto2'];
            $v10 = $_REQUEST['Diagnostico'];
            $v11 = $_REQUEST['Analisis'];
            $v12 = $_REQUEST['Medicamentos'];
            $v13 = $_REQUEST['Costo'];
            $v14 = $_REQUEST['Pago'];
            //conuslta SQL
            $sql = "INSERT INTO perro (Nombrevet,DNI, Nombre, Raza, Genero, FechaNacimiento, Foto,FechaConsulta,Radiografia,Diagnostico,Analisis,Medicamentos,Costo,Pago) ";
            $sql .= "VALUES ('$v1', '$v2', '$v3', '$v5', '$v6', '$v4', '$v7', '$v8', '$v9', '$v10', '$v11', '$v12', '$v13', '$v14' )";
            if (mysqli_query($conn, $sql)) {
                echo "<p>**********REGISTRO EXITOSO********** </p>";
                echo "<br><h2><img src='imagen/img5.jpg' ></h2>";
                } else {
                echo "ERROR: " . $sql . "<br>" . mysqli_error($conn);
                }
                mysqli_close($conn);
                //Mensaje de conformidad
            ?>
        </div> 
    </body>
</html>
