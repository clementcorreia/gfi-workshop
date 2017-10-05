<?php
if (isset($_REQUEST['myFunction']) && $_REQUEST['myFunction'] != '') {
    $_REQUEST['myFunction']($_REQUEST);
}

function del_besoin($data) {

    $id=$data['id_besoin'];
    $retour = true;
    require_once "../../model/Model.php";
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