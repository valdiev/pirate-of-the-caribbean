<div class="progress"></div>
<section class="listFilm">
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
    //        if ($_SESSION) {
    //            echo '<a href="films/ajouter">Ajouter un film</a>';
    //        }
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
                        <p class="small"><?= $f->descriptionInfo() ?></p>

                        <a href="/films/<?= $f->getId() ?>">En savoir plus</a>
                    </div>
                </article>
            <?php } ?>
        </div>
    </div>
</section>
