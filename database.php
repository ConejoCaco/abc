<html>
    <head>
    </head>
<body>
    <style> table, td, tr { border: 1px solid;} </style>
<?php 
$server = "localhost";
$user = "root";
$password = "";
$bd = "prueba";

$conn = new mysqli($server, $user, $password, $bd);
if($conn->connect_error){
    die("Connection failed");
}
$sql = "SELECT * FROM personas;";
$result = $conn->query($sql);
if($result->num_rows > 0){
    echo "<table><thead><tr><th>id</th><th>nombre</th>
            <th>edad</th></tr></thead><tbody>";
    while($row = $result->fetch_assoc()){
        echo "<tr><td>".$row['id']."</td> 
                <td>".$row['nombre']."</td>
                <td>".$row['edad']."</td></tr>";
        echo "<br><br>";
    }
}else{
    echo "la cosa no funcionó";
}
// $sql = "INSERT into personas (id, nombre, edad)
//         VALUES (2, 'Antonio', 33);";
// if ($conn->query($sql)===TRUE){
//     echo "New Row sucessfuly inserted";
// }else{
//     echo "Error with $sql. Info: $conn->error.";
// }

#echo "Connection successful";
?>
</body>
</html>