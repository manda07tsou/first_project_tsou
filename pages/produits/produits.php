<?php include('pages/produits/_produitsHeader.php') ?>

<div class="products-area">
    <div class="page-title text-secondary">Nos produits:</div>
    <div class="products">
        <?php
            for($i=0; $i<3; $i++){
                include('_card.php');
            }
         ?>

    </div>
</div>