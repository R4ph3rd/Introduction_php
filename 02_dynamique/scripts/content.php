<?php
    $page = $_GET['page'];
    
    if ($page == 'baguettes'){
        include('./contents/baguettes.php');
    } 
    if ($page == 'histoire'){
        include('./contents/histoire.php');
    }
    if ($page == 'panier'){
        include('./contents/panier.php');
    } 
    if ($page == 'location'){
        include('./contents/location.php');
    }
    if ($page == 'achat'){
        // include('./contents/achat.php');
    } 
?>