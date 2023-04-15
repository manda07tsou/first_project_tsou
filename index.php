<?php
$page =isset($_GET['p'])?$_GET['p']:'home';


ob_start();
    switch($page){
        case 'home':
            include('pages/home.php');
        break;
        case 'produits':
            include('pages/produits/produits.php');
        break;
        case 'produit-details':
            include('pages/produits/details_produit.php'); 
    

    }
$body = ob_get_clean();

include('template.php');
?>