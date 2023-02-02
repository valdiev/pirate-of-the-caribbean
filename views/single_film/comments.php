<section class="comments_form">
    <div class="comments_form_image">
        <img src="/public/img/pirate-bg8.jpg" alt="">
    </div>
    <div class="comments_form_form">
        <form name="form1" method="post" action="<?= $leFilm->getId() ?>/runComments">
            <h1>Ajouter un commentaire pour le film : <?= $leFilm->getTitle() ?></h1>
            <label for="firstNameComments">Prenom :</label>
            <input type="text" id="firstNameComments" name="firstNameComments"><br><br>
            <label for="lastNameComments">Nom :</label>
            <input type="text" id="lastNameComments" name="lastNameComments"><br><br>
            <label for="comments">Commentaire :</label>
            <textarea name="comments" id="comments" cols="30" rows="10"></textarea><br><br>
            <button type="submit" class="pirate_button">Editer</button>
        </form>
    </div>
</section>