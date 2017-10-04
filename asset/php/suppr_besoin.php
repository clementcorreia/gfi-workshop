<?php

    // Récupération du paramètre NomEleve passé dans la requête ajax dans mon fichier.js
    $id=$_GET['id_besoin'];
    $retour = true;

    //$bdd = Model::$bdd;
    $login = "root";
    $host = "localhost";
    $dbname = "workshop";
    $pass = "root";
    $dsn = "mysql:dbname=$dbname;host=$host";
    // Connexion à la base de données    
    try {
        $bdd = new PDO($dsn, $login, $pass);
    } catch (PDOException $e) {
        echo 'Connexion échouée : ' . $e->getMessage();
    }

    $req_prep = $bdd->prepare("DELETE FROM fiches_besoin WHERE id_besoin = :id");
    $req_prep->execute(array('id' => $id));
    if(!$req_prep) {
        $retour = false;
    }
    
    $json = array('retour' => $retour);

    echo json_encode($json);
?>