<?php
use Classes\Animal\Dragon;
use Classes\Personnage\Personnage;

require_once '../autoload.php';

$personnage = new Personnage("Sacha");
$dragon = new Dragon("Dracaufeu");


printf("<p>%s rencontre %s</p>", 
    $personnage->getName(), $dragon->getName());
printf("<p>%s tente de capturer %s</p>", 
    $personnage->getName(), $dragon->getName());

if( $personnage->capture($dragon) ) {
    printf("<p>%s a capturé %s</p>", 
        $personnage->getName(), $dragon->getName());
} else {
    printf("<p>%s et s'enfuit</p>", $dragon->crier());
}