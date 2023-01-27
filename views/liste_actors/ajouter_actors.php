<section class="formAddActor">
    <div class="formAddActor_image">
        <img src="/public/img/pirate-bg5.jpg" alt="">
    </div>
    <div class="formAddActor_form">
        <h1>Créer un nouvel acteur</h1>
        <form name="form1" method="post" action="runAddActeur">
            <label for="firstNameActor">Prénom</label>
            <input type="text" id="firstNameActor" name="firstNameActor"><br><br>
            <label for="lastNameActor">Nom de famille</label>
            <input type="text" id="lastNameActor" name="lastNameActor"><br><br>
            <label for="characterName">Prénom & nom personnage interprété</label>
            <input type="text" id="characterName" name="characterName"><br>
            <br>
            <div class="mainCharacter">
                <label for="mainCharacter">Personnage principal</label>
                <input type="checkbox" id="mainCharacter" name="mainCharacter">
            </div>
            <br>
            <div class="form_films">
            <label for="films">Film dans lesquels l'acteur joue :</label><br>
                <?php
                foreach ($movies as $m) { ?>
                    <div class="form_films_item">
                        <input type="checkbox" id="movies" name="movies[]" value="<?= $m->getId()?>">
                        <label for="movies"><?= $m->getTitle() ?></label>
                    </div>
                <?php } ?>
            </div>
            <br>
            <button type="submit" class="pirate_button">Ajouter</button>
        </form>
    </div>
</section>