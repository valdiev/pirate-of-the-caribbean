<section class="editActors">
    <div class="editActors_image">
        <img src="/public/img/pirate-bg6.jpg" alt="">
    </div>
    <div class="editActors_form">
        <form name="form1" method="post" action="<?= $Actor->getId() ?>/runEditActor">
            <h1>Modifier l'acteur</h1>
            <label for="firstNameActor">Prénom</label>
            <input type="text" id="firstNameActor" name="firstNameActor" value="<?= $Actor->getFirstName() ?>"><br><br>
            <label for="lastNameActor">Nom</label>
            <input type="text" id="lastNameActor" name="lastNameActor" value="<?= $Actor->getLastName() ?>"><br><br>
            <label for="characterName">Prénom & nom personnage interprété</label>
            <input type="text" id="characterName" name="characterName" value="<?= $Actor->getCharacterName() ?>"><br><br>
            <div class="mainCharacter">
                <label for="mainCharacter">Personnage principal</label>
                <input type="checkbox" id="mainCharacter" name="mainCharacter" <?= ($Actor->maincharacter == 1 ? 'checked' : '');?>>
            </div>
            <br>
            <div class="form_films">
                <label for="films">Film dans lesquels l'acteur joue :</label><br>
                <?php
                foreach ($movies as $m) {
                    ?>
                    <div class="form_films_item">
                        <?php
                        $bool = false;
                        foreach ($arrayMovieActors as $ma){
                            if($Actor->getId() == $ma->actors_id && $m->getId() == $ma->movies_id){
                                $bool = true;
                                ?>
                                <input type="checkbox" id="movies" name="movies[]" value="<?= $m->getId()?>" checked>
                            <?php }
                        }
                        if(!$bool) echo '<input type="checkbox" id="movies" name="movies[]" value="' . $m->getId() . '">'

                        ?>
                        <label for="movies"><?= $m->getTitle() ?></label><br>
                    </div>
                <?php } ?>
            </div>
            <br>
            <button type="submit" class="pirate_button">Edit le film</button>
        </form>
    </div>
</section>