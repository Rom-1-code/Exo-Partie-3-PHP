<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercice 6</title>
</head>
    <body>
    <h3> EXERCICE 6 :</h3> 

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