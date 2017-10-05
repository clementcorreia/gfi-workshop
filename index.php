<?php
/**
 * Index | index.php
 */

$DS = DIRECTORY_SEPARATOR;
require_once "lib".$DS."File.php";

require_once File::build_path(array('controller','Controller.php'));
require_once File::build_path(array('controller','ControllerBesoin.php'));
require_once File::build_path(array('model','Model.php'));
require_once File::build_path(array('model','ModelCommercial.php'));
require_once File::build_path(array('model','ModelBesoin.php'));
require_once File::build_path(array('asset','php','suppr_besoin.php'));

session_start();

// On regarde si la dernière activité était il y a plus de 10 minutes
if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > (100*60))) {
    // la dernière requête était il y a plus de 10 minutes
    session_unset();     // détruire la variable $_SESSION pour la durée d'exécution 
    session_destroy();   // détruire les données de session stockées
}
$_SESSION['LAST_ACTIVITY'] = time();

require_once File::build_path(array('controller','routeur.php'));

?>
