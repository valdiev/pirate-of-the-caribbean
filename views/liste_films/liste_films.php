<section class="listFilm">
    <div class="listFilm_addFilm">
        <?php if($_SESSION) { ?>
            <a href="films/ajouter">Ajouter un film</a>
        <?php } ?>
    </div>
    <div class="background"></div>
    <div class="progress"></div>
    <div class="listFilm_header">
        <div class="listFilm_header_image">
            <img src="/public/img/pirate-bg.jpeg" alt="">
        </div>
        <div class="listFilm_header_logo">
            <h1>Pirates des Caraibes</h1>
        </div>
    </div>
    <div class="listFilm_movies">
        <h2>Films</h2>
        <div class="movies">
            <?php
            foreach ($films as $key=>$f) {?>
                <article class="movies_card">
                    <div class="movies_card_image">
                        <?php
                        if(isset($image[$key]->url)){?>
                            <img src="<?= $image[$key]->url?>" alt="">
                        <?php }
                        ?>
                    </div>
                    <div class="movies_card_info">
                        <h3><?= $f->generalInfo() ?></h3>
                        <p>Date de sortie : <?= $f->getDate() ?></p>
                        <p class="small"><?= $f->getSynopsis() ?></p>

                        <a href="/films/<?= $f->getId() ?>">En savoir plus</a>


                        <?php if($_SESSION) {
                            echo '<a class="btn" href="/films/edit/' . $f->getId() . '">Edit film</a>';
                            echo '<a class="btn" href="/films/remove/' . $f->getId() . '">Remove film</a>';
                        } ?>

                    </div>
                </article>
            <?php } ?>
        </div>
    </div>
</section>
