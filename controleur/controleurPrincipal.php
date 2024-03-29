<?php

function controleurPrincipal($action) {
    $lesActions = array();
    $lesActions["defaut"] = "listeRestos.php";
    $lesActions["liste"] = "listeRestos.php";
    $lesActions["detail"] = "detailResto.php";
    $lesActions["recherche"] = "rechercheResto.php";
    $lesActions["connexion"] = "connexion.php";
    $lesActions["deconnexion"] = "deconnexion.php";
    $lesActions["profil"] = "monProfil.php";
    $lesActions["cgu"] = "cgu.php";
    $lesActions["aimer"] = "aimer.php";
    // Fonctionnalité
    $lesActions["addResto"] = "ajoutResto.php";

    // A enlever
    $lesActions["test"] = "test.php";

    if (array_key_exists($action, $lesActions)) {
        return $lesActions[$action];
    } 
    else {
        return $lesActions["defaut"];
    }
}

?>