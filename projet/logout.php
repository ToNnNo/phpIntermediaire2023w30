<?php
require_once "../autoload.php";

$authenticator = new Service\Authenticator();
$redirectResponse = new Service\Redirect();

$authenticator->logout();
$redirectResponse->redirect('./connection.php');