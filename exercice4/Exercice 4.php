<?php require("Garen.php");?>
<?php require("jinx.php");?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercice 4</title>
</head>
    <body>
    <h3> EXERCICE 4 :</h3> 
        <?php $Garen = new Garen('50','80'); echo "<p>Salut je suis Garen ! </p>"?>
        <?php $jinx = new jinx('50','70'); echo "<p>Salut je suis Jinx ! </p> "?>

        <?php $Garen ->_attack($jinx);?>
        <?php $jinx ->_attack($Garen);?>
        

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