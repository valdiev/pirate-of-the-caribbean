<div class="listActors">
    <div class="listActors_addActor">
        <?php if($_SESSION) { ?>
        <a href="acteurs/ajouter">Ajouter un acteur</a>
        <?php } ?>
    </div>
    <div class="listActors_header">
        <div class="listActors_header_image">
            <img src="public/img/pirate-bg2.jpg" alt="">
        </div>
    </div>

    <?php /** @var Actor[] $clients */?>
    <div class="listActors_slider">
            <?php
            foreach ($actors as $key => $a) {
                if($key === 0){?>
                    <input type="radio" name="slider" class="slide-radio<?= $key+1?>" checked id="slider_<?= $key+1?>">
                <?php }else{?>
                    <input type="radio" name="slider" class="slide-radio<?= $key+1?>" id="slider_<?= $key+1?>">
                <?php }
        }?>
        <?php
        foreach ($actors as $key => $a) { ?>
            <div class="listActors_slider_items slider slide<?= $key+1?>">
                <div class="actors">
                    <div class="actors_name">
                        <h2><?= $a->generalInfo() ?></h2>
                    </div>
                    <div class="actors_films">
                        <p>Liste des films :</p>
                        <ul>
                            <?php foreach ($moviesActors as $ma) {
                                if($ma->actors_id == $a->getId()){
                                    foreach ($movies as $m) {
                                        if($ma->movies_id == $m->getId()){
                                            ?>
                                            <li><p><?= $m->getTitle() ?></p></li>
                                        <?php }}}} ?>
                        </ul>
                    </div>
                    <?php if($_SESSION) {
                        echo '<a class="btn" href="/acteurs/edit/' . $a->getId() . '">Edit actor</a>';
                        echo '<a class="btn" href="/acteurs/remove/' . $a->getId() . '">Remove actor</a>';
                    } ?>
                </div>
            </div>
        <?php } ?>
        <div class="next control">
            <?php
            foreach ($actors as $key => $a) { ?>
                <label for="slider_<?= $key+1 ?>" class="numb<?= $key+1 ?>"><img src="/public/img/picto/arrowSlider.svg" alt=""></label>
            <?php } ?>
        </div>
        <div class="previous control">
            <?php
            foreach ($actors as $key => $a) { ?>
                <label for="slider_<?= $key+1 ?>" class="numb<?= $key+1 ?>"><img src="/public/img/picto/arrowSlider.svg" alt=""></label>
            <?php } ?>
        </div>
    </div>
</div>
