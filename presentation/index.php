<?php
function displayAddress($client) {
    $address = sprintf("%s %s<br />", $client['firstname'], $client['lastname']);
    $address .= sprintf("%s %s<br />", $client['address']['zipcode'], $client['address']['city']);
    $address .= $client['address']['country'];

    return $address;
}

// la représentation de ce client (code) est la même que celle de la table "client"
$client = [
    'lastname' => "Doe",
    'firstname' => "John",
    'email' => "john.doe@gmail.com",
    'birthday' => "1980-07-14",
    'address' => [
        'zipcode' => "59000",
        'city' => "Lille",
        'country' => "France"
    ]
];

// afficher l'adresse complète d'un client avec nom prenom + adresse ...
?>

<address>
<?php echo displayAddress($client); ?>
</address>