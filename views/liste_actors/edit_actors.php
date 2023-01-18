<form name="form1" method="post" action="<?= $Actor->getId() ?>/runEditActor">
    <label for="firstNameActor">Prénom</label>
    <input type="text" id="firstNameActor" name="firstNameActor" value="<?= $Actor->getFirstName() ?>"><br><br>
    <label for="lastNameActor">Nom</label>
    <input type="text" id="lastNameActor" name="lastNameActor" value="<?= $Actor->getLastName() ?>"><br><br>
    <label for="films">Film dans lesquels l'acteur joue :</label><br>
    <?php
    foreach ($movies as $m) {
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
    <?php } ?>
    <br>
    <input name="submit" type="submit" id="submit" value="Edit le film"><br>
</form>