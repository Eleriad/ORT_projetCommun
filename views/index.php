<?php
// Lancement de la session
session_start();

// Encodage de la page
header("Content-Type: text/html; charset=utf-8");

// Conf générale
require_once("../conf/generalConf.php");

// autoLoader global
require_once(PATH_MACHINE . "autoLoader/AutoLoad.php");

// Pour afficher les erreurs PHP :
if (MODE_TEST == 1) {
    echo "Test activé <br>";
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
}

// Sécurisation des variables reçues
$arrayVar = Controllers::secureArray($_REQUEST);
// var_dump($arrayVar);

// Test de l'api
// Ne pas oublier le "?" pour indiquer qu'il s'agit d'un paramètre.
$param = "?ctrl=getUsers";
$resultGetCurl = Controllers::getCurlRest($param);
// var_dump($resultGetCurl);


// Appel header Général
require_once("langue/fra/header.php");

// Appel body Général
require_once("langue/fra/main.php");

// Appel footer Général
require_once("langue/fra/footer.php");
