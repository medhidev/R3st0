<?php

include_once "bd.inc.php";

function getPhotosByIdR($idR) {
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from photo where idR=:idR");
        $req->bindValue(':idR', $idR, PDO::PARAM_INT);

        $req->execute();

        $ligne = $req->fetch(PDO::FETCH_ASSOC);
        while ($ligne) {
            $resultat[] = $ligne;
            $ligne = $req->fetch(PDO::FETCH_ASSOC);
        }
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

// Méthode d'ajout des photos
function addPhotos($nomPhoto, $idResto){
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $request = "insert into photo values (:nom, :idR);";
        $req = $cnx->prepare($request);

        // insertion des différent paramètre
        $req->bindValue(':nom', $nomPhoto, PDO::PARAM_STR);
        $req->bindValue(':idR', $idResto, PDO::PARAM_INT);
        $req->execute();

    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }

    return $resultat;
}


if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    // prog principal de test
    header('Content-Type:text/plain');

    echo "\n getPhotosByIdR(1) : \n";
    print_r(getPhotosByIdR(1));

}
?>