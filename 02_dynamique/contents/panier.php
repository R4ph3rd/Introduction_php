<section id="panier">
    <div class="content">
        <h2>Mon panier</h2>

        <ul class="list_panier">    
            <?php 
                $request_panier = mysqli_query($connect, "SELECT * FROM panier"); // on récupère les données de la table PANIER

                if (mysqli_num_rows($request_panier) > 0){
                    while ($panier = mysqli_fetch_array($request_panier)){
                        include('./composants/item_panier.php');
                    }
                }   
            ?>
        </ul>


        <a href="?page=achat" class="cta">
            <div>acheter</div>
        </a>
    </div>
</section>