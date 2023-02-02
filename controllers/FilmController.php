<?php
namespace controllers;

use controllers\base\WebController;
use models\FilmsModele;
use models\MovieImageModele;
use models\RelatedFilmModele;
use utils\Template;

class FilmController extends WebController
{
    function __construct()
    {
        $this->filmModele = new FilmsModele();
        $this->MovieImageModele = new MovieImageModele();
        $this->RelatedFilmModele = new RelatedFilmModele();
    }

    function film($id) {
        try{
            $leFilm = $this->filmModele->getByFilmId($id);
            $image = $this->MovieImageModele->getByImageId($id);
            $relatedFilms = $this->RelatedFilmModele->getRealtedFilms($id);
        }
        catch (\Throwable $e){
            var_dump($e);
            exit;
        }
        return Template::render(
            "views/single_film/single_film.php",
            array("leFilm" => $leFilm[0], "comments" => $leFilm[1] , "image" => $image, "relatedFilms" => $relatedFilms[0], "relatedFilmsImage" => $relatedFilms[1])
        );
    }

    function liste($page = 0): string
    {
        $films = $this->filmModele->liste(10, $page);
        // if($_SESSION) {
            return Template::render(
                "views/liste_films/liste_films.php",
                array("page" => $page, "films" => $films[0], "image" => $films[1])
            );
        // } else {
        //     header('location: /');
        // }
    }

    function ajouterFilm(): string
    {
        return Template::render(
            "views/liste_films/ajouter_films.php"
        );
    }

    function runAjouterFilm() : string
    {
        return $this->filmModele->creerFilm();
    }

    function comments($id): string
    {
        $leFilm = $this->filmModele->getByFilmId($id);
        return Template::render(
            "views/single_film/comments.php",
            array("leFilm" => $leFilm[0][0])
        );
    }

    function runComments($id) : string
    {
        return $this->filmModele->addComments($id);
    }


    function removeFilm($id) : string
    {
        return $this->filmModele->removeFilm($id);
    }


    function editFilm($id) : string
    {
        $leFilm = $this->filmModele->getByFilmId($id);
        $image = $this->MovieImageModele->getByImageId($id);
        return Template::render(
            "views/liste_films/edit_films.php",
            array("leFilm" => $leFilm[0][0], "image" => $image)
        );
    }

    function runEditFilm($id) : string
    {
        return $this->filmModele->runEditFilm($id);
    }
}