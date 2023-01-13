<a href="films/ajouter">Ajouter un film</a>
<?php
/** @var Film[] $clients */
foreach ($films as $f) { ?>
    <div class="card m-3 p-3">
        <h3><?= $f->generalInfo() ?></h3>
        <p class="small"><?= $f->descriptionInfo() ?></p>

        <a href="/films/<?= $f->getId() ?>">Voir le profil</a>
    </div>
<?php } ?>
