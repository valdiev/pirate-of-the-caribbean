<?php
namespace controllers;

use controllers\base\WebController;
use models\FilmsModele;
use models\GalerieModel;
use models\MovieImageModele;
use utils\Template;

class GalerieController extends WebController
{
    function __construct()
    {
        $this->galerieModel = new GalerieModel();
    }
    function index()
    {
        $imageMovies = $this->galerieModel->liste();
        $listFilms = $this->galerieModel->listeFilms();
        return Template::render(
            "views/galerie/galerie.php",
            array("imageMovies" => $imageMovies, "listFilms" => $listFilms)
        );
    }
}