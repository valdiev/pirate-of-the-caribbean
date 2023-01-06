<?php
namespace controllers;

use controllers\base\WebController;
use models\FilmsModele;
use utils\Template;

class Film extends WebController
{
    function __construct()
    {
        $this->filmModele = new FilmsModele();
    }

    function film($id) {
        $filmModele = new FilmsModele();

        $leFilm = $filmModele->getByFilmId($id);

        return Template::render(
            "views/single_films/single_film.php",
            array("filmInfos" => $leFilm)
        );
    }

    function liste($page = 0): string
    {
        $films = $this->filmModele->liste(10, $page);
        if($_SESSION) {
            return Template::render(
                "views/liste_films/liste_films.php",
                array("page" => $page, "films" => $films)
            );
        } else {
            header('location: /');
        }
    }
}