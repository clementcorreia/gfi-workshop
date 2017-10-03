<?php
/**
 * Class ControllerBesoin | controller/ControllerBesoin.php
 */

/**
 * Contrôleur des actions pour les besoins
 *
 * @package controller
 */
class ControllerBesoin {
	
    /**
     * Affiche la liste des besoins
     * @return  void
     */
    public static function readAll() {
        $pagetitle = "Liste des besoins";
        $title = "$pagetitle";
        $view = "list";
        require File::build_path(array('view','view.php'));  // affiche la vue
    }

    public static function add() {
        $pagetitle = "Nouveau besoin";
        $title = "$pagetitle";
        $view = "edit";
        require File::build_path(array('view','view.php'));  // affiche la vue
    }

}

?>
