<?php
/**
 * Class Model | model/Model.php
 */

/**
 * Effectue la connexion à la base de données et contient quelques fonctions utiles
 */
class Model {
	
	/**
	 * Connexion entre PHP et une base de données MySQL
	 * @var Object
	 */
	public static $bdd;

	/**
	 * Initialise la connexion à la base de données
	 * @return 	void
	 */
	public static function Init() {
		$login = "workshop";
		$host = "localhost";
		$dbname = "workshop";
		$pass = "workshop";
		$dsn = "mariadb:dbname=$dbname;host=$host";
		// Connexion à la base de données    

		try {
			$bdd = new PDO($dsn, $login, $pass);
		} catch (PDOException $e) {
			echo 'Connexion échouée : ' . $e->getMessage();
		}
	}

}

Model::Init();

?>