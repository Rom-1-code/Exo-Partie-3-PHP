<?php require("personnage.php");?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercice 2</title>
</head>
    <body>
    <h3> EXERCICE 2 :</h3> 
        <?php $personage1 = new personnage("Romain");?>

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