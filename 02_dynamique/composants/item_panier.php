<li>
    <div class="img loader"></div>
    <div class="list">
        <h3><?php echo $panier['Article']; ?></h3>
        <p>x <?php echo $panier['Nombre']; ?></p>
    </div>
    <div class="prix">
        <p><?php echo $panier['Prix']; ?></p>
        <button class="trash" action="../scripts/delete_item.php"><img src="./images/trash.png" alt="trash"></button>
    </div>
</li>