<?php
namespace controllers;

use controllers\base\WebController;
use models\LoginModel;
use utils\Template;

class LoginController extends WebController
{

    function __construct()
    {
        $this->loginModel = new LoginModel();
    }

    function index()
    {
        return Template::render(
            "views/login.php",
        );
    }

    function run()
    {
        $this->loginModel->run();

    }

    function logout()
    {
        session_destroy ();
        header('location: ../');
        exit;
    }
}