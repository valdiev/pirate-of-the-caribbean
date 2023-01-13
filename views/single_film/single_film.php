<a href="/films/remove/<?= $leFilm->getId() ?>">Remove film</a>
<div class="card m-3 p-3">
    <h3><?= $leFilm->getTitle() ?></h3>
    <p><?= $leFilm->getDate() ?></p>
    <p><?= $leFilm->getSynopsis() ?></p>
</div>