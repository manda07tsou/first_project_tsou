<div class="container">
    <h2 class="page-title text-primary">Panier</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

    <?php for ($i=0; $i < 5 ; $i++) { ?>
        <div class="card cart mb-5">
            <div>
                <img src="./../images/image2.png" style="width: 50px; height: 50px;" alt="">
            </div>
            <div class="panier-description">
                <strong>nom produit</strong>
                <p>1 500 000 Ar</p>
            </div>
            <div>
                <input type="number" class="form-control"/>
            </div>
            <a href="#" class="cart-remove" title="supprimer">
                <i class="fa fa-trash"></i>
            </a>
        </div>
    <?php } ?>
</div>