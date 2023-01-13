<?php
namespace controllers;

use controllers\base\WebController;
use models\ActorsModele;
use utils\Template;

class ActorController extends WebController
{
    function __construct()
    {
        $this->actorModele = new ActorsModele();
    }

    function liste($page = 0): string
    {
        $actors = $this->actorModele->liste(10, $page);
        // if($_SESSION) {
            return Template::render(
                "views/liste_actors/liste_actors.php",
                array("page" => $page, "actors" => $actors)
            );
        // } else {
        //     header('location: /');
        // }
    }

    function ajouter($page = 0): string
    {
        return Template::render(
            "views/liste_actors/ajouter_actors.php"
        );
    }
}