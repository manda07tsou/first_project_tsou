<div class="header-home container">
    <div>
        <h1 class="text-secondary">Bienvenue sur E-Shop</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> Modi optio recusandae minus deserunt, velit omnis odio.</p>
        <a href="?p=produits" class="btn-primary mt-5">Acheter maintenant<span class="icon"><i class="fa-sharp fa-solid fa-arrow-right"></i><span></a>
    </div>
    <img src="./../images/icons/fondHeader.png" alt="home-img" class="home-img">
</div>

<div class="">
    <div class="product-section">
        <h4 class="page-title">Nos produits</h4>
        <div class="category-btn">
            <a href="#" class="btn">categorie</a>
            <a href="#" class="btn">categorie</a>
            <a href="#" class="btn">categorie</a>
            <a href="#" class="btn">categorie</a>
            <a href="#" class="btn">categorie</a>
        </div>

        <div class="products mb-10">
        <?php for($i=0; $i<2; $i++){
            include('produits/_card.php');
        } ?>
        </div>
        <a href="?p=produits" class="btn-secondary mt-10">Afficher plus <i class="fa-sharp fa-solid fa-arrow-right"></i></a>
    </div>

    <div class="services-section">
        <h4 class="page-title">Services</h4>
        <div class="cards">
            <div class="card">
                <img src="./../images/icons/moto.png" alt="">
                <h6 class="card-title">Livraison gratuit</h6>
                <div class="card-body">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, et tenetur suscipit amet consequatur totam ipsum nisi, sapiente in aut quibusdam!</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, et tenetur suscipit amet consequatur totam ipsum nisi, sapiente in aut quibusdam!</p>
                </div>
                <div class="card-footer">
                    <a href="?p=services" class="btn-secondary-outlined btn-sm ">Plus de details</a>
                </div>
            </div>

            <div class="card">
                <img src="./../images/icons/reglages.png" alt="">
                <h6 class="card-title">Installation</h6>
                <div class="card-body">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, et tenetur suscipit amet consequatur totam ipsum nisi, sapiente in aut quibusdam!</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, et tenetur suscipit amet consequatur totam ipsum nisi, sapiente in aut quibusdam!</p>
                </div>
                <div class="card-footer">
                    <a href="?p=services" class="btn-secondary-outlined btn-sm ">Plus de details</a>
                </div>
            </div>

            <div class="card">
                <img src="./../images/icons/prestations-de-service.png" alt="">
                <h6 class="card-title">services 3</h6>
                <div class="card-body">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, et tenetur suscipit amet consequatur totam ipsum nisi, sapiente in aut quibusdam!</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, et tenetur suscipit amet consequatur totam ipsum nisi, sapiente in aut quibusdam!</p>
                </div>
                <div class="card-footer">
                    <a href="?p=services" class="btn-secondary-outlined btn-sm ">Plus de details</a>
                </div>
            </div>
        </div>
    </div>

    <div class="contact-section">
        <h4 class="page-title">Nous contacter</h4>

        <div class="contact-grid">
            <form action="">
                <label for="name">Nom</label>
                <input type="text" class="form-control" name="name">
                <label for="mail">Email</label>
                <input type="text" class="form-control" name="mail">
                <label for="message">Messages</label>
                <textarea class="textarea" name="message"></textarea>
                <button class="btn-secondary mt-5">Envoyer</button>
            </form>
            <img src="./../images/local2.jpg" alt="">
        </div>

    </div>
</div>
