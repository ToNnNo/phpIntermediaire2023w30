<?php

namespace Controller;

class ConnectionController {

    public function login(): array
    {
        $form_errors = [];
        
        // form isSubmitted
        if('POST' == $_SERVER['REQUEST_METHOD']) {

            $username = $_POST['_username'] ? trim($_POST['_username']) : null;
            $password = $_POST['_password'] ? trim($_POST['_password']) : null;
            
            // tester les contraintes 
            if( $username == null ) {
                $form_errors['_username'][] = "L'identifiant est obligatoire"; 
            }

            if( $password == null ) {
                $form_errors['_password'][] = "Le mot de passe est obligatoire"; 
            }

            // s'il n'y a pas d'erreur
            if( empty($form_errors) ) { // on peut aussi compter le nombre d'erreur
                // réaliser l'authentification

                // 1 - aller rechercher les données d'un utilisateur (id, password, name)

                // 2 - comparer le mot de passe (check_password())

                // 3 - sauvegarde l'utilisateur dans la session

                // 3bis - rediriger l'utilisateur (index.php)
            }
        }

        return [
            'form_errors' => $form_errors,
            'username' => $username ?? null
        ];
    }
}