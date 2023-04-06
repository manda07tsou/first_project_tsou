<?php include('pages/produits/_produitsHeader.php') ?>

<div class="products-area">
    <div class="product-detail">
        <div class="page-title">Details produits : </div>
        <?php include("_card_details.php"); ?>
    </div>

    <div class="similar-products">
        <div class="page-title">Produits similaires</div>
        <div class="products">
        <?php
            for($i=0; $i<2; $i++){
                include('_card.php');
            }
         ?>
    </div>
    </div>
</div>