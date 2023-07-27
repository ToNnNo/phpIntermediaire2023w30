<?php

// E_USER_NOTICE | E_USER_WARNING | E_USER_ERROR | E_USER_DEPRECATED

// version 1.0
function createFullname(array $person): string {
    trigger_error("La fonction createFullname() n'est plus supporté, utilisez à la place la fonction fullname()", E_USER_DEPRECATED);

    return fullname($person);
}

// version 1.1
function fullname(array $person, int $a = 1): string {

    if( !array_key_exists('firstname', $person) ) {
        trigger_error("La clé 'firstname' n'a pas été trouvé dans le tableau", E_USER_WARNING);
    }

    if( !array_key_exists('lastname', $person) ) {
        trigger_error("La clé 'lastname' n'a pas été trouvé dans le tableau", E_USER_WARNING);
    }

    return $person['firstname'] . " " . $person['lastname'];
}

$person = ['firstname' => "John", 'lastname' => "Doe"];

printf('<p>Bonjour %s</p>', createFullname($person));