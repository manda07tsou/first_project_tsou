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
        break;
        case 'services':
            include('pages/services.php');
        break;
        case 'a-propos':
            include('pages/about.php');
        break;
        case 'contact':
            include('pages/contact.php');
        break;
    
    }
$body = ob_get_clean();

include('template.php');
?>