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

// Appel header Général
// require_once("header.php");

// Appel body Général
// require_once("body.php");

// Appel footer Général
// require_once("footer.php");
