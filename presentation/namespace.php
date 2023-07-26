<?php

require_once '../autoload.php';

// le mot clé "as" permet de créer des alias
// permet d'éviter les conflits pour des classes qui portent
// le même nom
use Model\Example\Test as ClassTest;

// sans alias sur le namespace
// $test = new Test();

// avec un alias sur le namespace
$test = new ClassTest();

printf("<p>%s</p>", $test);

printf("<p>Namespace: %s</p>", ClassTest::class);

/*echo __DIR__;

echo "<pre>";
var_dump($_SERVER);*/