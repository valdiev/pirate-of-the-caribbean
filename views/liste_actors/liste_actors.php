<?php if($_SESSION) { ?>
    <a href="acteurs/ajouter">Ajouter un acteur</a>
<?php } ?>

<?php
/** @var Actor[] $clients */
foreach ($actors as $a) { ?>
    <div class="card m-3 p-3">
        <h3><?= $a->generalInfo() ?></h3>
        <p>Liste des films :</p>
        <ul>
            <?php foreach ($moviesActors as $ma) {
                if($ma->actors_id == $a->getId()){
                    foreach ($movies as $m) {
                        if($ma->movies_id == $m->getId()){
                    ?>
                    <li><?= $m->getTitle() ?></li>
                <?php }}}} ?>
        </ul>
        <?php if($_SESSION) { 
            echo '<a href="/acteurs/edit/' . $a->getId() . '">Edit actor</a>';
            echo '<a href="/acteurs/remove/' . $a->getId() . '">Remove actor</a>';
        } ?>
    </div>
<?php } ?>
