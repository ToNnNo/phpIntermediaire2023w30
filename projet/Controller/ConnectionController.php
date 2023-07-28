<?php

namespace Controller;

use Model\User;
use PDO;
use Service\Authenticator;
use Service\Redirect;

class ConnectionController {

    private PDO $pdo;
    private Authenticator $authenticator;
    private Redirect $redirectResponse;

    public function __construct()
    {
        $host = "localhost:8889"; // localhost:3306
        $dbname = "POEPHP2023W30";

        $dsn = sprintf("mysql:host=%s;dbname=%s;charset=utf8", 
            $host, $dbname);
        $username = "root";
        $password = "root";
        $this->pdo = new PDO($dsn, $username, $password, [ 
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ]);

        $this->authenticator = new Authenticator();
        $this->redirectResponse = new Redirect();
    }

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
                $sql = "SELECT id, `password`, `name` FROM user WHERE username = :username";
                $stmt = $this->pdo->prepare($sql);
                $stmt->execute(['username' => $username]);
                $user = $stmt->fetchObject(User::class);
                
                if($user instanceof User) {
                    // 2 - comparer le mot de passe (check_password())
                    if( password_verify($password, $user->getPassword()) ) {
                        // 3 - sauvegarde l'utilisateur dans la session
                        $this->authenticator->saveUser($user);

                        // 3bis - rediriger l'utilisateur (index.php)
                        $this->redirectResponse->redirect("./");
                    }
                }

                $form_errors['authenticate'][] = "Erreur d'identification";
            }
        }

        return [
            'form_errors' => $form_errors,
            'username' => $username ?? null
        ];
    }
}