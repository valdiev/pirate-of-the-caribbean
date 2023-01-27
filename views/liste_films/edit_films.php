<section class="editFilms">
    <div class="editFilms_image">
        <img src="/public/img/pirate-bg8.jpg" alt="">
    </div>
    <div class="editFilms_form">
        <form name="form1" method="post" action="<?= $leFilm->getId() ?>/runEditFilm">
            <h1>Modifier un film</h1>
            <label for="titleMovie">Title</label>
            <input type="text" id="titleMovie" name="titleMovie" value="<?= $leFilm->getTitle() ?>"><br><br>
            <label for="synopsis">Synopsis</label>
            <textarea name="synopsis" id="synopsis" cols="30" rows="10"><?= $leFilm->getSynopsis() ?></textarea><br>
            <label for="dateSorite">Date de sortie</label>
            <input type="date" id="dateSortie" name="dateSortie" value="<?= $leFilm->getDate() ?>"><br><br>
            <label for="duration">Duration (en mins)</label>
            <input type="text" id="duration" name="duration" value="<?= $leFilm->getDuration() ?>"><br><br>
            <label for="imageFilm">Image du film (url)</label>
            <input type="text" id="imageFilm" name="imageFilm" value="<?= $image->url ?>"><br><br>
            <button type="submit" class="pirate_button">Editer</button>
        </form>
    </div>
</section>