<li class="pain_item">
    <img src="./images/<?php echo $pain['Image']; ?>" alt="">
    
    <div class="desc">
        <h3><?php echo $pain['Nom']; ?></h3>
        <p><?php echo $pain['Description']; ?></p>
        <p class="qté">Il reste <?php echo $pain['Quantité'] ?> unités.</p>

        <button class="cta outlined" onclick="<?php 

        $article = array_search($pain['Nom'], $_SESSION['panier']);

        if (!$article){
            $_SESSION['panier'][$article]['Quantité'] ++ ;
        } else {
            $new_pain = array();
            $new_pain['Nom'] = $pain['Nom'];
            $new_pain['Quantité'] = 1 ;
            array_push($_SESSION['panier'],$new_pain);
        }
        
        ?>"><div>Commander</div></button>
        
    </div>

</li>