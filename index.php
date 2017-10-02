<?php
/**
 * Index | index.php
 */

$DS = DIRECTORY_SEPARATOR;
require_once "lib".$DS."File.php";

require_once File::build_path(array('controller','Controller.php'));
require_once File::build_path(array('controller','ControllerEcriture.php'));
require_once File::build_path(array('controller','ControllerHistorique.php'));
require_once File::build_path(array('controller','ControllerImport.php'));
require_once File::build_path(array('controller','ControllerParametre.php'));
require_once File::build_path(array('controller','ControllerUtilisateur.php'));
require_once File::build_path(array('config','Conf.php'));
require_once File::build_path(array('model','Model.php'));
require_once File::build_path(array('model','ModelCategorie.php'));
require_once File::build_path(array('model','ModelEcriture.php'));
require_once File::build_path(array('model','ModelFacture.php'));
require_once File::build_path(array('model','ModelImport.php'));
require_once File::build_path(array('model','ModelMotCle.php'));
require_once File::build_path(array('model','ModelUtilisateur.php'));
require_once File::build_path(array('model','ModelWarning.php'));
require_once File::build_path(array('model','ModelWarningType.php'));

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
