<!Doctype html>
<html>
    <head>
        <title>Ejemplo</title>
    </head>
    <body>
        <h1>Ejemplo1</h1>
        <?php 
        $nombre = "Simon";
        $edad = 24;
        
        echo "<h2>Hello $nombre y tengo $edad años.</h2>";
         ?>
         <h1>Ejemplo2</h1>
         <?php 
         echo "hasta aqui se puede ver su nombre $nombre";
         if($edad > 18){
            echo "<p>Puedo conducir sin un adulto responsable</p>";
         }else{
            echo "<p>Puedo conducir acompañado de un adulto</p>";
         }
         for($i = 0 ; $i < $edad; $i++){
            echo "<p>$i</p>";
         }
         ?>
    </body>
</html>