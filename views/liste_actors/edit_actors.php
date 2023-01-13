<form name="form1" method="post" action="<?= $Actor->getId() ?>/runEditActor">
    <label for="firstNameActor">Prénom</label>
    <input type="text" id="firstNameActor" name="firstNameActor" value="<?= $Actor->getFirstName() ?>"><br><br>
    <label for="lastNameActor">Nom</label>
    <input type="text" id="lastNameActor" name="lastNameActor" value="<?= $Actor->getLastName() ?>"><br><br>
    <input name="submit" type="submit" id="submit" value="Edit le film"><br>
</form>