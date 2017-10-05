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
        $tab_besoins = ModelBesoin::selectAll();
        require File::build_path(array('view','view.php'));  // affiche la vue
    }

    public static function add() {
        $pagetitle = "Nouveau besoin";
        $title = "$pagetitle";
        $view = "edit";
        require File::build_path(array('view','view.php'));  // affiche la vue
    }

    public static function added() {
        if(isset($_POST)) {
            $rs_client = addslashes(ucfirst(htmlspecialchars($_POST["rs_client"])));
            $contact = addslashes(ucfirst(htmlspecialchars($_POST['contact'])));
            $titre = addslashes(ucfirst(htmlspecialchars($_POST['titre'])));
            $description = addslashes(htmlspecialchars($_POST['description']));
            $s_factor1 = addslashes(htmlspecialchars($_POST['s_factor1']));
            $s_factor2 = addslashes(htmlspecialchars($_POST['s_factor2']));
            $s_factor3 = addslashes(htmlspecialchars($_POST['s_factor3']));
            $duree = htmlspecialchars($_POST['duree']);
            $frequence = htmlspecialchars($_POST['frequence']);
            $date_debut = htmlspecialchars($_POST['date_debut']);
            $lieu = addslashes(ucfirst(htmlspecialchars($_POST['lieu'])));
            $prix = htmlspecialchars($_POST['prix']);
            $consultant1 = addslashes(ucfirst(htmlspecialchars($_POST['consultant1'])));
            $consultant2 = addslashes(ucfirst(htmlspecialchars($_POST['consultant2'])));
            $consultant3 = addslashes(ucfirst(htmlspecialchars($_POST['consultant3'])));
            $consultant4 = addslashes(ucfirst(htmlspecialchars($_POST['consultant4'])));
            $consultant5 = addslashes(ucfirst(htmlspecialchars($_POST['consultant5'])));
            $consultant = $consultant1.';'.$consultant2.';'.$consultant3.';'.$consultant4.';'.$consultant5;
            $statut = addslashes(htmlspecialchars($_POST['statut']));
            $user = unserialize($_SESSION['user']);
            $data = array(
                'id_commercial' => $user->getId(),
                'date_creation' => date('Y-m-d'),
                'rs_client' => $rs_client,
                'contact_client'=> $contact,
                'titre' => $titre,
                'description'=> $description,
                's_factor1' => $s_factor1,
                's_factor2' => $s_factor2,
                's_factor3' => $s_factor3,
                'duree' => $duree,
                'frequence' => $frequence,
                'date_debut' => $date_debut,
                'lieu' => $lieu,
                'prix' => $prix,
                'noms_cons' => $consultant,
                'statut' => $statut
            );
            if(ModelBesoin::save($data)) {
                ControllerBesoin::readAll();
                exit();
            }
        }
    }

}

?>
