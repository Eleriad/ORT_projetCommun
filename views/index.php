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

// Test de vérification de connexion
// $_SESSION['idUser'] = "Invité";

// Définition d'une variable correspondant à l'appel du controller
$connected = Controllers::verifConnexionUser();

// Test de l'api
$param = "?ctrl=getUsers";
$resultGetCurl = Controllers::getCurlRest($param);
$resultGetCurl = json_decode($resultGetCurl); // avec json_decode, on transforme le résultat en objet et on peut l'analyser par la suite
if ($resultGetCurl->status == "failed") {
    die("Une erreur est survenue, veuillez contacter le support technique!");
} elseif ($resultGetCurl->status == "success") {
    // echo "<pre>";
    // var_dump($resultGetCurl->result);
    // echo "</pre>";
    // echo $resultGetCurl->result->email;
} else {
    die("Erreur critique");
}

// Appel header Général
require_once("langue/fra/header.php");

// Appel body Général
require_once("langue/fra/main.php");

// Appel footer Général
require_once("langue/fra/footer.php");
