<?php include('pages/produits/_produitsHeader.php') ?>

<div class="products-area">
    <div class="filter-area">
        <div class="page-title text-secondary">Nos produits:</div>
        <div >Filtre de toutes les produits</div>
    </div>
    <div class="products">
        <?php
            for($i=0; $i<3; $i++){
                include('_card.php');
            }
         ?>

    </div>
</div>