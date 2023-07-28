<?php

namespace Controller;

use Service\Authenticator;
use Service\Redirect;

class IndexController {

    private Authenticator $authenticator;
    private Redirect $redirectResponse;

    public function __construct()
    {
        $this->authenticator = new Authenticator();
        $this->redirectResponse = new Redirect();
    }

    public function index(): array
    {
        // vérifier si un utilisateur est connecté ?
        if(!$this->authenticator->hasUserAuthenticate()) {
            $this->redirectResponse->redirect("connection.php");
        }

        return [];
    }

}