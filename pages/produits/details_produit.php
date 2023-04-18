<?php include('pages/produits/_produitsHeader.php') ?>

<div class="products-area">
    <div class="product-detail">
        <h4 class="page-title">Details produits : </h4>
        <?php include("_card_details.php"); ?>
        <div class="product-other-information">
            <h6>Plus d'information sur le produit</h6>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam esse labore, deserunt eius aliquid accusamus facilis qui, impedit voluptate quisquam quod exercitationem, voluptates odit eaque recusandae? Doloremque delectus distinctio asperiores!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam esse labore, deserunt eius aliquid accusamus facilis qui, impedit voluptate quisquam quod exercitationem, voluptates odit eaque recusandae? Doloremque delectus distinctio asperiores!</p>
        </div>
    </div>

    <div class="similar-products">
        <h5 class="page-title">Produits similaires</h5>
        <div class="products">
            <?php for($i=0; $i<1; $i++){
                include('_card.php');
            } ?>
        </div>
    </div>
</div>