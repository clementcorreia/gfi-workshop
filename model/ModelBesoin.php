<?php
/**
 * Class ModelBesoin | model/ModelBesoin.php
 */

/**
 * Gestion des besoins
 */
class ModelBesoin extends Model {

	private $id_besoin;
	private $id_commercial;
	private $date_creation;
	private $rs_client;
	private $contact_client;
	private $titre;
	private $description;
	private $s_factor1;
	private $s_factor2;
	private $s_factor3;
	private $date_debut;
	private $duree;
	private $frequence;
	private $lieu;
	private $prix;
	private $fichiers_description;
	private $noms_cons;
	private $statut;

	public function getId() {
		return $this->id_besoin;
	}

	public function getIdCommercial() {
		return $this->id_commercial;
	}

	public function getClient() {
		return $this->rs_client;
	}

	public function getTitre() {
		return $this->titre;
	}

	public function getDescription() {
		return $this->description;
	}

	public function getStatut() {
		return $this->statut;
	}

	public static function selectAll($tri="", $order="") {
		if (isset($_SESSION['user'])) {
			$user = unserialize($_SESSION['user']);
			$id_commercial = $user->getId();
			$tab_besoins = array();
			if($tri!="" && $order!="") {
				$req_prep = Model::$bdd->prepare("SELECT * FROM fiches_besoin WHERE id_commercial = :idc ORDER BY $tri $order;");
			}
			else {
				$req_prep = Model::$bdd->prepare("SELECT * FROM fiches_besoin WHERE id_commercial = :idc;");
			}
			$req_prep->execute(array('idc'=>$id_commercial));
			if($req_prep) {
				while($data = $req_prep->fetchObject("ModelBesoin")) {
					$tab_besoins[] = $data;
				}
				return $tab_besoins;
			}
		}
		return false;
	}

	public static function selectRsClient() {
		if (isset($_SESSION['user'])) {
			$user = unserialize($_SESSION['user']);
			$id_commercial = $user->getId();
			$tab_rs_client = array();
			$req_prep = Model::$bdd->prepare("SELECT DISTINCT rs_client client FROM fiches_besoin WHERE id_commercial = :idc;");
			$req_prep->execute(array('idc'=>$id_commercial));
			if($req_prep) {
				while($data = $req_prep->fetch()) {
					$tab_rs_client[] = $data['client'];
				}
				return $tab_rs_client;
			}
		}
		return false;
	}

	public static function save($data) {

		$params = "(";
		$keys = "(";
		
		foreach ($data as $key => $value) {
			if($key!='rowid') {
				$params.='\''.utf8_decode(addslashes($value)).'\', ';
				$keys.=$key.", ";
			}
		}

		$params = rtrim($params);
		$params = rtrim($params,',');
		$params .= ")";
		$keys = rtrim($keys);
		$keys = rtrim($keys,',');
		$keys .= ")";

		$sql = "INSERT INTO fiches_besoin $keys VALUES $params;";

		$req_prep = Model::$bdd->query($sql);

		return $req_prep;

	}

}

?>