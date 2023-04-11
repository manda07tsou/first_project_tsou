<?php include('pages/produits/_produitsHeader.php') ?>

<div class="products-area">
    <div class="filter-area">
        <div class="page-title">Nos produits:</div>
        <div>
            <form action="#" class="filter-form">
                <div class="form-group">
                    <label for="filter" class="btn-not-hoverable">Trier par :</label>
                    <select name="filter" id="" class="select-form">
                        <option value="test1">prix decroissant</option>
                        <option value="test2">prix croissant</option>
                        <option value="test3">nomber en stock</option>
                    </select>
                </div>
                <button type="submit" class="btn-secondary ml10">Afficher</button>
            </form>
        </div>
    </div>
    <div class="products">
        <?php
            for($i=0; $i<3; $i++){
                include('_card.php');
            }
         ?>
    </div>
</div>