<?php

require_once "./Model/Building.php";
require_once "./Model/Apartment.php";

// Immeuble --- est composé ----> [1, n] Appartement
// Immeuble [1, 1] <--- appartient à ---- Appartement

echo "Début du script<br />";

$building = new Building();

/*$apart1 = new Apartment(1);
$apart2 = new Apartment(2);

$building
    ->add($apart1)
    ->add($apart2);*/

$building
    ->add(new Apartment(1))
    ->add(new Apartment(2));

echo "<pre>";
var_dump($building->getApartments());
echo "</pre>";
echo "<br />";

// comment détruire un objet ?

unset($building);
// $building = null;

echo "----> Fin du script<br />";