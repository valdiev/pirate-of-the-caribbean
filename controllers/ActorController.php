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

    function actor($id) {
        $actorModele = new ActorsModele();
        try{
            $Actor = $actorModele->getByActorId($id);
        }
        catch (\Throwable $e){
            var_dump($e);
            exit;
        }
        return Template::render(
            "views/liste_actors/liste_actors.php",
            array("Actor" => $Actor)
        );
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

    function runAddActeur() : string
    {
        return $this->actorModele->creerActeur();
    }

    function removeActor($id) : string
    {
        return $this->actorModele->removeActor($id);
    }

    function editActor($id) : string
    {
        $Actor = $this->actorModele->getByActorId($id);
        return Template::render(
            "views/liste_actors/edit_actors.php",
            array("Actor" => $Actor)
        );
    }

    function runEditActor($id) : string
    {
        return $this->actorModele->runEditActor($id);
    }
}