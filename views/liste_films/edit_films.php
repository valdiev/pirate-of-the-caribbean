<form name="form1" method="post" action="<?= $leFilm->getId() ?>/runEditFilm">
    <label for="titleMovie">Title</label>
    <input type="text" id="titleMovie" name="titleMovie" value="<?= $leFilm->getTitle() ?>"><br><br>
    <label for="synopsis">Synopsis</label>
    <textarea name="synopsis" id="synopsis" cols="30" rows="10"><?= $leFilm->getSynopsis() ?></textarea><br>
    <label for="dateSorite">Date de sortie</label>
    <input type="date" id="dateSortie" name="dateSortie" value="<?= $leFilm->getDate() ?>"><br><br>
    <label for="duration">Duration (en mins)</label>
    <input type="text" id="duration" name="duration" value="<?= $leFilm->getDuration() ?>"><br><br>
    <input name="submit" type="submit" id="submit" value="Edit le film"><br>
</form>