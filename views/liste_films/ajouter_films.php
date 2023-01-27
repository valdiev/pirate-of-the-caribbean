<section class="formAddFilms">
    <div class="formAddFilms_image">
        <img src="/public/img/pirate-bg7.jpg" alt="">
    </div>
    <div class="formAddFilms_form">
        <form name="form1" method="post" action="runAjouterFilm">
            <h1>Ajouter un film</h1>
            <label for="titleMovie">Title</label>
            <input type="text" id="titleMovie" name="titleMovie"><br><br>
            <label for="synopsis">Synopsis</label>
            <textarea name="synopsis" id="synopsis" cols="30" rows="10"></textarea><br>
            <label for="dateSorite">Date de sortie</label>
            <input type="date" id="dateSortie" name="dateSortie"><br><br>
            <label for="duration">Duration (en mins)</label>
            <input type="text" id="duration" name="duration"><br><br>
            <label for="imageFilm">Image du film (url)</label>
            <input type="text" id="imageFilm" name="imageFilm"><br><br>
            <button type="submit" class="pirate_button">Ajouter</button>
        </form>
    </div>
</section>