<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ejemplo POO</h1>
    
    <?php
        include "./usuario.php" ;

        $ususrio1=new Usuario("David moreno", "Davidmoreno@gmail.com","33") ;
        $ususrio2=new Usuario("Dayan chavez", "DayanPeru@gmail.com","Lima") ;

        echo $usuario1->nombre;
    ?>

</body>
</html>