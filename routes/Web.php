<?php

namespace routes;

use controllers\ActorController;
use controllers\LoginController;
use controllers\SampleWebController;
use controllers\FilmController;
use routes\base\Route;
use utils\Template;

class Web
{
    function __construct()
    {
        $main = new SampleWebController();

        // Appel la méthode « home » dans le contrôleur $main.
        Route::Add('/', [$main, 'home']);
        Route::Add('/exemple', [$main, 'exemple']);

        // Appel la fonction inline dans le routeur.
        // Utile pour du code très simple, où un tes, l'utilisation d'un contrôleur est préférable.
        Route::Add('/about', function () {
            return Template::render('views/global/about.php');
        });


        $film = new FilmController();

        Route::Add('/films', [$film, 'liste']);
        Route::Add('/films/ajouter', [$film, 'ajouterFilm']);
        Route::Add('/films/runAjouterFilm', [$film, 'runAjouterFilm']);
        Route::Add('/films/remove/{id}', [$film, 'removeFilm']);
        Route::Add('/films/edit/{id}/runEditFilm', [$film, 'runEditFilm']);
        Route::Add('/films/edit/{id}', [$film, 'editFilm']);
        Route::Add('/films/{id}', [$film, 'film']);

        $actor = new ActorController();
        Route::Add('/acteurs', [$actor, 'liste']);
        Route::Add('/acteurs/ajouter', [$actor, 'ajouter']);

        //        Exemple de limitation d'accès à une page en fonction de la SESSION.
        //        if (SessionHelpers::isLogin()) {
        //            Route::Add('/logout', [$main, 'home']);
        //        }
        $login = new LoginController();
        Route::Add('/login', [$login, 'index']);
        Route::Add('/login/run', [$login, 'run']);
        Route::Add('/logout', [$login, 'logout']);
    }
}

