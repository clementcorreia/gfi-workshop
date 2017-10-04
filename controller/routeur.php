<?php
/**
 * Routeur | controller/routeur.php
 */

$controllerParDefaut = "";

if (isset($_SESSION['user']) || (isset($_GET['action']) && htmlspecialchars($_GET['action'])=="identification")) {
	if (isset($_GET['controller'])) {
		$controller = htmlspecialchars($_GET['controller']);
	}
	else {
		$controller = "$controllerParDefaut";
	}

	$controller_class = 'Controller'.ucfirst($controller);

	if (class_exists($controller_class)) {
		require_once File::build_path(array('controller', $controller_class.'.php'));
		if (isset($_GET['action'])) {
		    $action = htmlspecialchars($_GET['action']);    // On recupère l'action passée dans l'URL
		    if (in_array($action, get_class_methods($controller_class))) {
		        $controller_class::$action(); // Appel de la méthode statique $action du Controller appelé
		    }
		    else {
		        $controller_class::readAll();
		    }
		}
		else {
		    $controller_class::readAll();
		}
	}
	else {
		Controller::error();
	}
}
else {
	Controller::readAll();
}

?>