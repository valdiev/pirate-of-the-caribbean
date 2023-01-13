<?php
/** @var Film[] $clients */
foreach ($films as $f) { ?>

    <a href="/ajouter">Ajouter un film</a>


    <div class="card m-3 p-3">
        <h3><?= $f->generalInfo() ?></h3>
        <p class="small"><?= $f->descriptionInfo() ?></p>

        <a href="/film/<?= $f->getId() ?>">Voir le profil</a>
    </div>
<?php } ?>
