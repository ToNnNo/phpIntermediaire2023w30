<?php 
use Classes\Vehicule\Ambulance;
use Classes\Vehicule\Voiture;

require_once "../autoload.php";

$voiture = new Voiture("Citroen", "DS3");

echo "<h2>Voiture</h2>";
printf("<p>%s</p>", $voiture->demarrer());
printf("<p>%s</p>", $voiture->avancer());
printf("<p>%s</p>", $voiture->arreter());

echo "<h2>Ambulance</h2>";

$ambulance = new Ambulance("Renault", "Trafic");

$ambulance->changeSireneState();

printf(
    "<p>Ambulance[Marque: %s, Modèle: %s, État de la sirène: %s]</p>", 
    $ambulance->getMarque(),
    $ambulance->getModele(),
    $ambulance->getSireneState() ? "Allumée" : "Éteinte"
);