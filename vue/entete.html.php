<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <title><?php echo $titre ?></title>
        <style type="text/css">
            @import url("css/base.css");
            @import url("css/form.css");
            @import url("css/cgu.css");
            @import url("css/corps.css");
        </style>
        <!-- Importation de Leaflet (Affichage sur la page) API -->
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
        <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
        
    </head>
    <body>
    <nav>
            
        <ul id="menuGeneral">
            <li><a href="./?action=accueil">Accueil</a></li> 
            <li><a href="./?action=recherche"><img src="images/rechercher.png" alt="loupe" />Recherche</a></li>
            <li></li> 

            <li id="logo"><a href="./?action=accueil"><img src="images/logoBarre.png" alt="logo" /></a></li>

            <li><a href="./?action=cgu">CGU</a></li>
            <?php if(isLoggedOn()){ ?>
            <!-- Ajout de la création de reservation -->
            <?php if ($_SESSION["restaurateur"]){ ?>
                <li><a href="./?action=addResto">Ajout restaurant</a></li> 
            <?php } ?>
            <li><a href="./?action=profil"><img src="images/profil.png" alt="loupe" />Mon Profil</a></li>
            <?php } 
            else{ ?>
            <li><a href="./?action=connexion"><img src="images/profil.png" alt="loupe" />Connexion</a></li>
            <?php } ?>

        </ul>
    </nav>
    <div id="bouton">
        <div></div>
        <div></div>
        <div></div>
    </div>
    <ul id="menuContextuel">
        <li><img src="images/logoBarre.png" alt="logo" /></li>
        <?php if (isset($menuBurger)) { ?>
            <?php for ($i = 0; $i < count($menuBurger); $i++) { ?>
                <li>
                    <a href="<?php echo $menuBurger[$i]['url']; ?>">
                        <?php echo $menuBurger[$i]['label']; ?>
                    </a>
                </li>
            <?php } ?>
        <?php } ?>
    </ul>

    <div id="corps">