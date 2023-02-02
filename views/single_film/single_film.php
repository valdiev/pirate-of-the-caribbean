<?php if ($_SESSION) {
    echo '<a href="/films/remove/' . $leFilm->getId() . '">Remove film</a><br>';
    echo '<a href="/films/edit/' . $leFilm->getId() . '">Edit film</a>';
}
?>
<div id="single__film">
    <section class="card m-3 p-3 single__film">
        <div class="single__film-video">
            <iframe id="ytplayer" width="420" height="345" src="<?= $leFilm->getVideo() ?>?autoplay=1&mute=1&loop=1&modestbranding&controls=0&rel=0">
            </iframe>
        </div>
        <div class="single__film-content">
            <h3><?= $leFilm->getTitle() ?></h3>
            <p><?= $leFilm->getDate() ?></p>
            <p><?= $leFilm->getSynopsis() ?></p>
        </div>
    </section>

    <section class="related__films">
        <h1>A voir aussi...</h1>
        <div class="movies">
        <?php foreach ($relatedFilms as $key => $r) {
        ?>
            <article class="movies_card">
                <a href="/films/<?= $r["id"] ?>">
                    <div class="movies_card_image">
                        <?php foreach ($relatedFilmsImage as $key => $i) {
                            if ($i["movie_id"] == $r["id"]) { ?>
                                <img src="<?= $i["url"] ?>" alt="">
                            <?php
                            }
                            ?>

                        <?php } ?>
                    </div>
                    <div class="movies_card_info">
                        <h3><?= $r["title"] ?></h3>
                        <p>Date de sortie : <?= $r["date"] ?></p>
                        <p class="small"><?= $r["synopsis"] ?></p>
                    </div>
                </a>
            </article>
            <?php } ?>
        </div>

    </section>
</div>