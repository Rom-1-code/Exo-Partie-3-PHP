<?php require("User.php"); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css"/>
    <title>Exercice 1</title>
</head>

<body>
    <h3>Exercice 1</h3>
        <?php
            $User = new User();
            $User->afficherUser();
        ?>
<table>
<tr> 
    <th>
        User
    </th>
</tr>

<tr> 
    <th><p>Prenom : Romain</p>
        <p>Nom : FLEMAL</th></p>
</tr>

<tr> 
    <th>
        afficherUser() : void
    </th>
</tr>

</table>
<div class="clearfix"></div>

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