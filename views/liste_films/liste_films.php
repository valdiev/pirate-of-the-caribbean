<?php
if ($_SESSION) {
    echo '<a href="films/ajouter">Ajouter un film</a>';
}
foreach ($films as $key=>$f) {?>
    <div class="card m-3 p-3">
        <?php
            if(isset($image[$key]->url)){?>
                <img src="<?= $image[$key]->url?>" alt="">
            <?php }
        ?>
        <h3><?= $f->generalInfo() ?></h3>
        <p class="small"><?= $f->descriptionInfo() ?></p>

        <a href="/films/<?= $f->getId() ?>">Voir le profil</a>
    </div>
<?php } ?>
