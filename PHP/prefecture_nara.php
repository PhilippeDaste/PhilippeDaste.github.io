<!DOCTYPE html>
<html lang="fr">

<head>
    <?php include __DIR__ . '/../Templates/partials/head-content.php'; ?>
    <title>Sake mes adresses</title>
</head>


<script src="<?= $_SERVER['BASE_URI'] ?>/../JS/slider_nara.js"></script>

<?php

/* {header("Location: ".$_POST['department']."");} */

// J'inclus le header
include __DIR__ . "/../Templates/header.php";

// J'inclus le nav
include __DIR__ . "/../Templates/nav.php";

// J'inclus le coeur de ma page_regions.php
include __DIR__ . "/../Templates/prefecture_nara.tpl.php";

// J'inclus le footer
include __DIR__ . "/../Templates/footer.php";
?>