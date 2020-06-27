<?php

    if ($_GET['page'] == 'baguettes'){
        include('./contents/baguettes.php');
    } elseif ($_GET['page'] == 'histoire'){
        include('./contents/histoire.php');
    } elseif ($_GET['page'] = 'location'){
        include('./contents/location.php');
    }
?>