<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premiers essais</title>
    <link href="./style.css" rel="stylesheet">

</head>

<?php
// Ceci est un commentaire. Je déclare mes variables ici pour tout mon fichier php.
$display_card = true ;
$stock_boulangerie = 18 ;
$achat_01 = 4 ;
$achat_02 = 2 ;

?>

<body>
    <section>
        <?php 
            echo 'Voici mon super texte php !'; 
        ?>
    </section>

    <p>
        <?php
            // echo 'La boulangerie a en stock ' .$stock_boulangerie. ' baguettes. </br>' ;
            // echo 'Après le premier acheteur, il reste ' .$stock_boulangerie - $achat_01. ' baguettes. </br>';
            // echo 'Après le dexuième acheteur, il reste ' .$stock_boulangerie - $achat_01 - $achat_02. ' baguettes. </br>';
            
            echo 'La boulangerie a en stock ' .$stock_boulangerie. ' baguettes. </br>' ;
            $stock_boulangerie -= $achat_01;
            echo 'Après le premier acheteur, il reste ' .$stock_boulangerie. ' baguettes. </br>';
            $stock_boulangerie -= $achat_02 ;
            echo 'Après le dexuième acheteur, il reste ' .$stock_boulangerie. ' baguettes. </br>';
        ?>
    </p>

    <?php
        if (display_card){
            echo '<article class="card">
                <div></div>
                <h2>Titre de card</h2>
                <p> Description de la card </p>
            </article>';
        }

        for ($i = 0 ; $i < 10 ; $i++){
            echo $i.'</br>';
          }
    ?>
 <body>