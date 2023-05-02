<div class="container">
    <h2 class="page-title text-primary">Panier</h2>

    <form action="#">
        <div class="carts">
            <div>
                <?php for ($i=0; $i < 5 ; $i++) { ?>
                <div class="cart-item mb-5">
                    <div>
                        <img src="https://placehold.co/60x60" class="cart-img" alt="">
                    </div>
                    <div class="panier-description">
                        <strong class="text-secondary">nom produit</strong>
                        <p>1 500 000 Ar</p>
                    </div>
                    <div>
                        <input-number data-iteration=1></input-number>
                    </div>
                    <a href="#" class="cart-btn" title="supprimer">
                        <i class="fa fa-trash"></i>
                    </a>
                </div>
                <?php } ?>
            </div>
            <div class="cart-summary">
                <div class="card">
                    <h4>Commande</h4>

                    <p class="summary-item">Articles: <span> 5 <span></p>
                    <h6 class="summary-item">Total : <span>7 500 000 Ar <span></h6>
                    <button class="btn-secondary">Confirmer</button>
                </div>
            </div>
        </div>
    </form>
</div>