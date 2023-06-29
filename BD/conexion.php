<?php
    
    $nombre= $_POST["nombre"];
    echo $nombre;
    echo "<br>";

    $anio= $_POST["anio"];
    echo $anio;
    echo "<br>";
    
    $rut= $_POST["rut"];
    echo $rut;
    echo "<br>";

    $ciudad= $_POST["ciudad"];
    echo $ciudad;
    echo "<br>";
    
    
    
    $host="localhost";
	$db ="trabajadores";
	$usuario="root";
	$clave="";

    $query = "INSERT INTO tabla(valuessss)
    values
    ('.$nombre','.$anio.','.$rut.','.$ciudad.')";

    $con = new mysqli ($host,$usuario,$clave,$db);
    
    
	if(mysqli_query($con,$query)){
        echo "ya se inserto";
    }else{
        echo "error";
    }


?>