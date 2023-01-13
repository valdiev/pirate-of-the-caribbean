<a href="acteurs/ajouter">Ajouter un acteur</a>
<?php
/** @var Actor[] $clients */
foreach ($actors as $a) { ?>
    <div class="card m-3 p-3">
        <h3><?= $a->generalInfo() ?></h3>
        <a href="/acteurs/remove/<?= $a->getId() ?>">Remove film</a>
    </div>
<?php } ?>
