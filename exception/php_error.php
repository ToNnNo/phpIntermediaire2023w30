<?php

error_reporting(E_ALL & ~E_NOTICE);
// ini_set('error_reporting', E_ALL & ~E_NOTICE);

ini_set('display_errors', true);

// phpinfo();

// Notice
$person = ['name' => "Souhail"];
echo $person['age'];

// Warning
echo $_GET['page'];
echo $name;

// Parse -> erreur au moment de la compilation, donc avant l'affichage
// echo "Hello"

// Fatal error
echo 1/0;
echo str_to_lower("MAJUSCULE");