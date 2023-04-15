<?php include('pages/produits/_produitsHeader.php') ?>

<div class="products-area">
    <div class="product-detail">
        <div class="page-title">Details produits : </div>
        <?php include("_card_details.php"); ?>
        <div class="product-other-information">
            <h6>Plus d'information sur le produit</h6>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam esse labore, deserunt eius aliquid accusamus facilis qui, impedit voluptate quisquam quod exercitationem, voluptates odit eaque recusandae? Doloremque delectus distinctio asperiores!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam esse labore, deserunt eius aliquid accusamus facilis qui, impedit voluptate quisquam quod exercitationem, voluptates odit eaque recusandae? Doloremque delectus distinctio asperiores!</p>
        </div>
    </div>

    <div class="similar-products">
        <div class="page-title">Produits similaires</div>
        <div class="products">
            <?php for($i=0; $i<3; $i++){?>
                <a href="?p=produit-details" class="product">
                    <?php include('_card.php');?>
                </a>
            <?php } ?>
        </div>
    </div>
</div>