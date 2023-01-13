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
        $actors = $this->actorModele->liste(100, $page);
        // if($_SESSION) {
            return Template::render(
                "views/liste_actors/liste_actors.php",
                array("page" => $page, "actors" => $actors)
            );
        // } else {
        //     header('location: /');
        // }
    }

    function ajouterActeur(): string
    {
        return Template::render(
            "views/liste_actors/ajouter_actors.php"
        );
    }

    function runAjouterActeur() : string
    {
        return $this->actorModele->creerActeur();
    }

    function removeActeur($id) : string
    {
        return $this->actorModele->removeActor($id);
    }
}