<!DOCTYPE html>
<html lang="fr">

<head>
    <?php include __DIR__ . '/../Templates/partials/head-content.php'; ?>
    <title>Sake mes régions</title>
</head>


<?php


// J'inclus le header
include __DIR__ . "/../Templates/header.php";

// J'inclus le nav
include __DIR__ . "/../Templates/nav.php";

// J'inclus le coeur de ma page_regions.php
include __DIR__ . "/../Templates/page_prefectures.tpl.php";

// J'inclus le footer
include __DIR__ . "/../Templates/footer.php";
?>