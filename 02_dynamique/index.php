<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boulangerie de l'atelier numérique</title>
    <link href="./style/style.css" rel="stylesheet">
    <link href="./style/panier.css" rel="stylesheet">

</head>

<body>
    <?php include('./composants/header.php') ; ?>

    <!-- <section class="content"> -->
        <?php 
            include('./scripts/connect.php');
            include('./scripts/content.php');
        ?>
    <!-- </section> -->

    <?php include('./composants/footer.php') ; ?>
 <body>