<?php
/**
 * Class Controller | controller/Controller.php
 */

/**
 * Contrôleur par défaut
 */
class Controller {
	
    /**
     * Si un utilisiteur est connecté, la page des écritures est affichée, sinon on affiche la page de connexion
     * @return  void
     */
    public static function readAll() {
        if(isset($_SESSION['user'])) {
            ControllerBesoin::readAll();
        }
        else {
            $pagetitle = "Identification"; // pagetitle est le titre affiché dans l'onglet
            $title = "$pagetitle";   // title est le titre affiché sur la page
            $view = "login";      // view est le nom du fichier à appeler pour afficher la page  
        }
        require File::build_path(array('view','view.php'));  // affiche la vue
    }

    public static function identification() {
        if (isset($_POST['mail']) && !empty($_POST['mail'])) {
            $mail = htmlspecialchars($_POST['mail']);
            $retour = ModelCommercial::identification($mail);
            if($retour) {
                $_SESSION['user'] = $retour;
                ControllerBesoin::readAll();
            }
            else {
                Controller::readAll();
            }
        }
    }

    /**
     * Affiche une page d'erreur lorsqu'une erreur a lieu lors d'une redirection
     * @return  void    
     */
    public static function error() {
        $pagetitle = "Erreur"; // pagetitle est le titre affiché dans l'onglet
        $title = "Erreur 404";   // title est le titre affiché sur la page
        $view = "erreur";      // view est le nom du fichier à appeler pour afficher la page
        require File::build_path(array('view','view.php'));  // affiche la vue
    }

}

?>
