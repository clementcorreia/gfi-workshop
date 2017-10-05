<?php

if($_GET['ajax'] == 1){
    $id=$_GET['id_besoin'];
    $retour = true;

    $bdd = Model::$bdd;

    $req_prep = $bdd->prepare("DELETE FROM fiches_besoin WHERE id_besoin = :id");
    $req_prep->execute(array('id' => $id));
    if(!$req_prep) {
        $retour = false;
    }
    
    $json = array('retour' => $retour);

    echo json_encode($json);
}

?>