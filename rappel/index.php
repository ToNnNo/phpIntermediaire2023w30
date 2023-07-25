<?php

/**
 * type:
 *  Primitif: détient la valeur que l'on utilise
 *      - string
 *      - int
 *      - float
 *      - boolean
 *  Référence: crée des valeurs, les mets en mémoire, et va les rechercher quand il en a besoin, mais ne les 
 * détient pas 
 *      - array
 *      - Object
 */

$email = "smenut@dawan.fr";
$int = 1;
$float = 5.6;
$boolean = true; // false

echo "Hello World";

$contact = sprintf("Si vous souhaitez me contacter, envoyez moi un mail à cette adresse : %s", $email);

// le . permet de faire la concaténation de chaine de caractère 
// concaténation = addition de chaine de caractère
echo "<p>" . $contact . "</p>";

// array
// animaux et crie

/**
 * Tableau
 *  Indexé: dont la valeur est associé à une clé numérique
 *      ex : [0 => 'ma valeur 1', 1 => 'ma valeur 2']
 *  Associatif: dont la valeur est associé à une clé non numérique (en majorité des cas on utilise une string)
 *      ex : ['nom' => "Doe", 'prenom' => "John", 'age' => 35]
 */
$animals = [
    'chien' => "aboie",
    'chat' => "miaule",
    'vache' => "beugle",
    'renard' => "jappe"
];

// accéder à une valeur du tableau
echo $animals['chien'];

/**
 * for( value of array )
 */

// structure itérative => itérer => parcourir
// foreach( $array as $key => $value )
foreach( $animals as $animal => $cri ) {
    printf("<p>Un(e) <b>%s</b> <i>%s</i></p>", $animal, $cri);
}

// équivalence de type
var_dump( 0 == false ); // compare uniquement les valeurs
var_dump( 0 === false ); // compare les valeurs et le types


// savoir si le chien (clé) est présent dans le tableau animals ?
$key = array_search('chien', array_keys($animals));
if( $key !== false ) {
    echo "<p>La clé chien se trouve bien dans le tableau</p>";
}

if( array_key_exists('chien', $animals) ) {
    echo "<p>La clé chien se trouve bien dans le tableau</p>";
}

// fonctions
// convention de nommage: camelCase / kebab-case / snake_case

// $name est un paramètre d'entrée de la fonction sayHello et est null par défaut
// sayHello est une procédure (elle ne retourne pas de résultat)
// alors qu'une fonction retourne une valeur à l'aide de l'instruction "return"
function sayHello($name = null) {
    $message = "Hello ";

    // si le nom n'éxiste pas
    if( $name == null ) {
        $message .= "World"; // $message = $message . "World";
    } else {
        $message .= $name;
    }

    echo "<p>" . $message . "</p>";
}

sayHello(); // appel à la fonction sayHello()
sayHello("Luis");
sayHello("Arnaud");
sayHello("Léa");