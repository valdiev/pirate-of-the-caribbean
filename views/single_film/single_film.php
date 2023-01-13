<?php if ($_SESSION) {
    echo '<a href="/films/remove/<?= $leFilm->getId() ?>">Remove film</a><br>';
    echo '<a href="/films/edit/<?= $leFilm->getId() ?>">Edit film</a>';
}
?>
<div class="card m-3 p-3">
    <img src="<?= $image->url ?>" alt="">
    <h3><?= $leFilm->getTitle() ?></h3>
    <p><?= $leFilm->getDate() ?></p>
    <p><?= $leFilm->getSynopsis() ?></p>
</div>