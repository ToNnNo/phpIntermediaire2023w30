<?php
use Classes\Animal\Dragon;
use Classes\Animal\Licorne;

require_once "../autoload.php";

echo "<h2>Dragon</h2>";

$dragon = new Dragon("Smaug");

printf("<p>%s</p>", $dragon->manger());
printf("<p>%s</p>", $dragon->boire());
printf("<p>%s</p>", $dragon->crier());
printf("<p>%s</p>", $dragon->cracherDuFeu());

echo "<h2>Licorne</h2>";

$licorne = new Licorne("Étoile d'émeraude");

printf("<p>%s</p>", $licorne->manger());
printf("<p>%s</p>", $licorne->boire());
printf("<p>%s</p>", $licorne->crier());
printf("<p>%s</p>", $licorne->scintiller());