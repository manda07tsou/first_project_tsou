<?php include('pages/produits/_produitsHeader.php') ?>

<div class="products-area">
    <div class="filter-area">
        <h2 class="page-title">Nos produits</h2>
        <div>
            <form action="#" class="filter-form">
                <div class="form-group">
                    <label for="filter" class="btn-not-hoverable">Trier par :</label>
                    <select name="filter" id="" class="select-form">
                        <option value="test1">prix decroissant</option>
                        <option value="test2">prix croissant</option>
                        <option value="test3">nombre en stock</option>
                    </select>
                </div>
                <button type="submit" class="btn-secondary ml-10">Afficher</button>
            </form>
        </div>
    </div>
    <?php for($i=1; $i<4; $i++){ ?>
        <!-- <h4 class="product-category">Categorie <?= $i ?></h4> -->
        <div class="products">
            <?php include('_card.php'); ?>
        </div>
    <?php } ?>
</div>