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
            $v1 = $_REQUEST['identificador'];
            $v2 = $_REQUEST['username'];
            $v3 = $_REQUEST['password'];
            $v4 = $_REQUEST['rol_id'];

            //conuslta SQL
            $sql = "INSERT INTO usuarios (id,username, password, rol_id) ";
            $sql .= "VALUES ('$v1', '$v2', '$v3', '$v4')";
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