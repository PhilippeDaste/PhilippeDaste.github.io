<?php
    // Todo 1 - récupérer le parametre d'url 'prefecture' avec $_GET
    $nomPrefecture = $_GET["prefecture"];
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <?php include '../Templates/partials/head-content.php'; ?>
    <title>Sake mes adresses</title>
</head>
<?php

    // J'inclus le header
    include "../Templates/header.php";

    // J'inclus le nav
    include "../Templates/nav.php";

    // J'inclus le coeur de ma page_regions.php
    /* Todo 2 - afficher dynamiquement, à partir de la valeur récupérée, le template correspondant à la préfecture demandée
    - include le template (ou require)
    - composer le nom du template en question à partir de la variable $nomPrefecture : "prefecture_$nomPrefecture.tpl.php"
    nom des fichiers : prefecture_shimane.tpl.php, prefecture_hyogo.tpl.php
    */
    include "../Templates/prefecture_$nomPrefecture.tpl.php";



    // J'inclus le footer
    include "../Templates/footer.php";
?>
<script src="../JS/slider.js"></script>