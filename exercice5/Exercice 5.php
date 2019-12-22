<?php require("PersonnageExo5.php");?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercice 5</title>
</head>
    <body>
    <h3> EXERCICE 5 :</h3> 

    <?php $P1 =new Personnage('1','Mage'); 
          $P1->instanciePDO($P1);

    ?>

    <div class="code"><?php

        echo highlight_file(
        './'.
        basename(
        __FILE__),
        true);
      
    ?>
    </div>
    </body>
</html>