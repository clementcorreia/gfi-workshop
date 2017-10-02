<?php
/**
 * Class File | lib/File.php
 *
 * @author Clément Correia <clement.correia34@gmail.com>
 */

/**
 * Permet de générer des liens vers des ressources à partir de n'importe quel dossier
 *
 * Cela permet d'éviter les erreurs et de simplifier le lien puisqu'on n'a pas à remonter dans les répertoires supérieurs, la classe s'en charge toute seule.
 */
class File {

	/**
	 * Récupère l'adresse relative au serveur du fichier
	 * @param array $path_array 	Tableau composé des noms de dossiers puis du fichier ou de la ressource avec son extension
	 * @return string 				Lien généré
	 */		
	public static function build_path($path_array) {
	    $DS = DIRECTORY_SEPARATOR; 
	    $ROOT_FOLDER = __DIR__ . "$DS..";
	    return $ROOT_FOLDER. "$DS" . join("$DS", $path_array);
	}

	/**
	 * Récupère l'adresse relative au site du fichier (utile pour les css et les js)
	 * @param array $path_array 	Tableau composé des noms de dossiers puis du fichier ou de la ressource avec son extension
	 * @return string 				Lien généré
	 */	
	public static function build_path_html($path_array) {
	    $DS = DIRECTORY_SEPARATOR;
	    $ROOT_FOLDER = "lib$DS..";
	    return $ROOT_FOLDER. "$DS" . join("$DS", $path_array);
	}
	
}

?>