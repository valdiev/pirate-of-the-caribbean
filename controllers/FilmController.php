<?php
namespace controllers;

use controllers\base\WebController;
use models\FilmsModele;
use utils\Template;

class FilmController extends WebController
{
    function __construct()
    {
        $this->filmModele = new FilmsModele();
    }

    function film($id) {
        $filmModele = new FilmsModele();
        try{
            $leFilm = $filmModele->getByFilmId($id);
        }
        catch (\Throwable $e){
            var_dump($e);
            exit;
        }
        return Template::render(
            "views/single_film/single_film.php",
            array("leFilm" => $leFilm)
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
            return header('location: /');
        }
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

    function removeFilm($id) : string
    {
        return $this->filmModele->removeFilm($id);
    }
}