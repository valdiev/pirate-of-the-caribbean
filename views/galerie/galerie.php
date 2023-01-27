<section class="galerie">
    <div class="galerie_image">
        <img src="/public/img/pirate-bg9.jpg" alt="">
    </div>
    <div class="galerie_title">
        <h1>Galerie</h1>
    </div>
    <div class="galerie_list">
        <?php
        foreach ($listFilms as $film) { ?>
            <div class="galerie_list_container">
            <h2>Image du film : <?= $film->getTitle() ?> </h2>
            <div class="galerie_list_container_item">
         <?php
            foreach ($imageMovies as $im){
                if(intval($film->getId()) === intval($im["movie_id"])){
                    ?>
                    <div class="galerie_list_container_item_indiv">
                        <img src="<?= $im["url"] ?>" alt="">
                    </div>
                <?php }
            }?></div></div>
        <?php } ?>
    </div>
</section>