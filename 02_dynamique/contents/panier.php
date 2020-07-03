<section id="panier">
    <div class="content">
        <h2>Mon panier</h2>

        <ul class="list_panier">    
            <?php 
                for ($i = 0 ; $i < 3 ; $i ++){
                    include('./composants/item_panier.php');
                }
            ?>
        </ul>


        <a href="?page=achat" class="cta">
            <div>acheter</div>
        </a>
    </div>
</section>