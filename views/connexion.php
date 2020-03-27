<?php
// Lancement de la session
session_start();
// Conf générale
require_once("../conf/generalConf.php");
// Autoloader global
require_once(PATH_MACHINE . "autoLoader/AutoLoad.php");
$arrayVar = Controllers::secureArray($_REQUEST);
if (
    isset($arrayVar['email']) && !empty($arrayVar['email'])
    && isset($arrayVar['mdp']) && !empty($arrayVar['mdp'])
) {
    // On met les valeurs en valeur de session le temps des tests et on renvoie sur index.php
    $_SESSION['email'] = $arrayVar['email'];
    $_SESSION['mdp'] = $arrayVar['mdp'];
}
header('Location: /index.php');
exit();
