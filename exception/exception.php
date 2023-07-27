<?php

use Classe\Math;

require_once "../autoload.php";

// _ENV est une superglobale
$_ENV['environment'] = 'dev';

$math = new Math();

try {
    echo $math->division(1, 0);
} catch (Exception|ArithmeticError $e) {
    $date = new DateTime();
    $message = sprintf("[%s] %s: %s \r\n", 
        $date->format("d-m-Y \à H:i:s"),
        get_class($e),
        $e->getMessage()
    );

    $log_directory = '../var/log';
    if(!file_exists($log_directory)) {
        mkdir($log_directory, 0777, true);
    }
    file_put_contents($log_directory."/log.txt", $message, FILE_APPEND);
    
    if ($_ENV['environment'] == 'dev') {
        echo $e;
    }
}

echo "<p>Fin du script</p>";