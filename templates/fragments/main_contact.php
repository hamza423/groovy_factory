<!-- main de la page contact -->

<div class="presentation_contact">
    <h2>Contacter nous !</h2>
    <p>Besoin d'information pour la création d'une ambiance musicale ?</p>
</div>
<div class="contact">
    <div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2886.4635163854896!2d-79.38486338408592!3d43.659328979121135!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b34b5740be19f%3A0xffabadb01bd3b74f!2sAura%20Condo%20386%20Yonge%20Street!5e0!3m2!1sfr!2sfr!4v1581586888110!5m2!1sfr!2sfr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    <p>Aura Condo 386 Yonge Street</p>
    <p>Téléphone : 04 00 00 00 00</p>
    </div>
    <form method="post" action="controller_contact.php">
        <label for="nom">Nom: </label>
        <input type="text" class="nom" name="nom" id="nom" /><br>
        <label for="prenom">Prenom: </label>
        <input type="text" class="prenom" name="prenom" id="prenom" /><br>
        <label for="email">E-mail: </label>
        <input type="email" name="email" id="email" /><br>
        <label for="objet">Objet: </label>
        <input type="text" name="objet" id="objet" /><br>
        <label for="message">Message: </label>
        <textarea class="message" name="message" id="message" /></textarea><br>
        <input type="submit" value="Envoyer" />
    </form>
</div>