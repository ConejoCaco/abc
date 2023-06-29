<!Doctype html>
<html>
    <head>
        <title>Ejemplo2</title>
    </head>
    <body>
        <?php
            $nameError = ""; 
            if($_SERVER["REQUEST_METHOD"]=="POST"){
            $name = $_POST["name"];
            if(empty($name)){
                $nameError = "Este campo es requerido.";
            }else{
                $nameError = "";
            }
            $edad = $_POST["edad"];

            echo "<p>Fue enviado el nombre $name y la edad $edad</p>";
        }
        ?>
        <h1>Ejemplo2</h1>
        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
            Nombre: <input type="text" name="name">
            <span>* <?php echo $nameError; ?></span>
            <br><br>
            Edad: <input type="number" name="edad">
            <input type="submit" value="Submit">
        </form>
    </body>
</html>