<!-- <img src="./images/baguettes_trad.jpg" class="baguette"> -->

<section id="baguettes">
<ul>
<?php
    session_start();
    $articles = mysqli_query($connect, "SELECT * FROM articles");

    if (mysqli_num_rows($articles) > 0){
        while ( $pain = mysqli_fetch_array($articles)){
            include('./composants/pain.php');
        }
    }

    echo count($_SESSION['panier']);
?>
</ul>
</section>