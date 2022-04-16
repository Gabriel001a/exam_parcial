<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Consulta</title>
    <link rel="stylesheet" href="consultap.css">
    </head>
    <body>
        <fieldset>
        <h1>Lista de Perros</h1>
        <hr>     
        <?php 

        //conexion a la Base de datos (Servidor,usuario,password)
        $conn = mysqli_connect("localhost", "root","","eparcial");
        if(!$conn){
            die("Error de conexion: " . mysqli_connect_error());
        } 
        //(nombre de la base de datos, $enlace) mysql_select_db("RelocaDB",$link);
        //capturando datos
        $v3 = $_REQUEST['Nombre'];
        //conuslta SQL
        $sql = "select * from Perro where Nombre like '".$v3."'";
        $result = mysqli_query($conn, $sql); 
        //cuantos reultados hay en la buesqueda 
        $num_resultados = mysqli_num_rows($result); 
        echo "<p>Número de perros encontrados: ".$num_resultados."</p>"; 
        //mostrando informacion de los perros y detalle 
            for ($i=0; $i <$num_resultados; $i++) { 
                echo "<hr>";
                echo "<br>";
                $row = mysqli_fetch_array($result); echo ($i+1); 
                echo "<hr>";
                echo " </br>Veterinario : ".$row["Nombrevet"];
                echo " </br>DNI : ".$row["DNI"];
                echo " </br>Nombre : ".$row["Nombre"];
                echo " </br>Raza : ".$row["Raza"];
                echo " </br>Genero : ".$row["Genero"];
                echo " </br>Nacio en : ".$row["FechaNacimiento"];
                echo " <br>Foto :"; echo "<br><img src='imagen/".$row['Foto']."'  >"; 
                echo " </br>Fecha de la consulta : ".$row["FechaConsulta"];
                echo " </br>Diagnostico : ".$row["Diagnostico"];
                echo " </br>Medicamentos : ".$row["Medicamentos"];
                echo " </br>Analisis de sangre : ".$row["Analisis"];
                echo " </br>Monto a pagar: ".$row["Costo"]; echo " soles";        
                echo " </br>Estado de pago : ".$row["Pago"];
                echo " <br>Radiografia :"; echo "<br><img src='imagen/".$row['Radiografia']."'  >"; }
        ?>
        </fieldset> 
    </body>
</html>