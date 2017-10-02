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
        $pagetitle = "";
        $title = "";
        $view = "list";
        require File::build_path(array('view','view.php'));  // affiche la vue
    }

}

?>
