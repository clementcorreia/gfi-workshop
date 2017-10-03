<?php
/**
 * Class ModelCommercial | model/ModelCommercial.php
 */

/**
 * Gestion des commerciaux
 */
class ModelCommercial extends Model {

	private $id_commercial;
	private $nom;
	private $mail;

	public function getId() {
		return $this->id_commercial;
	}

	public function getNom() {
		return $this->nom;
	}

	public function getMail() {
		return $this->mail;
	}

	public function __construct() {

	}

	public static function identification($mail) {
		$req_prep = Model::$bdd->prepare("SELECT * FROM utilisateur WHERE mail = :m");
        $values = array(
            'm' => $mail
        );
        $res = $req_prep->execute($values);
        if($res && $req_prep->rowCount()>0) {
        	return serialize($req_prep->fetchObject("ModelCommercial"));
        }
        else {
        	return false;
        }
	} 

}

?>