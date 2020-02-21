<!-- main de la page produit -->
<main>

    <?php foreach ($musique as $musiques) { ?>

        <h2><?= $musiques['titre'] ?></h2>
        <p><?= $musiques['description'] ?></p>
        <p><?= $musiques['type_ambiance'] ?></p>

    <?php } ?>

    <div class="produit">
        <img src="img/page_produit/chill_produit.png" alt="image produit blackmill"/>
        <div>
            <h2>BLACKMILL MIRACLE</h2>
            <h4 class="genre">Genre : Chill</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ac arcu eget nulla accumsan fermentum. Ut lacus velit, interdum nec rhoncus nec, consectetur ut sem. Curabitur pulvinar volutpat augue at placerat. Praesent sagittis nulla non felis blandit mollis. Vestibulum euismod ante euismod risus sollicitudin aliquam. Nam in nunc facilisis, pulvinar nisl quis, porttitor urna. Cras rutrum porttitor quam dignissim interdum. Nam faucibus suscipit elit eu rutrum. Donec in mattis felis, vel consequat ante. Pellentesque sagittis accumsan tellus, id porta ante lacinia at. Maecenas commodo quam eu purus volutpat, vitae eleifend ipsum sodales. Fusce molestie massa sit amet condimentum lacinia. </p>
            <a class="description_smart" href="index.php">Voir la description</a>
            <audio controls>
                <source src="mp3/exemple-mp3.mp3" type="audio/mp3">
            </audio><br>
            <input onclick="confirmation()" type="checkbox" id="valide" name="valide"/>
            <label for="valide">J'achète les droites *</label>
            <p id="message"></p>
            <a href="page_produit.php">Acheter</a>
        </div>
    </div>

    <div class="font_produit_similaire">
        <h2><span> <img src="img/accueil/etoile.png" alt="etoile du titre de nos extrait"/> </span>Produit similaire<span> <img src="img/accueil/etoile.png" alt="etoile du titre de nos extrait"/> </span></h2>
        <div class="produit_similaire">
            <div>
                <img src="img/page_produit/produit_similaire/SipGod.png" alt="image du produit similaire sipGod"/>
                <p>SipGod</p>
                <img class="favorie" src="img/accueil/extrait/favorie.png" alt="icon favorie de la page d'accueil"/>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi scelerisque leo id malesuada accumsan. Curabitur nulla lacus, ullamcorper vitae massa id</p>
                <p>chill</p>
                <a href="index.php">Détail</a>
            </div>
            <div>
                <img src="img/page_produit/produit_similaire/tranquil.png" alt="Image du produit similaire tranquil"/>
                <p>tranquil</p>
                <img class="favorie" src="img/page_produit/produit_similaire/favorie.png" alt="icon favorie des produits similaire"/>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi scelerisque leo id malesuada accumsan. Curabitur nulla lacus, ullamcorper vitae massa id</p>
                <p>chill</p>
                <a href="index.php">Détail</a>
            </div>
            <div>
                <img src="img/page_produit/produit_similaire/lastHeroes.png" alt="image du produit similaire LastHeroes"/>
                <p>LastHeroes</p>
                <img class="favorie" src="img/page_produit/produit_similaire/favorie.png" alt="icon favorie des produits similaire"/>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi scelerisque leo id malesuada accumsan. Curabitur nulla lacus, ullamcorper vitae massa id</p>
                <p>chill</p>
                <a href="index.php">Détail</a>
            </div>
            <div>
                <img src="img/page_produit/produit_similaire/Wale.png" alt="image du produit similaire Wale"/>
                <p>Wale</p>
                <img class="favorie" src="img/page_produit/produit_similaire/favorie.png" alt="icon favorie des produits similaire"/>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi scelerisque leo id malesuada accumsan. Curabitur nulla lacus, ullamcorper vitae massa id</p>
                <p>chill</p>
                <a href="index.php">Détail</a>
            </div>
        </div>
    </div>
</main>
