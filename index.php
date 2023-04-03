<?php
$page =isset($_GET['p'])?$_GET['p']:'produits';


ob_start();
    switch($page){
        case 'produits':
            include('pages/produits/produits.php');
        break;
        case 'produits-details':
            include('pages/produits/details.php'); 

    }
$body = ob_get_clean();

include('template.php');
?>