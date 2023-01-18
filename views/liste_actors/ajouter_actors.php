<form name="form1" method="post" action="runAddActeur">
    <label for="firstNameActor">Prénom</label>
    <input type="text" id="firstNameActor" name="firstNameActor"><br><br>
    <label for="lastNameActor">Nom de famille</label>
    <input type="text" id="lastNameActor" name="lastNameActor"><br>
    <label for="characterName">Prénom & nom personnage interprété</label>
    <input type="text" id="characterName" name="characterName"><br>
    <label for="mainCharacter">Personnage principal</label>
    <input type="checkbox" id="mainCharacter" name="mainCharacter"><br>
    <label for="films">Film dans lesquels l'acteur joue :</label><br>
    <?php
    foreach ($movies as $m) { ?>
        <input type="checkbox" id="movies" name="movies[]" value="<?= $m->getId()?>">
        <label for="movies"><?= $m->getTitle() ?></label><br>
    <?php } ?>
    <br>
    <input name="submit" type="submit" id="submit" value="Ajouter"><br>
</form>