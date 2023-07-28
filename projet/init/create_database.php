<?php

$host = "localhost:8889"; // localhost:3306
$dbname = "POEPHP2023W30";

$dsn = sprintf("mysql:host=%s;charset=utf8", $host);
$username = "root";
$password = "root";

try{
    printf("<p>Connexion à la base de données ... </p>");
    $pdo = new PDO($dsn, $username, $password, [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ]);

    printf("<p>Création de la base de données</p>");
    $pdo->exec(<<<SQL
        CREATE DATABASE IF NOT EXISTS $dbname;
        USE $dbname;
    SQL);

    printf("<p>Création de la table utilisateur</p>");
    $pdo->exec(<<<SQL
        CREATE TABLE IF NOT EXISTS user (
            id int PRIMARY KEY AUTO_INCREMENT,
            username varchar(50) NOT NULL,
            `password` varchar(150) NOT NULL,
            `name` varchar(50) NOT NULL
        ) ENGINE=InnoDB
    SQL);

    $password = password_hash("admin", PASSWORD_BCRYPT);

    printf("<p>Insertion de l'utilisateur principal</p>");
    $pdo->exec(<<<SQL
        INSERT INTO user (`username`, `password`, `name`) VALUE ("admin", "$password", "Stéphane")
    SQL);

} catch (PDOException $e) {
    echo $e;
}